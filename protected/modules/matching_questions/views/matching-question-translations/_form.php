<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model humhub\modules\matching_questions\models\MatchingQuestionTranslations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matching-question-translations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matching_question_id')->textInput() ?>

    <?= $form->field($model, 'language_id')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('MatchingModule.base', 'Create') : Yii::t('MatchingModule.base', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
