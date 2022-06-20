<?php
$id=$_POST['id'];
$update=$_POST['update'];
$edit=App::get('database');
$edit->editpost($id,$update);
?>