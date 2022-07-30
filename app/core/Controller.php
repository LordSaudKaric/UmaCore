<?php 

/**
 * main controller class
 */
class Controller
{

	public function view($view,$data = array(), $template ='')
	{
		extract($data);
		// code...

		if(file_exists("../app/views/templates/" . $template . ".php"))
		{
			require ("../app/views/templates/" . $template . ".php");
		}else{
			require ("../app/views/templates/default.php");
		}
	}

    /*

	public function view($view,$data = array())
	{
		extract($data);
		// code...

		if(file_exists("../app/views/" . $view . ".php"))
		{
			require ("../app/views/" . $view . ".php");
		}else{
			require ("../app/views/404.php");
		}
	}
    
	public function load_model($model)
	{

		if(file_exists("../private/models/".ucfirst($model).".php"))
		{
			require("../private/models/".ucfirst($model).".php");
			return $model = new $model();
		}
		
		return false;
	}

	public function redirect($link)
	{

		header("Location: ". ROOT . "/".trim($link,"/"));
		die;
	}
    */
}