<?php

use yii\helpers\Html;
use humhub\libs\Helpers;
use humhub\models\Setting;
use yii\helpers\Url;
use yii\web\JsExpression;
use humhub\compat\CActiveForm;

$this->registerJsFile("js/missions/review.js"); 
$this->registerJsFile("js/missions/draft.js"); 

echo Html::beginForm();
  $activity = $evidence->getActivities();
  $mentor_average_votes = $evidence->getAverageRating('Mentors');
  $user_average_votes = $evidence->getAverageRating('Users');
  $agent_vote_count = $evidence->getVoteCount('Users');
  $agent_vote_count = $agent_vote_count ? $agent_vote_count : 0;
?>

<!-- EVIDENCE -->
<?php if($evidence->content->visibility >= 1): ?>
    <h5><?php print humhub\widgets\RichText::widget(['text' => $evidence->title]); ?></h5>
    <?php if (Yii::$app->user->getIdentity()->group->name == "Mentors"): ?>
      <h6><?php echo Yii::t('MissionsModule.base', 'By'); ?> <?php echo $name ?></h4>
    <?php endif; ?>
    <p><?php print humhub\widgets\RichText::widget(['text' => $evidence->text]);?></p>

    <hr>

    <!-- SHOW FILES -->

    <?php $files = \humhub\modules\file\models\File::getFilesOfObject($evidence); ?>

    <?php if(!empty($files)): ?>
    <ul class="files" style="list-style: none; margin: 0;" id="files-<?php echo $evidence->getPrimaryKey(); ?>">
        <?php foreach ($files as $file) : ?>
            <?php
            if ($file->getMimeBaseType() == "image" && Setting::Get('hideImageFileInfo', 'file'))
                continue;
            ?>
            <li class="mime <?php echo \humhub\libs\MimeHelper::getMimeIconClassByExtension($file->getExtension()); ?>"><a
                    href="<?php echo $file->getUrl(); ?>" target="_blank"><span
                        class="filename"><?php echo Html::encode(Helpers::trimText($file->file_name, 40)); ?></span></a>
                <span class="time" style="padding-right: 20px;"> - <?php echo Yii::$app->formatter->asSize($file->size); ?></span>

                <?php if ($file->getExtension() == "mp3") : ?>
                    <!-- Integrate jPlayer -->
                    <?php
                    echo xj\jplayer\AudioWidget::widget(array(
                        'id' => $file->id,
                        'mediaOptions' => [
                            'mp3' => $file->getUrl(),
                        ],
                        'jsOptions' => [
                            'smoothPlayBar' => true,
                        ]
                    ));
                    ?> 
                <?php elseif ($file->canRead() && ($file->getExtension() == "png" || $file->getExtension() == "jpg" || $file->getExtension() == "jpeg")) : ?>

                  <br /><br />

                  <a href="<?php echo $file->getPreviewImageUrl(); ?>"><img src="<?php echo $file->getPreviewImageUrl(); ?>" width="200"/></a>

                <?php endif; ?>

            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <hr>

    <div class = "evidence-mission-box">
      <h6 style="margin-bottom:10px"><?= Yii::t('MissionsModule.base', 'Mission {mission}, Activity {activity}:', array('mission' => $activity->mission->position, 'activity' => $activity->position)); ?></h6>
      <h5><?php echo Html::a(
              (isset($activity->activityTranslations[0]) ? $activity->activityTranslations[0]->title : $activity->title),
              ['/missions/evidence/show', 'activityId' => $activity->id, 'sguid' => $contentContainer->guid], array('class' => '')); ?></h5>

      <div class="votes-container row" style="margin-top:10px">

        <div class="mentor-votes col-sm-4" style="margin-top:10px; border-right: 2px solid #254054;">
          <em><?php echo Yii::t('MissionsModule.base', 'Mentor Reviews'); ?></em>

          <div class="rating no-padding-left">
            <em>
              <?php echo Yii::t('MissionsModule.base', 'Average Rating: {votes}', array('votes' => $mentor_average_votes? number_format((float)$mentor_average_votes, 1, '.', '') : "-")); ?>
            </em>
            <em>
              <?php echo Yii::t('MissionsModule.base', 'Mentor Reviews: {votes}', array('votes' => $evidence->getVoteCount('Mentors')? $evidence->getVoteCount('Mentors') : "0")) ?>
            </em>
          </div>
        </div>

        <div class="stars col-sm-4">
          <?php for ($i = 0; $i < 5; $i++): ?>
            <?php if ($mentor_average_votes > $i): ?>
              <?php if (($mentor_average_votes - $i) < 1): ?>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
              <?php else: ?>
                <i class="fa fa-star" aria-hidden="true"></i>
              <?php endif; ?>
            <?php else: ?>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            <?php endif; ?>
          <?php endfor; ?>
          <p>
            <?php echo Yii::t('MissionsModule.base', 'Avg Mentor Rating'); ?>
          </p>
        </div>
        
        <div class="agent-votes col-sm-4" style="margin-top:10px">
          <em><?php echo Yii::t('MissionsModule.base', 'Agent Reviews'); ?></em>
          <div class="rating">
            <em>
              <?php echo Yii::t('MissionsModule.base', 'Average Rating: {votes}', array('votes' => $user_average_votes? number_format((float)$user_average_votes, 1, '.', '') : "-")); ?>
            </em>
            <em>
              <?php echo Yii::t('MissionsModule.base', 'Agent Reviews: {votes}', array('votes' => $agent_vote_count)) ?>
            </em>
          </div>
        </div>

      </div>

    </div>

    <?php echo Html::endForm(); ?>

    </br>

    <style media="screen">
      .panel .evidence-mission-box h6 {
        font-size: 10pt;
        text-transform: uppercase;
        text-align: center;
        margin: 10px 0 0 0;
      }

      .panel .evidence-mission-box h5 {
        text-transform: uppercase;
        text-align: center;
        margin: 0 0 0.5em 0;
        text-decoration: underline;
      }

      .panel .evidence-mission-box h5 a {
        color: #254054;
        font-weight: 100;
      }

      .panel .evidence-mission-box h5 a:hover {
        color:  #4B667A;
      }

      .panel .evidence-mission-box em {
        text-transform: uppercase;
        font-style: normal;
        font-size: 0.8em;
        color: #254054;
      }

      .stars {
        text-align: center;
        font-size: 2em;
        color: #ece046;
        /*margin-top: -14px;*/
      }

      .evidence-mission-box .stars p {
        text-transform: uppercase;
        font-size: 8pt;
        font-weight: bold;
      }

      .panel .evidence-mission-box p {
        margin: 0;
      }

      .panel .evidence-mission-box .agent-votes {
        text-align: right;
        float: right;
        border-left: 2px solid #254054;
      }

      .panel .evidence-mission-box .agent-votes p {
        font-size: 0.9em;
      }

      .no-padding-left {
        padding-left: 0 !important;
      }
    </style>

    <?php 
      if($evidence->content->user_id != Yii::$app->user->getIdentity()->id){
        //already voted
        if($vote = $evidence->getUserVote()){
          echo $this->render('user_vote_view', array('vote' => $vote, 'contentContainer' => $contentContainer));  
        }elseif( Yii::$app->user->getIdentity()->group->name == "Mentors"){
          echo $this->render('mentor_review', array('evidence' => $evidence, 'activity' => $activity));  
        }
      } 
    ?>

    <BR>

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h6 class="panel-title">

                    <a  style="color:#254054; cursor: default" aria-expanded="false" class="collapsed">
                        <?= Yii::t('MissionsModule.base', 'Mentor Reviews') ?>
                    </a>
                </h6>
            </div>

            <div class="panel-body">
                <div id="collapseMentorEvidenceReviews<?= $evidence->id ?>"  class="panel-collapse" aria-expanded="false">
                    <div class="">
                        <?php
                        $votes = $evidence->getVotes('Mentors');
                        ?>

                        <?php if(!$votes || sizeof($votes) <= 0): ?>
                            <p>
                                <?php echo Yii::t('MissionsModule.base', 'No mentor reviews'); ?>
                            </p>
                        <?php endif; ?>

                        <?php foreach($votes as $vote): ?>
                            <div style = "padding: 10px 10px 3px; margin-bottom: 20px; border: 3px solid #9013FE; word-wrap: break-word;">
                                <p><?php echo Yii::t('MissionsModule.base', 'Comment: {comment}', array('comment' => $vote->comment)); ?></p>

                                <?php if($vote->value > 0 ): ?>
                                    <div class="stars" style="text-align:left;">
                                      <?php for ($i = 0; $i < 5; $i++): ?>
                                        <?php if ($vote->value > $i): ?>
                                          <?php if (($vote->value - $i) < 1): ?>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                          <?php else: ?>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                          <?php endif; ?>
                                        <?php else: ?>
                                          <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <?php endif; ?>
                                      <?php endfor; ?>
                                    </div>
                                <?php else: ?>
                                  <p style="color:red"><?php echo Yii::t('MissionsModule.base', 'Does not meet rubric'); ?></p>
                                <?php endif; ?>

                                <?php if(Yii::$app->user->getIdentity()->group->name == "Mentors" || $vote->user->group->name == "Mentors"): ?>
                                    <p><?php echo Yii::t('MissionsModule.base', 'By'); ?>
                                    <a href="<?= ($vote->user->getUrl()) ?>">
                                        <?= ($vote->user->username) ?>
                                    </a>,
                                    <?php echo \humhub\widgets\TimeAgo::widget(['timestamp' => $vote->created_at]); ?></p>
                                <?php else: ?>
                                    <p><?php echo Yii::t('MissionsModule.base', 'By Anonymous, {time}', array('time' => \humhub\widgets\TimeAgo::widget(['timestamp' => $vote->created_at]))); ?></p>
                                <?php endif; ?>

                                <?php echo \humhub\modules\comment\widgets\CommentLink::widget(['object' => $vote, 'mode' => \humhub\modules\comment\widgets\CommentLink::MODE_INLINE]); ?>
                                <?php echo \humhub\modules\comment\widgets\Comments::widget(array('object' => $vote)); ?>

                                <div style="margin:20px 0 10px">
                                  <?php 
                                    $enable = "";
                                          $disable = "hidden";
                                          $disables = "hidden";

                                          if ($vote->quality == 1) {
                                              $enable = "hidden";
                                              $disable = "";
                                              $disables = "";

                                          } 
                                  ?>
                                    <?php if(Yii::$app->user->isAdmin()): ?>
                                        <?php


                                          echo \humhub\widgets\AjaxButton::widget([
                                              'label' => Yii::t('MissionsModule.base', 'Mark as quality review'),
                                              'beforeSend' => new yii\web\JsExpression("function(html){  if(!confirm('".Yii::t('MissionsModule.base', 'Are you sure?')."')){return false;} }"),
                                              'ajaxOptions' => [
                                                  'type' => 'POST',
                                                  'success' => new yii\web\JsExpression('function(){
                                              $("#btn-enable-module-' . $vote->id . '").addClass("hidden");
                                              $("#btn-disable-module-' . $vote->id . '").removeClass("hidden");
                                              $("#btn-disables-module-' . $vote->id . '").removeClass("hidden");
                                              }'),
                                                  'url' => Url::to(['admin/update-quality-reviews', 'id' => $vote->id, 'mark' => 1, 'user_id' => $vote->user_id]),
                                              ],
                                              'htmlOptions' => [
                                                  'class' => 'btn btn-sm btn-primary '. $enable,
                                                  'id' => 'btn-enable-module-' . $vote->id
                                              ]
                                          ]);
                                          ?>


                                          <?php

                                          echo \humhub\widgets\AjaxButton::widget([
                                              'label' => Yii::t('MissionsModule.base', 'Unmark as quality review'),
                                              'beforeSend' => new yii\web\JsExpression("function(html){  if(!confirm('".Yii::t('MissionsModule.base', 'Are you sure?')."')){return false;} }"),
                                              'ajaxOptions' => [
                                                  'type' => 'POST',
                                                  'success' => new yii\web\JsExpression('function(){
                                              $("#btn-enable-module-' . $vote->id . '").removeClass("hidden");
                                              $("#btn-disable-module-' . $vote->id . '").addClass("hidden");
                                              $("#btn-disables-module-' . $vote->id . '").addClass("hidden");
                                               }'),
                                                  'url' => Url::to(['admin/update-quality-reviews', 'id' => $vote->id, 'mark' => 0, 'user_id' => $vote->user_id]),
                                              ],
                                              'htmlOptions' => [
                                                  'class' => 'btn btn-sm btn-info '. $disable,
                                                  'id' => 'btn-disable-module-' . $vote->id
                                              ]
                                          ]);
                                          ?>
                                      <div class="trophy-icon <?= $disables ?>" id="btn-disables-module-<?php echo $vote->id; ?>"><i class="fa fa-trophy fa-lg" aria-hidden="true"></i></div>

                                    <?php else: ?>

                                      <div class="trophy-icon agent <?= $disables ?>" id="btn-disables-module-<?php echo $vote->id; ?>"><i class="fa fa-trophy fa-lg" aria-hidden="true"></i></div>

                                    <?php endif; ?>

                                    

                                </div>

                            </div>


                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h6 class="panel-title">
                    <a style="color:#254054; cursor: default" aria-expanded="false" class="collapsed">
                        <?= Yii::t('MissionsModule.base', 'Agent Reviews') ?>
                    </a>
                </h6>
            </div>

            <div class="panel-body">
                <?php
                    $votes = $evidence->getVotes('Users');
                    $vote = array_shift($votes);
                    if($vote){
                      echo $this->render('user_vote_view', array('vote' => $vote, 'contentContainer' => $contentContainer));
                    }
                ?>
                <div id="collapseAgentEvidenceReviews<?= $evidence->id ?>"  class="panel-collapse collapse" aria-expanded="false">
                    <div class="">
                        <?php 
                          foreach($votes as $vote){
                            echo $this->render('user_vote_view', array('vote' => $vote, 'contentContainer' => $contentContainer));
                          }
                        ?>
                    </div>
                </div>

            <?php if($agent_vote_count > 1): ?>
            <a href="#collapseAgentEvidenceReviews<?= $evidence->id ?>"  class="btn btn-sm btn-primary " data-toggle="collapse">
               <?= Yii::t('MissionsModule.base', 'Show {total_reviews} agent reviews', ['total_reviews' => $agent_vote_count - 1]) ?>
            </a>      
            <?php elseif($agent_vote_count == 0): ?>
              <p>
                <?= Yii::t('MissionsModule.base', 'No agent reviews') ?>
              </p>
            <?php endif; ?>   
            </div>
        </div>

    </div>

