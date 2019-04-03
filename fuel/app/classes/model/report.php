<?php
class Model_Report extends Model_Crud
{
	protected static $_table_name = 'reports';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('date', 'Date', 'required|max_length[255]');
		$val->add_field('reportno', 'Reportno', 'required|max_length[255]');
		$val->add_field('fullname', 'Fullname', 'required|max_length[255]');
		$val->add_field('goals', 'Goals', 'required|max_length[255]');
		$val->add_field('objectives', 'Objectives', 'required|max_length[255]');
		$val->add_field('taskdealine', 'Taskdealine', 'required|max_length[255]');
		$val->add_field('taskdescription', 'Taskdescription', 'required|max_length[255]');
		$val->add_field('taskstatus', 'Taskstatus', 'required|max_length[255]');

		return $val;
	}

}
