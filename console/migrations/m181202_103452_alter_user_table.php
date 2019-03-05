<?php

use yii\db\Migration;

/**
 * Class m181202_103452_alter_user_table
 */
class m181202_103452_alter_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'test_column', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'test_column');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181202_103452_alter_user_table cannot be reverted.\n";

        return false;
    }
    */
}
