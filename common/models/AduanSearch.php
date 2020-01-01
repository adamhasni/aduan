<?php

namespace common\Models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\Models\Aduan;

/**
 * AduanSearch represents the model behind the search form of `common\Models\Aduan`.
 */
class AduanSearch extends Aduan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aduan_id', 'user_id'], 'integer'],
            [['aduan', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Aduan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'aduan_id' => $this->aduan_id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'aduan', $this->aduan]);

        return $dataProvider;
    }
}
