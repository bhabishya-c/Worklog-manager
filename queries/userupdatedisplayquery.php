<?php
App::get('responsive');
$id=$_POST['id'];
$display=App::get('database');
$userupdatedisplay=$display->userupdatedisplay($id);
$admincommentdisplay=$display->commentdisplay($id);
?>
<?php 
if($userupdatedisplay){
  foreach($userupdatedisplay as $u){?>
<div  style="border-radius:20px;"class="container p-5 my-5 bg-dark text-white">
<form action="contenttoeditdisplayquery" method='post'>
    <input type="hidden" name="date" value="<?php echo $u['date']?>">
    <input type="hidden" name="id" value="<?php echo $u['post_id']?>">
  <button style="float:right;"class="btn btn-primary" 
  <?php if(date("Y-m-d")!=$u['date']){?>
    disabled
    <?php }
    else{?>enable 
    <?php }?>
  >Edit</button>
</form>
    <h1><?php echo $u['name'] ?></h1>
    <h4><?php echo $u['updates'] ?></h4>
    <h5><?php echo $u['date']?></h5>
    <br>
<?php
if($admincommentdisplay){ 
foreach($admincommentdisplay as $a){?>
<h4>Comments</h4>
<h6><?php echo $a['comment']?></h6>
<?php }
}else{
  echo "<div style='margin-top:2%;'class='container'>
  <div class='alert alert-danger' role='alert'>
  No comment from admin side till now.
</div>
</div>";
}?>
</div>
<?php }
}else{
    echo "<div style='margin-top:2%;'class='container'>
    <div class='alert alert-danger' role='alert'>
    You haven't posted any updates till now.
  </div>
  </div>";
}?>
