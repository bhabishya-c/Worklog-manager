<?php
if(isset($_POST['post'])){
$id=$_POST['id'];
$comment=$_POST['comment'];
if(empty($comment)){
    echo "<script>alert('Comment field should not be empty')</script>";
}else{
$admincomment=App::get('database');
$admincomment->comment($id,$comment);
}
}
?>