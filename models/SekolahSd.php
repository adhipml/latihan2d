<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sekolah_sd".
 *
 * @property int $id
 * @property string $nama
 * @property string $kelurahan
 * @property string $kepsek
 */
class SekolahSd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sekolah_sd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kelurahan', 'kepsek'], 'required'],
            [['nama', 'kelurahan', 'kepsek'], 'string', 'max' => 255],
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
            'kelurahan' => 'Kelurahan',
            'kepsek' => 'Kepsek',
        ];
    }
}
