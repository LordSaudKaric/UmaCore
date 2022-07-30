<?php

class Users extends Controller
{


    public function register()
    {
        $data['pageTitle'] = 'Signup page';
        $this->view('users/register', $data);
    }

    public function handyman()
    {
        $data['errors'] = [];

        $user = new User();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if($user->validate($_POST)) {

                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user->insert($_POST);
			
				message("Your profile was successfuly created. Please login");
				redirect('users/login');
            }

        }

        $data['pageTitle'] = 'Signup page';
        $data['errors'] = $user->errors;
        $this->view('users/handyman', $data);
    }

    public function contractor()
    {
        $data['errors'] = [];

        $user = new User();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if($user->validate($_POST)) {

                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user->insert($_POST);
			
				message("Your profile was successfuly created. Please login");
				redirect('users/login');
            }

        }

        $data['pageTitle'] = 'Signup page';
        $data['errors'] = $user->errors;
        $this->view('users/contractor', $data);
    }



    public function login()
    {
        $data['errors'] = [];

        $user = new User();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $row = $user->first([
				'email'=>$_POST['email']
			]);

			if($row){

				if(password_verify($_POST['password'], $row->password))
				{
					//authenticate
					Auth::authenticate($row);

					redirect('pages/index');
				}
			}

			$data['errors']['email'] = "Wrong email or password";

        }

        $data['pageTitle'] = 'Login page';
        $data['errors'] = $user->errors;
        $this->view('users/login', $data);
    }


    public function logout()
	{

		Auth::logout();

		redirect('pages/index');
	}




    public function profile($id)
    {

        $id = $id ?? Auth::getId();

        $user = new User();

        $data['user'] = $row = $user->first(['id'=>$id]);

        $data['pageTitle'] = 'Signup page';

        $this->view('users/profile', $data);
    }
}
