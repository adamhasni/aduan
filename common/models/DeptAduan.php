<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dept_aduan".
 *
 * @property int $id
 * @property int $dept_id
 * @property int $aduan_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Aduan $aduan
 * @property Department $dept
 */
class DeptAduan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dept_aduan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id', 'aduan_id'], 'required'],
            [['dept_id', 'aduan_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['aduan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Aduan::className(), 'targetAttribute' => ['aduan_id' => 'aduan_id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'dept_id' => Yii::t('app', 'Dept ID'),
            'aduan_id' => Yii::t('app', 'Aduan ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAduan()
    {
        return $this->hasOne(Aduan::className(), ['aduan_id' => 'aduan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * {@inheritdoc}
     * @return DeptAduanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DeptAduanQuery(get_called_class());
    }
}
