<?php

namespace app\modules\achievements\models;

use Yii;

/**
 * This is the model class for table "user_achievements".
 *
 * @property integer $user_id
 * @property integer $achievement_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Achievements $achievement
 * @property User $user
 */
class UserAchievements extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_achievements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'achievement_id'], 'required'],
            [['user_id', 'achievement_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['achievement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Achievements::className(), 'targetAttribute' => ['achievement_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'achievement_id' => 'Achievement ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAchievement()
    {
        return $this->hasOne(Achievements::className(), ['id' => 'achievement_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
