<?php
class Controller_Report extends Controller_Template
{

	public function action_index()
	{
		$data['reports'] = Model_Report::find_all();
		$this->template->title = "Reports";
		$this->template->content = View::forge('report/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('report');

		$data['report'] = Model_Report::find_by_pk($id);

		$this->template->title = "Report";
		$this->template->content = View::forge('report/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Report::validate('create');

			if ($val->run())
			{
				$report = Model_Report::forge(array(
					'date' => Input::post('date'),
					'reportno' => Input::post('reportno'),
					'fullname' => Input::post('fullname'),
					'goals' => Input::post('goals'),
					'objectives' => Input::post('objectives'),
					'taskdealine' => Input::post('taskdealine'),
					'taskdescription' => Input::post('taskdescription'),
					'taskstatus' => Input::post('taskstatus'),
				));

				if ($report and $report->save())
				{
					Session::set_flash('success', 'Added report #'.$report->id.'.');
					Response::redirect('report');
				}
				else
				{
					Session::set_flash('error', 'Could not save report.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Reports";
		$this->template->content = View::forge('report/create');

	}
	public function action_insertreport()
	{
			/*	$report = Model_Report::forge(array(
					'date' => 'date',
					'reportno' => 'reportno',
					'fullname' => 'fullname',
					'goals' => 'goals',
					'objectives' => 'objectives',
					'taskdealine' => 'taskdealine',
					'taskdescription' => 'taskdescription',
					'taskstatus' => 'taskstatus',
				));*/

				$report = Model_Report::forge(array(
					'date' => Input::post('date'),
					'reportno' => Input::post('reportno'),
					'fullname' => Input::post('fullname'),
					'goals' => Input::post('goals'),
					'objectives' => Input::post('objectives'),
					'taskdealine' => Input::post('taskdealine'),
					'taskdescription' => Input::post('taskdescription'),
					'taskstatus' => Input::post('taskstatus'),
				));
				try{
					$report->save();
					$res = ['save' => 'true'];
					echo json_encode($res);
				}
				catch(exception $e)
				{

					$res = ['save' => 'failed'];
					echo json_encode($res);
				}

		$this->template->title = "Reports";
		$this->template->content = View::forge('report/test');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('report');

		$report = Model_Report::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Report::validate('edit');

			if ($val->run())
			{
				$report->date = Input::post('date');
				$report->reportno = Input::post('reportno');
				$report->fullname = Input::post('fullname');
				$report->goals = Input::post('goals');
				$report->objectives = Input::post('objectives');
				$report->taskdealine = Input::post('taskdealine');
				$report->taskdescription = Input::post('taskdescription');
				$report->taskstatus = Input::post('taskstatus');

				if ($report->save())
				{
					Session::set_flash('success', 'Updated report #'.$id);
					Response::redirect('report');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('report', $report, false);
		$this->template->title = "Reports";
		$this->template->content = View::forge('report/edit');

	}

	public function action_delete($id = null)
	{
		if ($report = Model_Report::find_one_by_id($id))
		{
			$report->delete();

			Session::set_flash('success', 'Deleted report #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete report #'.$id);
		}

		Response::redirect('report');

	}

}
