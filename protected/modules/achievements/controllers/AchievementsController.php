<?php

namespace humhub\modules\achievements\controllers;

class AchievementsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
