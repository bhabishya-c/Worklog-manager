<?php
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($password) && empty($email)){
        echo "<script>alert(' All fields are required')</script>";
    }
    elseif(empty($password)){
        echo "<script>alert('Password is required')</script>";
    }
    elseif(empty($email)){
        echo "<script>alert(' Email is required')</script>";
    }
    else{
        $login= require 'db/bootstrap.php';
        $login->userlogin($email,$password);
        
    }

?>