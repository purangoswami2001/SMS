<?php 

class HomeController{


	public function home()
	{

		$data=['Title' => 'home'];
		load($data,'home/dashboard.php');
	}


	public function about()
	{

		$data=['Title' => 'about'];
		load($data,'home/about.php');
	}


	public function contact()
	{

		$data=['Title' => 'contact'];
		load($data,'home/contact.php');
	}


	public function help()
	{

		$data=['Title' => 'help'];
		load($data,'home/help.php');
	}

}
?>