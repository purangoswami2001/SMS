<?php

Class Student{

    public function doLogin()
    {
        global $connection;
        $var_eno= mysqli_real_escape_string($connection,$_POST['enroll_number']);
        $password= mysqli_real_escape_string($connection,$_POST['password']); 

        $query = mysqli_query($connection, "SELECT id FROM eno WHERE eno_num = '$var_eno'") or die(mysqli_error());

        $fetch = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);

        if($row > 0){
            $query = mysqli_query($connection, "SELECT id FROM student WHERE eno_id = '$fetch[id]' AND password = '$password'") or die(mysqli_error());

            $fetch = mysqli_fetch_array($query);
            $row = mysqli_num_rows($query);

            if($row > 0){
                $_SESSION['STU_ENO']=$var_eno;
                header("location:/student/index");
            }else{
                setMessage("Invalid password");
                header("location:/student/login");

            }
        }else{
            setMessage("Invalid enroll number");
            header("location:/student/login");

        }
    }

    public function getDetail($eno_num)
    {
        global $connection;
        $sql="SELECT * FROM eno WHERE eno_num=$eno_num";
        $query = mysqli_query($connection, $sql) or die(mysqli_error());

        $eno_data = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);

        if($row > 0){
            //student data
            $query = mysqli_query($connection, "SELECT * FROM student WHERE eno_id = '$eno_data[id]'") or die(mysqli_error());

            $student_data = mysqli_fetch_array($query);

            // course data
            $query = mysqli_query($connection, "SELECT name FROM course WHERE id = '$eno_data[course_id]'") or die(mysqli_error());

            $course_data = mysqli_fetch_array($query);

            // sem data
            $query = mysqli_query($connection, "SELECT name FROM semester WHERE id = '$eno_data[sem_id]'") or die(mysqli_error());

            $sem_data = mysqli_fetch_array($query);

            if ($student_data['gender'] == "M") {
                $student_data['gender'] = "Male";
                                                    }
            else if($student_data['gender']== "F"){
                $student_data['gender'] = "Female";
            
            }else {
                $student_data['gender'] = "Others";
            }

            $data = $student_data;
            $data["course_name"] = $course_data['name'];
            $data["sem_name"] = $sem_data['name'];
            $data["eno"] = $eno_num;

            return $data;

       }else{
        return false;
    }
}
  



public function saveProfilepic($logo)
{ 
  global $connection;        
   $sql="SELECT student.password, student.eno_id, eno.id, eno.eno_num FROM student INNER JOIN eno ON student.eno_id = eno.id WHERE eno.eno_num = '$_SESSION[STU_ENO]'";
   $result =mysqli_query($connection,$sql);
   $data= mysqli_fetch_assoc($result);  
   unlink("images/uploads/$data[profile]");     
   $sql = "UPDATE student SET profile = '$logo' WHERE eno_id ='$data[eno_id]'";
   $connection->query($sql);
}


public function checkpassword($oldpass){
global $connection; 
$sql="SELECT student.password, student.eno_id, eno.id, eno.eno_num FROM student INNER JOIN eno ON student.eno_id = eno.id WHERE eno.eno_num = '$_SESSION[STU_ENO]'";
   $result =mysqli_query($connection,$sql);
   $data= mysqli_fetch_assoc($result);  
    return $data;
}

public function savepassword($newpass)
{
   global $connection; 
   $sql="SELECT * FROM eno WHERE  eno_num = $_SESSION[STU_ENO]";
   $result =mysqli_query($connection,$sql);
   $data= mysqli_fetch_assoc($result);            
   $query = "UPDATE student SET password = '$newpass' WHERE eno_id ='$data[id]'";
   $connection->query($query);

}
}

 ?>