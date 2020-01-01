<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[DeptAduan]].
 *
 * @see DeptAduan
 */
class DeptAduanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DeptAduan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DeptAduan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
