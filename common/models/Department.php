<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $dept_id
 * @property string $dept_name
 * @property string $created_at
 * @property string $updated_at
 *
 * @property DeptAduan[] $deptAduans
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['dept_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => Yii::t('app', 'Dept ID'),
            'dept_name' => Yii::t('app', 'Dept Name'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeptAduans()
    {
        return $this->hasMany(DeptAduan::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * {@inheritdoc}
     * @return DepartmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DepartmentQuery(get_called_class());
    }
}
