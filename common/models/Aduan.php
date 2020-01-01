<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aduan".
 *
 * @property int $aduan_id
 * @property string $aduan
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property User $user
 * @property DeptAduan[] $deptAduans
 */
class Aduan extends \yii\db\ActiveRecord
{

    public $dept_id;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aduan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aduan'], 'required'],
            [['user_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['aduan'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['dept_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aduan_id' => Yii::t('app', 'Aduan ID'),
            'aduan' => Yii::t('app', 'Aduan'),
            'user_id' => Yii::t('app', 'User ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeptAduans()
    {
        return $this->hasMany(DeptAduan::className(), ['aduan_id' => 'aduan_id']);
    }

    /**
     * {@inheritdoc}
     * @return AduanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AduanQuery(get_called_class());
    }
}
