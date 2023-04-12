<?php

Class Admin{

    public function doLogin()
    {
        global $connection;
        $username= mysqli_real_escape_string($connection,$_POST['username']);
        $password= mysqli_real_escape_string($connection,$_POST['password']); 

        $query = mysqli_query($connection, "SELECT id FROM `admin` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error());

        $fetch = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);

        if($row > 0){
            $_SESSION['id']=$fetch['id'];
            header("location:/admin/index");
        }else{
            setMessage("Invalid username or password");
            header("location:/admin/login");

        }
    }


    public function getDetail($id)
    {
        global $connection;
        $sql="SELECT * FROM admin WHERE id=$id";
        $query = mysqli_query($connection, $sql) or die(mysqli_error());

        $data = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);

        if($row > 0){
           return $data;
       }else{
        return false;
            }
    }



}


?>