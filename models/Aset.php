<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aset".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property int $id_aset_jenis
 */
class Aset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'id_aset_jenis'], 'required'],
            [['id_aset_jenis'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'id_aset_jenis' => 'Id Aset Jenis',
        ];
    }
}
