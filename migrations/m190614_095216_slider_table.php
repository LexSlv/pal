<?php

use yii\db\Migration;

/**
 * Class m190614_095216_slider_table
 */
class m190614_095216_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),

            'title_ru' => $this->string(255),
            'description_ru' => $this->text(),

            'title_kz' => $this->string(255),
            'description_kz' => $this->text(),

            'img' => $this->string(255),
            'link' => $this->string(255),
            'position'=> $this->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slider}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190614_095216_slider_table cannot be reverted.\n";

        return false;
    }
    */
}
