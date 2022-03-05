<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Digest;

/**
 * DigestSearch represents the model behind the search form of `common\models\Digest`.
 */
class DigestSearch extends Digest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'viewed', 'isactive'], 'integer'],
            [['title_cyrl', 'title_en', 'title_ru', 'title_uz', 'desc_cyrl', 'desc_en', 'desc_ru', 'desc_uz', 'content_cyrl', 'content_en', 'content_ru', 'content_uz', 'image', 'date'], 'safe'],
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
        $query = Digest::find();

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
            'date' => $this->date,
            'viewed' => $this->viewed,
            'isactive' => $this->isactive,
        ]);

        $query->andFilterWhere(['like', 'title_cyrl', $this->title_cyrl])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'desc_cyrl', $this->desc_cyrl])
            ->andFilterWhere(['like', 'desc_en', $this->desc_en])
            ->andFilterWhere(['like', 'desc_ru', $this->desc_ru])
            ->andFilterWhere(['like', 'desc_uz', $this->desc_uz])
            ->andFilterWhere(['like', 'content_cyrl', $this->content_cyrl])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
