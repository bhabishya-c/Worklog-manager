
<link  rel="stylesheet" href="style and responsive/style.css">
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<?php
if(isset($_POST['submit'])){
$id=$_POST['id'];
App::get('responsive');
$admincomment=App::get('database');
$admincommentdisplay=$admincomment->commentdisplay($id);
}
if(!isset($_SESSION['loggeddin']) || $_SESSION['loggeddin']!=true){
  header("location:/");
}
elseif($admincommentdisplay){ ?>
  <h1>Comments</h1>
<?php foreach($admincommentdisplay as $a){?>
  <div class="flex-container">
<div class="card">
  <div class="card-body">
<h6><?php echo $a['comment']?></h6>
</div>
</div>
</div>
<?php }
}else{
  echo "<div style='margin-top:2%;'class='container'>
  <div class='alert alert-danger' role='alert'>
  No comment from admin side till now.
</div>
</div>";
}?>