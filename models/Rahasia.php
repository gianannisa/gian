<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rahasia".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $agama
 */
class Rahasia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rahasia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'agama'], 'required'],
            [['nama', 'alamat', 'agama'], 'string', 'max' => 30],
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
            'agama' => 'Agama',
        ];
    }
}
