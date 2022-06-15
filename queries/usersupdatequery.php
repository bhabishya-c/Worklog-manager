<?php
$id=$_POST['id'];
$username=$_POST['username'];
$update=$_POST['update'];
$date=$_POST['date'];
if(empty($update)){
    echo "<script>alert('Update section cannot be empty')</script>";
}else{
    $userupdate=require 'db/bootstrap.php';
    $userupdate->update($id,$username,$update,$date);
}
?>