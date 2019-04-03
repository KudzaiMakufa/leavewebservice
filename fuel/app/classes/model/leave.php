<?php
class Model_Leave extends Model_Crud
{
	protected static $_table_name = 'leaves';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('fullname', 'Fullname', 'required|max_length[255]');
		$val->add_field('leavetype', 'Leavetype', 'required|max_length[255]');
		$val->add_field('startdate', 'Startdate', 'required|max_length[255]');
		$val->add_field('enddate', 'Enddate', 'required|max_length[255]');
		$val->add_field('typeofday', 'Typeofday', 'required|max_length[255]');
		$val->add_field('notes', 'Notes', 'required|max_length[255]');

		return $val;
	}

}
