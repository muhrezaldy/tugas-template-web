<?php

use yii\db\Migration;

/**
 * Class m230524_070432_pegawai
 */
class m230524_070432_pegawai extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(30)->notNull(),
            'id_jurusan' => $this->string(30)->notNull()->unique(),
            'nama_pegawai' => $this->string(30)->notNull(),

        ]);
    }

    
}
