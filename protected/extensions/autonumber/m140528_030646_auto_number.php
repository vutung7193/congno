<?php

class m140528_030646_auto_number extends CDbMigration
{
	public function safeUp()
    {
        $this->createTable('{{auto_number}}', [
            'template_group' => 'string(64) NOT NULL',
            'template_num' => 'string(64) NOT NULL', 
            'auto_number' => 'integer NOT NULL',
            'update_time' => 'integer',
        ]);
        $this->addPrimaryKey('auto_number_pk', '{{%auto_number}}', ['template_group','template_num']);
    }

    public function safeDown()
    {
        $this->dropTable('{{auto_number}}');
    }
}