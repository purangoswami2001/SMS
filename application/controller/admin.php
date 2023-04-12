<?php 
include('../application/model/Admin.php');

class AdminController{

public function index()
	{

		$this->checkLogin();
		$obj = new Admin();
		$data = [
			'Data' => $obj->getDetail($_SESSION['id']),
			'Title' => 'dashboard'
		];
		load($data,'admin/dashboard.php');
	}




	public function login()
	{	
         $data=[];
		load($data,'admin/login.php');
	}



	public function logout()
	{	
		unset($_SESSION['id']);
		header('location:/admin/login');

	}



	public function checkLogin()
	{
		if (!isset($_SESSION['id']))
		 {
			setMessage("You have to log in first");
			header('location:/admin/login');
		}

	}


	public function validate()
	{	
		$obj = new Admin();
		$obj->doLogin();
	}

	public function profile(){
		$obj = new Admin();
		$data = [
			'Data' => $obj->getDetail($_SESSION['id']),
			'Title' => 'profileview'
		];
		load($data,'admin/profile.php');
	}
    
	public function studentlist(){
		$obj = new Admin();
		$data = [
			'Data' => $obj->getDetail($_SESSION['id']),
			'Title' => 'studentlist'
		];
		load($data,'admin/studentlist.php');
	}


}

?>