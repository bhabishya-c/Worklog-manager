<?php
use Project3\app\App;
    $id=$_POST['id'];
    $delete= App::get('database');
    $delete->delete($id);
?>