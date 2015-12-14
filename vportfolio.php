<?php 

require_once('model/dbFunctions.php');
$username = getUsername($_GET['portfolio'], $DBH); 
?>
    
  <section id="portfolio-bg" class="projektinakyma">
        <h2>Oma portfoliosi</h2>
        <?php
	   $projektit = getProjects($username->uid, $DBH);
      	   foreach($projektit as $projekti){
	     ?>
            <a href="<?php echo SITE_ROOT; ?>/?portfolio=<?php echo $_SESSION['username']; ?>&projekti=<?php echo $projekti->pid; ?>">
      		<div class="polaroid">
                <img src="img/<?php echo $_SESSION['username']; ?>/<?php echo $projekti->nimi; ?>/projektikansi/<?php echo $projekti->pid; ?>.jpg"/>
            <p><?php echo $projekti->nimi; ?></p>
        </div>
      	   <?php
      	  } ?>
        </section>
