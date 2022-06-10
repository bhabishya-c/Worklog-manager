<?php
require 'style and responsive/responsive.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
  <link  rel="stylesheet" href="style and responsive/style.css">
</head>
        <body>
        <div class="parent">
            <div class="div1"> </div>
            <div class="div2">
            <h3>Signup</h3>
            <p> Please fill these fields to create an account</p>
            <form action="signupquery" method="post">
            <label for="name" class="form-label">Name:</label>
                <input type="text" class="textfield form-control" name="name" placeholder="Name">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="textfield form-control" name="email" placeholder="Email">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="textfield form-control" name="password" placeholder="Password">
                <label for="role" class="form-label">Role:</label>
                <input type="text" class="textfield form-control" name="role" placeholder="Role"><br>
                <button name="submit" class="btn btn-primary">Submit</button>
                <p>Already a member?<a href="login">Login</a></p>
</form>
</div>
</div>
</body>
</html>
