<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Periksa;

/**
 * PeriksaSearch represents the model behind the search form of `app\models\Periksa`.
 */
class PeriksaSearch extends Periksa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_periksa', 'id_pasien', 'id_penyakit', 'id_obat', 'id_dokter'], 'integer'],
            [['keluhan', 'diagnosa', 'tgl_periksa'], 'safe'],
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
        $query = Periksa::find();

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
            'id_periksa' => $this->id_periksa,
            'id_pasien' => $this->id_pasien,
            'id_penyakit' => $this->id_penyakit,
            'id_obat' => $this->id_obat,
            'id_dokter' => $this->id_dokter,
        ]);

        $query->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'tgl_periksa', $this->tgl_periksa]);

        return $dataProvider;
    }
}
