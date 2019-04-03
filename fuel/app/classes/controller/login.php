<?php
class Controller_Login extends Controller_Template
{
	public $template = 'template_login';
	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$name = Input::post('username');
			$pass = Input::post('password');
			/*$name = "kidkudzy@gmail.com";
			$pass = "12345";*/

			//Debug::dump($name);Debug::dump($pass);die;

			if (Auth::login($name, $pass))
			{	
				list(, $userid) = Auth::get_user_id();
				
				if($userid == 1){
					Response::redirect('users');
				}
				else{
					Auth::logout();
					Session::set_flash('error' , 'Selected account has no administration rights');	
					Response::redirect('login/create');
				}
					
					
			}
			else{
				Session::set_flash('error' , 'Incorrect User Name and password');	
			}
		}

		$this->template->title = "Login";
		$this->template->content = View::forge('login/create');

	}

}
