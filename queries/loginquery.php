<?php
use Project3\app\App;
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($password) && empty($email)){
        echo "<script>alert(' All fields are required')</script>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid email format')</script>";
    }
    elseif(empty($password)){
        echo "<script>alert('Password is required')</script>";
    }
    elseif(empty($email)){
        echo "<script>alert(' Email is required')</script>";
    }
    else{
        $login= App::get('database');
        $login->userlogin($email,$password);
    }

?>