<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aset;

/**
 * AsetSearch represents the model behind the search form of `app\models\Aset`.
 */
class AsetSearch extends Aset
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_aset_jenis'], 'integer'],
            [['kode', 'nama'], 'safe'],
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

    public function getQuerySearch($params)
    {
        $query = Aset::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_aset_jenis' => $this->id_aset_jenis,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $query;
    }

    /**
    * Creates data provider instance with search query applied
    *
    * @param array $params
    *
    * @return \yii\db\ActiveQuery
    */
    public function search($params)
    {
        $query = $this->getQuerySearch($params);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $dataProvider;
    }
}
