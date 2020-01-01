<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Aduan]].
 *
 * @see Aduan
 */
class AduanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Aduan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Aduan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
