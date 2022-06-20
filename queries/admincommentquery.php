<?php
$id=$_POST['id'];
$comment=$_POST['comment'];
$admincomment=App::get('database');
$admincomment->comment($id,$comment);
?>