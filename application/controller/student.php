<?php 
include('../application/model/Student.php');

class StudentController{

	public function index()
	{

		$this->checkLogin();
		$obj = new Student();
		$data = [
			'Data' => $obj->getDetail($_SESSION['STU_ENO']),
			'Title' => 'profile'
		];
		load($data,'student/dashboard.php');
	}
	


	public function login()
	{	
         $data=['Title' => ""];
		load($data,'student/login.php');
	}
	public function logout()
	{	
          unset($_SESSION['STU_ENO']);
		header('location:/student/login');

	}

	public function validate()
	{	
		$obj = new Student();
		$obj->doLogin();
	}



	
	public function checkLogin(){
		if (!isset($_SESSION['STU_ENO'])) {
			setMessage("You have to log in first");
			header('location:/student/login');}

		}


		public function upload()
		{
			$target_dir = "images/uploads/";
			$target_file = $target_dir . basename($_FILES["profile"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
			if(!isset($_FILES['profile'])) {
				$check = getimagesize($_FILES["profile"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					setMessage("File is not an image.");
					$uploadOk = 0;
					header('location: /student/profile');
				}
			}

// Check if file already exists
			if (file_exists($target_file)) {
				setMessage("Sorry, file already exists.");
				$uploadOk = 0;
				header('location: /student/profile');
			}

// Check file size
			if ($_FILES["profile"]["size"] >50000000) {
				setMessage("Sorry, your file is too large.");
				$uploadOk = 0;
				header('location: /student/profile');
			}

// Allow certain file formats

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				setMessage("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");

			$uploadOk = 0;
			header('location:/student/profile');
		}

// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			setMessage("Sorry, your file was not uploaded.");
			header('location: /student/profileupdate');
// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
				$logo= $_FILES["profile"]["name"];
			    $obj = new Student();
				$obj->saveProfilepic($logo);
				setMessage("Your profile picture updated Successfully");
				header('location: /student/index');
			} else {

				setMessage("Sorry, there was an error uploading your file.");
				header('location: /student/profileupdate');
			}
		}
	}

	public function profile(){

        $data=[];
		load($data,'student/profileupdate.php');
	}





	public function profileupdate()
	{

		$this->checkLogin();
		$obj = new Student();
		$data = [
			'Data' => $obj->getDetail($_SESSION['STU_ENO']),
			'Title' => 'profileupdate'
		];
		load($data,'student/profileupdate.php');
	}
	


	public function passwordupdate()
	{   

	 if(count($_POST)>0) {
	 	$oldpass=$_POST['currentpass'];
	 	$newpass=$_POST['newpass'];
                $obj = new Student();
	       $row = $obj->checkpassword($oldpass);

                if(count($row)>0){
                 $obj = new Student();
		 $obj->savepassword($newpass);
		 setMessage("Password changed sucessfully");
		 header('location:/student/index');
		} else{
		 setMessage("Old password not matched !!");
		 header('location:/student/password');
		}
		}
			}

  public function password()
  { 
  	$this->checkLogin();
		$obj = new Student();
	$data = [
			'Data' => $obj->getDetail($_SESSION['STU_ENO']),
			'Title' => 'pswupdate'
		];
		load($data,'student/passwordchange.php');
	}



//result
public function result(){

		$obj = new Student();
	    $data = [
			'Data' => $obj->getDetail($_SESSION['STU_ENO']),
			'Title' => 'result'
		];
		load($data,'student/result.php');
}
}

?>