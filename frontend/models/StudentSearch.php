<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Students;

/**
 * StudentSearch represents the model behind the search form of `frontend\models\Students`.
 */
class StudentSearch extends Students
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'reg_id', 'phone', 'county_id'], 'integer'],
            [['name', 'secname', 'middlename', 'birthday', 'email', 'university', 'faculty'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Students::find();

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
            'birthday' => $this->birthday,
            'reg_id' => $this->reg_id,
            'phone' => $this->phone,
            'county_id' => $this->county_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'secname', $this->secname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'university', $this->university])
            ->andFilterWhere(['like', 'faculty', $this->faculty]);

        return $dataProvider;
    }
}
