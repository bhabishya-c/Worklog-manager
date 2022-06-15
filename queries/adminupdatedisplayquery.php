<?php
require 'style and responsive\responsive.php';
$display=require 'db\bootstrap.php';
$adminupdatedisplay=$display->adminupdatedisplay('dailyupdate');
?>
<?php foreach($adminupdatedisplay as $a){?>
<div class="container p-5 my-5 bg-dark text-white">
    <h1><?php echo $a['name'] ?></h1>
    <h4><?php echo $a['updates'] ?></h4>
    <h5><?php echo $a['date']?></h5>
    <form action="deletequery" method='post'>
    <input type="hidden" name="id" value="<?php echo $a['user_id']?>">
  <button style="float:right;"class="btn btn-primary">Delete</button>
</form>
    </div>
<?php }?>