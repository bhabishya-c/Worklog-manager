<?php
$id=$_POST['id'];
$update=$_POST['update'];
if(empty($update)){
    echo "<script>alert('Update section cannot be empty')</script>";
}
elseif(!preg_match("/^[a-zA-Z-' ]*$/",$update)){
    echo "<script>alert('Only letters and white space allowed')</script>";
}else{
$edit=App::get('database');
$edit->editpost($id,$update);
}
?>