<?php 
require_once('config.php');
require_once('functions.php');
require_once('model/dbFunctions.php');
include("includes/iheader.php"); 
SSLon();
$newprojects = getNewProjects($DBH); 
?>

<div id="selaa-bg">  
<h1>20 uusinta projektia</h1>
     <?php
      	   foreach($newprojects as $project){
	     ?>
            <a href="<?php echo SITE_ROOT; ?>?portfolio=<?php echo $project->username; ?>&projekti=<?php echo $project->pid; ?>">
      		<div class="polaroid">
                <img src="img/<?php echo $project->username; ?>/<?php echo $project->nimi; ?>/projektikansi/<?php echo $project->pid; ?>.jpg"/>
            <p><?php echo $project->nimi; ?></p>
        </div>
      	   <?php
      	  } ?>
</div>
<?php include("includes/ifooter.php"); ?>
