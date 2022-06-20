<?php
    $id=$_POST['id'];
    $delete= App::get('database');
    $delete->delete($id);
?>