<!-- DRAFT -->
<?php else: ?>
    <?php

        $form = CActiveForm::begin(['id' => 'evidence-edit-form_' . $evidence->id]);

        echo Html::hiddenInput('activityId', $activity->id);

        echo $form->textArea($evidence, 'title', array('class' => 'form-control autosize contentForm', 'id' => 'evidence_input_title_' . $evidence->id, 'rows' => '1', "tabindex" => "1", 'placeholder' => Yii::t('MissionsModule.widgets_views_evidenceForm', 'Edit your Evidence title...')));
        echo $form->textArea($evidence, 'text', array('class' => 'text-margin form-control autosize contentForm count-chars', 'id' => 'evidence_input_text_' . $evidence->id, 'rows' => '10', "tabindex" => "2", 'pattern' => '.{0}|.{140,}', 'required' => true, 'placeholder' => Yii::t('MissionsModule.widgets_views_evidenceForm', 'Edit your Evidence content...')));
        ?>

        <div id="counter" style="font-weight:bold">
            <span id="current<?= $evidence->id ?>"><?= mb_strlen($evidence->text) ?></span>
            <span id="minimun<?= $evidence->id ?>">/ 140</span>
        </div>

        <?php

        echo "<br>";
        echo "<div>";

        echo \humhub\widgets\AjaxButton::widget([
            'label' => Yii::t('MissionsModule.widgets_EvidenceFormWidget', 'Save Draft'),
            'ajaxOptions' => [
                'dataType' => 'json',
                'type' => 'POST',
                'url' => $evidence->content->container->createUrl('/missions/evidence/update', ['id' => $evidence->id]),
            ],
            'htmlOptions' => [
                'class' => 'btn btn-primary btn-comment-submit',
                'id' => 'evidence_edit_post_' . $evidence->id,
                'type' => 'submit'
            ]
        ]);

        echo \humhub\widgets\AjaxButton::widget([
            'label' => Yii::t('MissionsModule.base', 'Publish'),
            'ajaxOptions' => [
                'dataType' => 'json',
                'type' => 'POST',
                'url' => $evidence->content->container->createUrl('/missions/evidence/publish', ['id' => $evidence->id]),
            ],
            'htmlOptions' => [
                'class' => 'btn btn-success',
                'id' => 'evidence_publish_post_' . $evidence->id,
                'type' => 'submit'
            ]
        ]);

        echo humhub\modules\file\widgets\FileUploadButton::widget(array(
            'uploaderId' => 'post_upload_' . $evidence->id,
            'object' => $evidence
        ));

        ?>

    </div>

    <?php

         // Creates a list of already uploaded Files
        echo \humhub\modules\file\widgets\FileUploadList::widget(array(
            'uploaderId' => 'post_upload_' . $evidence->id,
            'object' => $evidence
        ));

        CActiveForm::end();

    ?>

