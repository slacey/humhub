<?php

namespace app\modules\powers\models;

use Yii;

use app\modules\missions\models\Activities;

/**
 * This is the model class for table "activity_powers".
 *
 * @property integer $id
 * @property integer $activity_id
 * @property integer $power_id
 * @property integer $flag
 * @property integer $value
 * @property string $created_at
 * @property string $modified_at
 *
 * @property Powers $power
 * @property Activity $activity
 */
class ActivityPowers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'activity_powers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_id', 'power_id', 'flag', 'value'], 'required'],
            [['activity_id', 'power_id', 'flag', 'value'], 'integer'],
            [['created_at', 'modified_at'], 'safe'],
            [['power_id'], 'exist', 'skipOnError' => true, 'targetClass' => Powers::className(), 'targetAttribute' => ['power_id' => 'id']],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Activities::className(), 'targetAttribute' => ['activity_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'activity_id' => Yii::t('app', 'Activity ID'),
            'power_id' => Yii::t('app', 'Power ID'),
            'flag' => Yii::t('app', 'Flag'),
            'value' => Yii::t('app', 'Value'),
            'created_at' => Yii::t('app', 'Created At'),
            'modified_at' => Yii::t('app', 'Modified At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPower()
    {
        return $this->hasOne(Powers::className(), ['id' => 'power_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(Activities::className(), ['id' => 'activity_id']);
    }
}
