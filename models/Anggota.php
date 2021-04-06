<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $alamat
 * @property string|null $telepon
 * @property string|null $email
 * @property int|null $status_aktif
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['status_aktif'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama', 'alamat'], 'string', 'max' => 255],
            [['telepon', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'status_aktif' => 'Status Aktif',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
