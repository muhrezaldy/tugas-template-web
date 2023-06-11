<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $nip
 * @property string $id_jurusan
 * @property string $nama_pegawai
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'id_jurusan', 'nama_pegawai'], 'required'],
            [['nip', 'id_jurusan', 'nama_pegawai'], 'string', 'max' => 30],
            [['id_jurusan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'id_jurusan' => 'Id Jurusan',
            'nama_pegawai' => 'Nama Pegawai',
        ];
    }
}
