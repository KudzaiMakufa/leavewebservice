<?php
class Controller_Users extends Controller_Template
{

	public function action_index()
	{

		list(, $userid) = Auth::get_user_id();
		if($userid == 0){
			Response::redirect('login/create');
		}
		else{
		$data['reports'] = DB::select()->from('users')->where('id','!=' ,1 )->as_object()->execute();
		}
		$this->template->title = "REPORTit Users";
		$this->template->content = View::forge('users/users', $data);

	}
	public function action_logout($id = null)
	{
	
			Auth::logout();
	

		Response::redirect('users');

	}
		public function action_delete($id = null)
	{
	
			DB::delete('users')->where('id', $id)->execute();
			Session::set_flash('success', 'Deleted user #'.$id);
	

		Response::redirect('users');

	}
	public function action_activate($id = null)
	{
	
			DB::update('users')
    ->value("isactivated", "1")
    ->where('id', '=', $id)
    ->execute();
			Session::set_flash('success', 'Activated user #'.$id);
	

		Response::redirect('users');

	}
		public function action_deactivate($id = null)
	{
	
			DB::update('users')
    ->value("isactivated", "0")
    ->where('id', '=', $id)
    ->execute();
			Session::set_flash('success', 'Deactivated user #'.$id);
	

		Response::redirect('users');

	}

}
