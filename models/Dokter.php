<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id_dokter
 * @property string $nama_dokter
 * @property string $spesialis
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dokter', 'spesialis'], 'required'],
            [['nama_dokter', 'spesialis'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter' => 'Id Dokter',
            'nama_dokter' => 'Nama Dokter',
            'spesialis' => 'Spesialis',
        ];
    }
}
