<?php
session_start();
if(!isset($_SESSION['adminloggeddin']) || $_SESSION['adminloggeddin']!=true){
    header("location:/");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
        <head>
  <link  rel="stylesheet" href="style and responsive/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
        <body>
            <div class="container">
            <div class="div2">
            <h3>Add user</h3>
            <p> Please fill these fields to create an account</p>
            <form action="signupquery" method="post">
            <label for="name" class="form-label">Name:</label>
                <input type="text" class="textfield form-control" name="name" placeholder="Name">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="textfield form-control" name="email" placeholder="Email">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="textfield form-control" name="password" placeholder="Password">
                <label for="role" class="form-label">Role:</label>
                <select class="form-select" name="role" aria-label="Default select example">
                <option >user</option>
                <option >admin</option>
</select>
                <label for="department" class="form-label">Department:</label>
                <select class="form-select" name="department" aria-label="Default select example">
                <option value="840">Design</option>
                <option value="841">Sales</option>
                <option value="842">Engineering</option>
                <option value="843">Marketing</option>
                <option value="844">HR</option>
                <option value="845">Finance</option>
</select>
<br>
                <button name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>
