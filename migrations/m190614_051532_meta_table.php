<?php

use yii\db\Migration;

/**
 * Class m190614_051532_meta_table
 */
class m190614_051532_meta_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meta}}', [
            'id' => $this->primaryKey(),
            'alias' => $this->string(255),
            'title_ru' => $this->string(255),
            'title_kz' => $this->string(255),
            'description_ru' => $this->text(),
            'description_kz' => $this->text(),
            'keywords_ru' => $this->text(),
            'keywords_kz' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%meta}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190614_051532_meta_table cannot be reverted.\n";

        return false;
    }
    */
}
