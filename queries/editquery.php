<?php
$id=$_POST['id'];
$update=$_POST['update'];
if(empty($update)){
    echo "<script>alert('Update cannot be empty')</script>";
}else{
$edit=App::get('database');
$edit->editpost($id,$update);
}
?>