<?php
$id=$_POST['id'];
require 'style and responsive\responsive.php';
$display=require 'db\bootstrap.php';
$userupdatedisplay=$display->userupdatedisplay($id);
?>
<?php 
if($userupdatedisplay){
  foreach($userupdatedisplay as $u){?>
<div  style="border-radius:20px;"class="container p-5 my-5 bg-dark text-white">
    <h1><?php echo $u['name'] ?></h1>
    <h4><?php echo $u['updates'] ?></h4>
    <h5><?php echo $u['date']?></h5>
    <form action="" method='post'>
    <input type="hidden" name="id" value="<?php?>">
  <button style="float:right;"class="btn btn-primary">Edit</button>
</form>
    </div>
<?php
}
}else{
    echo "<div style='margin-top:2%;'class='container'>
    <div class='alert alert-danger' role='alert'>
    You haven't posted any updates till now.
  </div>";
}?>