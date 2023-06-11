<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%krs}}`.
 */
class m230526_002231_create_krs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%krs}}', [
            'id' => $this->primaryKey(),
            'id_mahasiswa' => $this->string(30)->notNull()->unique(),
            'id_matakuliah' => $this->string(30)->notNull(),
            'semester' => $this->string(30)->notNull(),
            'status' => $this->string(30)->notNull(),
        ]);
    }

}
