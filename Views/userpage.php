<?php
require 'style and responsive/responsive.php';
session_start();
?>
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style and responsive/style.css">
<div class="container-fluid">
<a href="logoutquery" class="button">Logout</a>
<h1>Welcome <?php echo $_SESSION['name']?></h1>
<div class="flex-container">
<div class="card">
  <div class="card-body">
  <?php
date_default_timezone_set("Asia/Kathmandu");
echo "<span style='color:green'>The date and time is: " . date("Y/m/d h:ia");"</span>"
?>
<form action="" method="post">
    <h5> Daily update</h5>
               <textarea name="update" placeholder="Write your daily update here...."rows="7" cols="75" maxlength="200"></textarea><br><br>
            <button name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>


