<?php

namespace Fuel\Migrations;

class Create_reports
{
	public function up()
	{
		\DBUtil::create_table('reports', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'date' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'reportno' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'fullname' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'goals' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'objectives' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'taskdealine' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'taskdescription' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'taskstatus' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('reports');
	}
}