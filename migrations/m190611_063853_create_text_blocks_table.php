<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%text_blocks}}`.
 */
class m190611_063853_create_text_blocks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%text_blocks}}', [
            'id' => $this->primaryKey(),
            'alias' => $this->string(255),
            'ru' => $this->text(),
            'kz' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%text_blocks}}');
    }
}
