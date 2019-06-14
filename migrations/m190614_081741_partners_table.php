<?php

use yii\db\Migration;

/**
 * Class m190614_081741_partners_table
 */
class m190614_081741_partners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%partners}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(255),
            'title_kz' => $this->string(255),
            'link' => $this->string(255),
            'position' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%partners}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190614_081741_partners_table cannot be reverted.\n";

        return false;
    }
    */
}
