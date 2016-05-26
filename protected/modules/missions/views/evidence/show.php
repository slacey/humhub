<?php

echo \humhub\modules\missions\widgets\WallCreateForm::widget([
    'contentContainer' => $contentContainer,
    'submitButtonText' => Yii::t('MissionsModule.widgets_EvidenceFormWidget', 'Submit Evidence'),
    'activity' => $activity,
]);
?>

<?php

$canCreateEvidences = $contentContainer->permissionManager->can(new \humhub\modules\missions\permissions\CreateEvidence());

echo \humhub\modules\content\widgets\Stream::widget(array(
    'contentContainer' => $contentContainer,
    'streamAction' => '/missions/evidence/stream',
    'messageStreamEmpty' => ($canCreateEvidences) ?
            Yii::t('MissionsModule.widgets_views_stream', 'There are no evidences yet! Be the first and create one...') :
            Yii::t('MissionsModule.widgets_views_stream', 'There are no evidences yet!'),
    'messageStreamEmptyCss' => ($canCreateEvidences) ? 'placeholder-empty-stream' : '',
    'filters' => [
    ]
));

?>