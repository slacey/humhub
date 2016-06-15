<?php

namespace app\modules\missions\models;

use Yii;

/**
 * This is the model class for table "rubric_votes".
 *
 * @property integer $id
 * @property integer $activity_id
 * @property integer $evidence_id
 * @property integer $power_id
 * @property integer $flag
 * @property integer $value
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Powers $power
 * @property Activities $activity
 * @property Evidence $evidence
 * @property Votes[] $votes
 */
class RubricVotes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rubric_votes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_id', 'evidence_id', 'power_id', 'flag', 'value'], 'required'],
            [['activity_id', 'evidence_id', 'power_id', 'flag', 'value'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['power_id'], 'exist', 'skipOnError' => true, 'targetClass' => Powers::className(), 'targetAttribute' => ['power_id' => 'id']],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Activities::className(), 'targetAttribute' => ['activity_id' => 'id']],
            [['evidence_id'], 'exist', 'skipOnError' => true, 'targetClass' => Evidence::className(), 'targetAttribute' => ['evidence_id' => 'id']],
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
            'evidence_id' => Yii::t('app', 'Evidence ID'),
            'power_id' => Yii::t('app', 'Power ID'),
            'flag' => Yii::t('app', 'Flag'),
            'value' => Yii::t('app', 'Value'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvidence()
    {
        return $this->hasOne(Evidence::className(), ['id' => 'evidence_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVotes()
    {
        return $this->hasMany(Votes::className(), ['rubric_vote_id' => 'id']);
    }
}
