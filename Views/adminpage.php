<!DOCTYPE html>
<html>
    <head>
      <title>Admin page</title>
      <head>
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="style and responsive/style.css">
</head>
<body>
<a href="logoutquery" class="button">Logout</a>
<a href="signup" class="button">Add user</a>
<h1>Welcome Admin</h1>

<?php
App::get('responsive');
$display=App::get('database');
$adminupdatedisplay=$display->adminupdatedisplay('dailyupdate');
?>
<?php 
if($adminupdatedisplay){
  foreach($adminupdatedisplay as $a){?>
<div class="container p-5 my-5 bg-dark text-white">
<form action="deletequery" method='post'>
    <input type="hidden" name="id" value="<?php echo $a['post_id']?>">
  <button style="float:right;"class="btn btn-primary">Delete</button>
</form>
    <h1><?php echo $a['name'] ?></h1>
    <h4><?php echo $a['updates'] ?></h4>
    <h5><?php echo $a['date']?></h5>
    <form action="admincommentquery" method="post">
    <input type="hidden" name="id" value="<?php echo $a['post_id']?>">
    <label for="comment" class="form-label">Comment:</label>
    <textarea name="comment" class="form-control" placeholder="Write your comment here...."rows="5" cols="78" maxlength="200"></textarea><br>
    <button class="btn btn-primary">Post</button>
    </form>
    </div>
   <?php }
   }else{
    echo "<div style='margin-top:2%;'class='container'>
    <div class='alert alert-danger' role='alert'>
    Users haven't posted any updates.
  </div>
  </div>";
   }?>
   </body>
   </html>
