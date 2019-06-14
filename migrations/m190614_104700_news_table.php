<?php

use yii\db\Migration;

/**
 * Class m190614_104700_news_table
 */
class m190614_104700_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'alias' => $this->string(255),

            'cat' => $this->integer(),

            'title_ru' => $this->string(255),
            'text_ru' => $this->text(),

            'title_kz' => $this->string(255),
            'text_kz' => $this->text(),

            'image' => $this->string(255)

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190614_104700_news_table cannot be reverted.\n";

        return false;
    }
    */
}
