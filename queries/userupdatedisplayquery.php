<?php
use Project3\app\App;
if(isset($_POST['submit'])){
App::get('responsive');
$id=$_POST['id'];
$display=App::get('database');
$userupdatedisplay=$display->userupdatedisplay($id);
}
if(!isset($_SESSION['loggeddin']) || $_SESSION['loggeddin']!=true){
  header("location:/");
}
elseif($userupdatedisplay){
  foreach($userupdatedisplay as $u){?>
<div  style="border-radius:20px;"class="container p-5 my-5 bg-dark text-white">
<form action="editpage" method='post'>
    <input type="hidden" name="id" value="<?php echo $u['update_id']?>">
    <input type="hidden" name="date" value="<?php echo $u['date']?>">
  <button name="edit" style="float:right;"class="btn btn-primary">Edit</button>
</form>
    <h1><?php echo $u['name'] ?></h1>
    <h4>Update: <?php echo $u['updates'] ?></h4>
    <h5>Date: <?php echo $u['date']?></h5>
    <br>
    <form action="displayadmincommentquery" method="post">
    <input type="hidden" name="id" value="<?php echo $u['update_id']?>">
    <button name="submit" class="btn btn-primary">Show comment</button>
  </form>
</div>
<?php }
}else{
    echo "<div style='margin-top:2%;'class='container'>
    <div class='alert alert-danger' role='alert'>
    You haven't posted any updates till now.
  </div>
  </div>";
}?>
