<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Errors404;

/**
 * Errors404Search represents the model behind the search form of `common\models\Errors404`.
 */
class Errors404Search extends Errors404
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'error_count', 'status'], 'integer'],
            [['error_link', 'answer_link', 'date'], 'safe'],
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
        $query = Errors404::find();

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
            'error_count' => $this->error_count,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'error_link', $this->error_link])
            ->andFilterWhere(['like', 'answer_link', $this->answer_link]);

        return $dataProvider;
    }
}
