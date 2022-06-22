<?php
session_start();
if(!isset($_SESSION['loggeddin']) || $_SESSION['loggeddin']!=true){
  header("location:/");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit post</title>
        <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style and responsive/style.css">
</head>
<body>
<h1> Edit post</h1>
<div class="flex-container">
<div class="card">
  <div class="card-body">
<form action="editquery" method="post">
<input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['update_id']?>">
<label for="update" class="form-label">Daily update:</label>
               <textarea name="update" class="form-control"  placeholder="Write your daily update here...."rows="7" cols="78" maxlength="200"><?php echo $_SESSION['update']?></textarea>
               <label for="date" class="form-label">Date:</label>
               <input type="date" class="form-control" name="date" value="<?php echo date("Y-m-d");?>"readonly><br>
            <button name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>
