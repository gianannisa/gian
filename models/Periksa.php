<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periksa".
 *
 * @property int $id_periksa
 * @property string $keluhan
 * @property string $diagnosa
 * @property string $tgl_periksa
 * @property int $id_pasien
 * @property int $id_penyakit
 * @property int $id_obat
 * @property int $id_dokter
 */
class Periksa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'periksa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keluhan', 'diagnosa', 'tgl_periksa', 'id_pasien', 'id_penyakit', 'id_obat', 'id_dokter'], 'required'],
            [['id_pasien', 'id_penyakit', 'id_obat', 'id_dokter'], 'integer'],
            [['keluhan', 'diagnosa', 'tgl_periksa'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_periksa' => 'Id Periksa',
            'keluhan' => 'Keluhan',
            'diagnosa' => 'Diagnosa',
            'tgl_periksa' => 'Tgl Periksa',
            'id_pasien' => 'Id Pasien',
            'id_penyakit' => 'Id Penyakit',
            'id_obat' => 'Id Obat',
            'id_dokter' => 'Id Dokter',
        ];
    }
    public function getPasien()
    {
        return $this->hasOne(Pasien::class,['id_pasien' => 'id_pasien']);
    }
    public function getPenyakit()
    {
        return $this->hasOne(Penyakit::class,['id_penyakit' => 'id_penyakit']);
    }
    public function getObat()
    {
        return $this->hasOne(Obat::class,['id_obat' => 'id_obat']);
    }
    public function getDokter()
    {
        return $this->hasOne(Dokter::class,['id_dokter' => 'id_dokter']);
    }
}
