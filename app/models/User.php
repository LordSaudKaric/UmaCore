<?php

/**
 * users model
 */
class User extends Model
{

	public $errors = [];
	protected $table = "users";

	protected $allowedColumns = [

		'email',
		'firstname',
		'lastname',
		'password',
		'role'

	];

	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['firstname'])) {
			$this->errors['firstname'] = "A first name is required";
		} else
		if (!preg_match("/^[a-zA-Z]+$/", trim($data['firstname']))) {
			$this->errors['firstname'] = "first name can only have letters without spaces";
		}


		if (empty($data['lastname'])) {
			$this->errors['lastname'] = "A last name is required";
		} else
		if (!preg_match("/^[a-zA-Z]+$/", trim($data['lastname']))) {
			$this->errors['lastname'] = "last name can only have letters without spaces";
		}

		//check email
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$this->errors['email'] = "Email is not valid";
		} else
		if ($this->where(['email' => $data['email']])) {
			$this->errors['email'] = "That email already exists";
		}

		if (empty($data['password'])) {
			$this->errors['password'] = "A password is required";
		}

		if ($data['password'] !== $data['repassword']) {
			$this->errors['password'] = "Passwords do not match";
		}


		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}
