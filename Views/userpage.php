<?php
require 'style and responsive/responsive.php';
session_start();
if(isset($_GET['info'])){
  if($_GET['info']=='inserted'){
  echo "<script>alert('Your update has been submitted')</script>";
}else{
  echo "<script>alert('Failed to submit update')</script>";
}
}
?>
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style and responsive/style.css">
<div class="container-fluid">
<a href="logoutquery" class="button">Logout</a>
<h1>Welcome <?php echo $_SESSION['name']?></h1>
<div class="flex-container">
<div class="card">
  <div class="card-body">
<form action="userupdatequery" method="post">
<input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['id']?>">
<input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION['name']?>">
<label for="update" class="form-label">Daily update:</label>
               <textarea name="update" class="form-control" placeholder="Write your daily update here...."rows="7" cols="78" maxlength="200"></textarea>
               <label for="date" class="form-label">Date:</label>
               <input type="date" class="form-control" name="date" value="<?php echo date("Y-m-d");?>"readonly><br>
            <button name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
<br>
  <form action="userupdatedisplayquery" method="post">
    <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
<button style="margin-left:530px;"class="btn btn-success">See your daily update</button>
</form>
<?php
?>