<?php endif; ?>

<style type="text/css">

.statistics{
  font-size: 12px;
  text-align: right;
  margin-right: 2%;
}

.activity_area{
  font-size: 12px;
}

.trophy-icon{
    float: right;
    color: #DED017;
}

.trophy-icon.agent{
  position: absolute;
  right: 40px;
  bottom: 50px;
}

</style>

<script>

review_action_url = "<?= $contentContainer->createUrl('/missions/evidence/review'); ?>";
review_no_points_message = "<?= Yii::t('MissionsModule.base', 'Choose how many points you will award this evidence.') ?>";
review_yes_or_no_message = "<?= Yii::t('MissionsModule.base', 'Please, Answer yes or no.') ?>";

evidence_id = <?= $evidence->id ?>;


jQuery(document).on('ajaxComplete', function () {
  var $forms    = $('form.review'),
      formCount = $forms.length,
      i         = 0;

  for (i; i < formCount; i++) {
    var id            = $forms[i].id.replace('review', ''),
        $form         = $('#review' + id),
        $submitButton = $('#post_submit_review' + id);

    $submitButton.off();
    $submitButton.on('click', function(e){
      var id  = e.target.id.replace('post_submit_review', ''),
          opt = $('#review' + id).find('input[name="yes-no-opt'+id+'"]:checked').val();

      if (opt == 'no') {
        if (confirm("<?php echo Yii::t('MissionsModule.base', 'Are you sure you want to submit this review?'); ?>")){
          $('#review' + id).submit(
              function(){
                  return validateReview(id);
              }
          );
        } else {
          e.preventDefault();
          return false;
        }
      } else {
        $('#review' + id).submit(function(e){
            e.preventDefault();
            return validateReview(id);
          }
        );
      }

    });
  }
});

