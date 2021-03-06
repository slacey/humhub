<?php

use yii\helpers\Html;
use humhub\modules\space\models\Space;
use yii\helpers\Url;
use app\modules\teams\models\Team;
use app\modules\missions\models\Votes;
use app\modules\missions\models\Evidence;

$teams_count = count($teams);

$activity = null;

$user = Yii::$app->user->getIdentity();

if($user->group->name == "Mentors"){
  $title = Yii::t('MissionsModule.base', 'Review Evidences');
} else{
  $title = Yii::t('MissionsModule.base', 'Tag Evidences');
}

$this->pageTitle = $title;

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 style="margin-top:10px"><?php echo $title; ?></h4>
        <?php if($activity): ?>
        <h6><?php echo Yii::t('MissionsModule.base', '{first} of {total}', array('first' => ($evidence_count - $evidence_to_review_count + 1), 'total' => $evidence_count)); ?></h6>
        <?php endif; ?>
    </div>
    <div class="panel-body">
      <ul class="media-list">

          <?php if($teams_count <= 0): ?>
              <div class="panel-body">

                  <?php if($this->context->action->actionMethod === "actionMyteams"): ?>
                      <h5><?php echo Yii::t('MissionsModule.mentor', 'Oops, there is no team here yet.'); ?></h5>
                      <h5><?php echo Yii::t('MissionsModule.mentor', 'Follow a team to add it to the list.'); ?></h6>
                      <br>
                      <h5>
                          Go to the
                          <a href="<?= Url::to(['/missions/mentor/teams']) ?>">teams page</a> and start following a team.
                      </h5>
                  <?php elseif($this->context->action->actionMethod === "actionTeams"): ?>
                      <h5><?php echo Yii::t('MissionsModule.mentor', 'Oops, there is no team here yet.'); ?></h5>
                  <?php endif; ?>

              </div>
          <?php endif; ?>

          <?php foreach ($teams as $team) : ?>
             <li class="with-sub-list">
                  <?php $space = Space::findOne($team->id) ?>

                  <div class="media">

                      <!-- Evidence Count -->
                      <div class="pull-right">
                          <strong><?php echo Yii::t('MissionsModule.base', 'Reviewed'); ?>:</strong>
                          <?php echo $team->getReviewedEvidenceCount($user->id); ?>
                          &nbsp;/&nbsp;
                          <?php echo $team->getEvidenceCount();?>
                      </div>

                      <?php echo \humhub\modules\space\widgets\Image::widget([
                          'space' => $space,
                          'width' => 40,
                          'htmlOptions' => [
                              'class' => 'media-object img-rounded',
                          ],
                          'link' => 'true',
                          'linkOptions' => [
                              'class' => 'pull-left',
                          ],
                      ]); ?>

                      <div class="media-body">
                          <h4 class="media-heading"><a href="<?php echo $team->getUrl(); ?>" class="link-text"><?php echo Html::encode($team->name); ?></a></h4>
                          <span><?php echo Yii::t('MissionsModule.base', 'Description: {description}', array('description' => Html::encode(humhub\libs\Helpers::truncateText($team->description, 100)))); ?></span>
                      </div>
                  </div>

                  <?php $team_members = $team->getTeamMembers(); ?>
                  <br />
                  <ul class="media-list">
                    <?php foreach ($team_members as $team_member): ?>
                      <a href="<?php echo $team_member->getUrl(); ?>">
                        <li class="link">
                            <?php echo $team_member->getName(); ?>
                            <div class="pull-right">
                              <strong><?php echo Yii::t('MissionsModule.base', 'Reviewed'); ?>:</strong>
                              <?php echo Votes::getReviewCountByUsers($user->id, $team_member->id); ?>
                              &nbsp;/&nbsp;
                              <?php echo Evidence::getEvidenceCountForUser($team_member->id); ?>
                            </div>
                        </li>
                      </a>
                    <?php endforeach; ?>
                  </ul>


              </li>
          <?php endforeach; ?>

          <?php if($teams_count > 0): ?>
              <div class="panel-body">

                  <?php if($this->context->action->actionMethod === "actionMyteams"): ?>
                      <div><?php echo Yii::t('MissionsModule.mentor', 'Follow a team to add it to the list.'); ?></div>
                      <br>
                      <div>
                          Go to the
                          <a href="<?= Url::to(['/missions/mentor/teams']) ?>">teams page</a> and start following a team.
                      </div>
                  <?php endif; ?>

              </div>
          <?php endif; ?>

      </ul>
    </div>
</div>

<style media="screen">
  .link {
    cursor: pointer;
  }

  .media-list li.with-sub-list:hover {
    background-color: #fff;
    border-left: 1px solid #EDEDED;
  }

  .link-text:hover {
    border-bottom: 1px dotted #000;
  }
</style>
