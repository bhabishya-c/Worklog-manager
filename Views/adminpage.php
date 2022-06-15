<?php
require 'style and responsive/responsive.php';
if(isset($_GET['info'])){
    if($_GET['info']=='deleted'){
        echo "<script>alert('Daily update deleted successfully')</script>";
    }else{
        echo"<script>alert('Failed to deleted daily update')</script>";
    }
}
?>
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style and responsive/style.css">
<a href="logoutquery" class="button">Logout</a>
<a href="signup" class="button">Add user</a>
<h1>Welcome Admin</h1>
<br>
<?php
require 'queries/adminupdatedisplayquery.php'; 
?>