</script>


<style>

/*
Reference:
https://www.everythingfrontend.com/posts/star-rating-input-pure-css.html
*/

.rating {
    overflow: hidden;
    display: inline-block;
    position: relative;
    font-size: 10pt !important;
}
.rating-input {
    float: right;
    width: 16px;
    height: 16px;
    padding: 0;
    margin: 0 0 0 -16px;
    opacity: 0;
}
.rating:hover .rating-star:hover,
.rating:hover .rating-star:hover ~ .rating-star,
.rating-input:checked ~ .rating-star {
    background-position: 0 0;
}
.rating-star,
.rating:hover .rating-star {
    position: relative;
    float: right;
    display: block;
    width: 40px;
    height: 40px;
    background: url('http://kubyshkin.ru/samples/star-rating/star.png') 0 -40px;
    background-size: cover;
}

  .panel .evidence-mission-box h6 {
    font-size: 10pt;
    text-transform: uppercase;
    text-align: center;
    margin: 10px 0 0 0;
  }

  .panel .evidence-mission-box h5 {
    text-transform: uppercase;
    text-align: center;
    margin: 0;
    text-decoration: underline;
  }

  .panel .evidence-mission-box h5 a {
    color: #254054;
    font-weight: 100;
  }

  .panel .evidence-mission-box h5 a:hover {
    color:  #4B667A;
  }

  .panel .evidence-mission-box em {
    text-transform: uppercase;
    font-style: normal;
    font-size: 0.8em;
    color: #254054;
  }

  .stars {
    text-align: center;
    font-size: 2em;
    color: #ece046;
    /*margin-top: -14px;*/
  }

  .evidence-mission-box .stars p {
    text-transform: uppercase;
    font-size: 8pt;
    font-weight: bold;
  }

  .panel .evidence-mission-box p {
    margin: 0;
  }

  .panel .evidence-mission-box .agent-votes {
    text-align: right;
    float: right;
    border-left: 2px solid #254054;
  }

  .panel .evidence-mission-box .agent-votes p {
    font-size: 0.9em;
  }

  .no-padding-left {
    padding-left: 0 !important;
  }
</style>
