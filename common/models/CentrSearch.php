<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Centr;

/**
 * CentrSearch represents the model behind the search form of `common\models\Centr`.
 */
class CentrSearch extends Centr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'short_en'], 'integer'],
            [['name_uz', 'name_ru', 'name_cyrl', 'name_en', 'fio_uz', 'fio_ru', 'fio_en', 'fio_cyrl', 'imya_cyrl', 'imya_en', 'imya_ru', 'imya_uz', 'short_uz', 'short_cyrl', 'short_ru', 'photo', 'doljnost_uz', 'doljnost_ru', 'doljnost_en', 'doljnost_cyrl', 'tel', 'email'], 'safe'],
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
        $query = Centr::find();

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
            'short_en' => $this->short_en,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_cyrl', $this->name_cyrl])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'fio_uz', $this->fio_uz])
            ->andFilterWhere(['like', 'fio_ru', $this->fio_ru])
            ->andFilterWhere(['like', 'fio_en', $this->fio_en])
            ->andFilterWhere(['like', 'fio_cyrl', $this->fio_cyrl])
            ->andFilterWhere(['like', 'imya_cyrl', $this->imya_cyrl])
            ->andFilterWhere(['like', 'imya_en', $this->imya_en])
            ->andFilterWhere(['like', 'imya_ru', $this->imya_ru])
            ->andFilterWhere(['like', 'imya_uz', $this->imya_uz])
            ->andFilterWhere(['like', 'short_uz', $this->short_uz])
            ->andFilterWhere(['like', 'short_cyrl', $this->short_cyrl])
            ->andFilterWhere(['like', 'short_ru', $this->short_ru])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'doljnost_uz', $this->doljnost_uz])
            ->andFilterWhere(['like', 'doljnost_ru', $this->doljnost_ru])
            ->andFilterWhere(['like', 'doljnost_en', $this->doljnost_en])
            ->andFilterWhere(['like', 'doljnost_cyrl', $this->doljnost_cyrl])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
