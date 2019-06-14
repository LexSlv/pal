<?php

use yii\db\Migration;

/**
 * Class m190614_085831_faq_table
 */
class m190614_085831_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%faq}}', [
            'id' => $this->primaryKey(),

            'q_ru' => $this->text(),
            'a_ru' => $this->text(),

            'q_kz' => $this->text(),
            'a_kz' => $this->text(),

            'position'=> $this->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%faq}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190614_085831_faq_table cannot be reverted.\n";

        return false;
    }
    */
}
