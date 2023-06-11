<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa018".
 *
 * @property int $id018
 * @property string $nim018
 * @property string $nama018
 * @property string $kelas018
 * @property string $status018
 */
class Mahasiswa018 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa018';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim018', 'nama018', 'kelas018', 'status018'], 'required'],
            [['nim018', 'nama018', 'status018'], 'string', 'max' => 255],
            [['kelas018'], 'string', 'max' => 11],
            [['nim018'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id018' => 'Id018',
            'nim018' => 'Nim018',
            'nama018' => 'Nama018',
            'kelas018' => 'Kelas018',
            'status018' => 'Status018',
        ];
    }
}
