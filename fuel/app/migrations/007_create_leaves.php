<?php

namespace Fuel\Migrations;

class Create_leaves
{
	public function up()
	{
		\DBUtil::create_table('leaves', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'fullname' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'leavetype' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'startdate' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'enddate' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'typeofday' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'notes' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('leaves');
	}
}