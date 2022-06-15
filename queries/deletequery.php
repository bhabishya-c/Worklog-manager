<?php
    $id=$_POST['id'];
    $delete= require 'db/bootstrap.php';
    $delete->delete($id);
?>