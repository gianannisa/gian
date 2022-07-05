<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penyakit".
 *
 * @property int $id_penyakit
 * @property string $nama_penyakit
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_penyakit'], 'required'],
            [['nama_penyakit'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penyakit' => 'Id Penyakit',
            'nama_penyakit' => 'Nama Penyakit',
        ];
    }
}
