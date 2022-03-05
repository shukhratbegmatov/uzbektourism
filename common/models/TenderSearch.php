<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tender;

/**
 * TenderSearch represents the model behind the search form of `common\models\Tender`.
 */
class TenderSearch extends Tender
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title_uz', 'title_cyrl', 'title_en', 'title_ru', 'desc_ru', 'desc_uz', 'desc_cyrl', 'desc_en', 'link_uz', 'link_ru', 'link_en', 'link_cyrl'], 'safe'],
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
        $query = Tender::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_cyrl', $this->title_cyrl])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'desc_ru', $this->desc_ru])
            ->andFilterWhere(['like', 'desc_uz', $this->desc_uz])
            ->andFilterWhere(['like', 'desc_cyrl', $this->desc_cyrl])
            ->andFilterWhere(['like', 'desc_en', $this->desc_en])
            ->andFilterWhere(['like', 'link_uz', $this->link_uz]);

        return $dataProvider;
    }
}
