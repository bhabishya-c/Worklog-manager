<?php
$id=$_POST['id'];
$date=$_POST['date'];
if(date('Y-m-d')!=$date){
  echo "<script>alert('This post cannot be updated')</script>";
}else{
App::get('responsive');
$display=App::get('database');
$edit=$display->contenttoedit($id);
}
?>
