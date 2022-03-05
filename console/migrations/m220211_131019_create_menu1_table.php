<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu1}}`.
 */
class m220211_131019_create_menu1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu1}}', [
            'id' => $this->primaryKey(),
            'name_uz'=>$this->string(),
            'link'=>$this->string(),
            'parent_id'=>$this->string(),
            'menu_order'=>$this->string(),
            'status_none'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%menu1}}');
    }
}
