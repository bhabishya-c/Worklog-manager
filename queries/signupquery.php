<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$role=$_POST['role'];
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(empty($name)){
    echo "<script>alert('Name is required')</script>";
} elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
   echo "<script>alert('Only letters and white space allowed')</script>";
}elseif(empty($email)){
    echo"<script>alert('Email is required')</script>";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<script>alert('Invalid email format')</script>";
}elseif(empty($password)){
    echo"<script>alert('Password is required')</script>";}
elseif(strlen($password)<8|| !$number || !$uppercase || !$lowercase || !$specialChars){
    echo"<script>alert('Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.')</script>";
}
else{
    $signup=require "db/bootstrap.php";
    $signup->registration($name,$email,$password,$role);
    }
}
?>