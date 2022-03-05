<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Countryman;

/**
 * CountrymanSearch represents the model behind the search form of `common\models\Countryman`.
 */
class CountrymanSearch extends Countryman
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl', 'text_uz', 'text_ru', 'text_en', 'text_cyrl', 'fio_ru', 'fio_en', 'fio_uz', 'fio_cyrl', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'lavozim_cyrl', 'information_uz', 'information_ru', 'information_en', 'information_cyrl', 'country_uz', 'country_ru', 'country_en', 'country_cyrl', 'photo'], 'safe'],
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
        $query = Countryman::find();

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

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_cyrl', $this->name_cyrl])
            ->andFilterWhere(['like', 'text_uz', $this->text_uz])
            ->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'text_en', $this->text_en])
            ->andFilterWhere(['like', 'text_cyrl', $this->text_cyrl])
            ->andFilterWhere(['like', 'fio_ru', $this->fio_ru])
            ->andFilterWhere(['like', 'fio_en', $this->fio_en])
            ->andFilterWhere(['like', 'fio_uz', $this->fio_uz])
            ->andFilterWhere(['like', 'fio_cyrl', $this->fio_cyrl])
            ->andFilterWhere(['like', 'lavozim_uz', $this->lavozim_uz])
            ->andFilterWhere(['like', 'lavozim_ru', $this->lavozim_ru])
            ->andFilterWhere(['like', 'lavozim_en', $this->lavozim_en])
            ->andFilterWhere(['like', 'lavozim_cyrl', $this->lavozim_cyrl])
            ->andFilterWhere(['like', 'information_uz', $this->information_uz])
            ->andFilterWhere(['like', 'information_ru', $this->information_ru])
            ->andFilterWhere(['like', 'information_en', $this->information_en])
            ->andFilterWhere(['like', 'information_cyrl', $this->information_cyrl])
            ->andFilterWhere(['like', 'country_uz', $this->country_uz])
            ->andFilterWhere(['like', 'country_ru', $this->country_ru])
            ->andFilterWhere(['like', 'country_en', $this->country_en])
            ->andFilterWhere(['like', 'country_cyrl', $this->country_cyrl])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
