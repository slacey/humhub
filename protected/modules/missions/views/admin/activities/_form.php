<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use humhub\modules\missions\models\Missions

/* @var $this yii\web\View */
/* @var $model app\modules\missions\models\Objectives */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <!--<div class="form-group">
        <?= $form->field($model, 'mission_id')->dropdownList(
            ArrayHelper::map(Missions::find()->all(), 'id', 'title'),
            ['prompt' => 'Select Mission']
        ) ?>
   </div>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Edit'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>