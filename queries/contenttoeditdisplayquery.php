<?php
$id=$_POST['id'];
App::get('responsive');
$display=App::get('database');
$edit=$display->contenttoedit($id);
?>
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style and responsive/style.css">
<h1> Edit post</h1>
<div class="flex-container">
<div class="card">
  <div class="card-body">
<form action="editquery" method="post">
<input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['id']?>">
<input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION['name']?>">
<label for="update" class="form-label">Daily update:</label>
               <textarea name="update" class="form-control"  placeholder="Write your daily update here...."rows="7" cols="78" maxlength="200"><?php echo $_SESSION['update']?></textarea>
               <label for="date" class="form-label">Date:</label>
               <input type="date" class="form-control" name="date" value="<?php echo date("Y-m-d");?>"readonly><br>
            <button name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

