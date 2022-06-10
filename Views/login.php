<?php
require 'style and responsive/responsive.php';
 if (isset($_GET['info'])){
    if($_GET['info']=="registered"){
        echo"<script>alert('You have been registered sucessfully')</script>";
    }
    elseif($_GET['info']=="logout"){
        echo"<script>alert('You have been logged out sucessfully')</script>";
    }
 else{
     echo "<script>alert('Failed')</script>";
 }
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
  <link  rel="stylesheet" href="style and responsive/style.css">
</head>
        <body>
        <div class="parent">
            <div class="div3"> </div>
            <div class="div2">
            <h3>Login</h3>
            <p> Please fill these fields to login into your account</p>
            <form action="loginquery" method="post">
            <label for="email" class="form-label">Email:</label>
                <input type="text" class="textfield form-control" name="email" placeholder="Name">
                <label for="password" class="form-label">Password:</label>
                <input type="text" class="textfield form-control" name="password" placeholder="Password"><br>
                <button name="login" class="btn btn-primary">Login</button><br>
                <p>Need an account? <a href="/">Signup</a></p>
</form>
</div>
</div>
</body>
</html>
