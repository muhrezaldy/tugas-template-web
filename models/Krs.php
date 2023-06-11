<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "krs".
 *
 * @property int $id
 * @property string $id_mahasiswa
 * @property string $id_matakuliah
 * @property string $semester
 * @property string $status
 */
class Krs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'krs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'id_matakuliah', 'semester', 'status'], 'required'],
            [['id_mahasiswa', 'id_matakuliah', 'semester', 'status'], 'string', 'max' => 30],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'id_matakuliah' => 'Id Matakuliah',
            'semester' => 'Semester',
            'status' => 'Status',
        ];
    }
}
