<?php

namespace humhub\modules\missions\controllers;

use Yii;
use app\modules\missions\models\Evidence;
use humhub\modules\file\models\File;
use yii\helpers\Json;
use humhub\modules\content\components\ContentContainerController;
use app\modules\teams\models\Team;

class ReviewController extends ContentContainerController
{

    public function actions()
    {

    }   

    public function getEvidenceToReviewCount($currentSpace){

        $user_id = Yii::$app->user->getIdentity()->id;

        $team_id = Team::getUserTeam($user_id);

        $query = (new \yii\db\Query())
        ->select(['count(distinct e.id) as count'])
        ->from('evidence as e')
        ->join('INNER JOIN', 'content as c', '`c`.`object_model`=\''.str_replace("\\", "\\\\", Evidence::classname()).'\' AND `c`.`object_id` = `e`.`id`')
        //->join('LEFT JOIN', 'space_membership s', '`s`.`user_id`=`c`.`user_id`')
        //->where('s.space_id != '.$team_id)
        ->where('c.space_id != '.$currentSpace->id)
        ->andWhere('c.user_id != '.$user_id)
        ->one();

        return $query['count'];
    }

    public function getNextEvidence($currentSpace){
        $nextEvidence = array();
        $evidence = null;
        $files = null;
        $user_id = Yii::$app->user->getIdentity()->id;

        $team_id = Team::getUserTeam($user_id);

        $subquery = '(SELECT v2.evidence_id from votes as v2 where v2.user_id = '.Yii::$app->user->getIdentity()->id.')';

        $query = (new \yii\db\Query())
        ->select(['e.id as id, count(distinct v.id) as vote_count'])
        ->from('evidence as e')
        ->join('INNER JOIN', 'content as c', '`c`.`object_model`=\''.str_replace("\\", "\\\\", Evidence::classname()).'\' AND `c`.`object_id` = `e`.`id`')
        ->join('LEFT JOIN', 'votes v', '`v`.`evidence_id`=`e`.`id`')
        //->join('LEFT JOIN', 'space_membership s', '`s`.`user_id`=`c`.`user_id`')
        ->where('c.space_id != '.$currentSpace->id)
        ->andWhere('e.id NOT IN  '.$subquery)
        ->andWhere('c.user_id != '.$user_id)
        ->groupBy('e.id')
        ->orderBy('vote_count ASC')
        ->All();

        $nextEvidence['evidence_to_review_count'] = sizeof($query);
        if($query)
        $query = $query[0];

        if($query && array_key_exists('id', $query)){
            $evidence_id = $query['id'];

            $evidence = Evidence::findOne($evidence_id);
            $files = File::findAll(array('object_model' => Evidence::classname(), 'object_id' => $evidence_id));
        }
        $nextEvidence['evidence'] = $evidence;
        $nextEvidence['files'] = $files;
        

        return $nextEvidence;
    }

    public function actionQueue(){

        $nextEvidence = $this->getNextEvidence();
        $nextEvidence['activity'] =  $nextEvidence['evidence']->getActivities();  

        header('Content-Type: application/json; charset="UTF-8"');
        $nextEvidence = Json::encode($nextEvidence);
        echo $nextEvidence;
        Yii::$app->end();
    }
   
    public function actionIndex()
    {   
        $nextEvidence = $this->getNextEvidence($this->contentContainer);
        $evidence = $nextEvidence['evidence'];
        $files = $nextEvidence['files'];
        $evidence_to_review_count = $nextEvidence['evidence_to_review_count'];
        $totalEvidence = $this->getEvidenceToReviewCount($this->contentContainer);

        return $this->render('index', array('contentContainer' => $this->contentContainer, 'evidence' => $evidence, 'files' => $files, 'evidence_count' => $totalEvidence, 'evidence_to_review_count' => $evidence_to_review_count));
    }

}
