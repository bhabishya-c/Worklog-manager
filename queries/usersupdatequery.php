<?php
use Project3\app\App;
if(!isset($_SESSION['loggeddin']) || $_SESSION['loggeddin']!=true){
    header("location:/");
  }
$id=$_POST['id'];
$username=$_POST['username'];
$update=$_POST['update'];
$date=$_POST['date'];
if(empty($update)){
    echo "<script>alert('Update section cannot be empty')</script>";
}
elseif(!preg_match("/^[a-zA-Z-' ]*$/",$update)){
    echo "<script>alert('Only letters and white space allowed')</script>";
}else{
    $userupdate=App::get('database');
    $userupdate->update($id,$username,$update,$date);
}
?>