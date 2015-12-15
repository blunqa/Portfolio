<?php 

require_once('model/dbFunctions.php');
$username = getUsername($_GET['portfolio'], $DBH); 
?>
    
  <section id="portfolio-bg" class="projektinakyma">
        
        <?php if($_SESSION['username'] == $username->username) { ?>
                <h2>Oma portfoliosi</h2>
                <form action="luoProjekti.php">
                <input type="submit" action="luoProjekti.php" class="button_small" value="Luo projekti">
                </form>
                <?php 
                } else { ?>
    <h2>Käyttäjän <?php echo $username->username; ?> portfolio</h2>

            <?php } ?>
        <?php if(getProjects($username->uid, $DBH) == NULL) { ?>
            <p>Ei projekteja.</p>
      <?php } 
	   $projektit = getProjects($username->uid, $DBH);
      	   foreach($projektit as $projekti){
	     ?>
            <a href="<?php echo SITE_ROOT; ?>/?portfolio=<?php echo $username->username; ?>&projekti=<?php echo $projekti->pid; ?>">
      		<div class="polaroid">
                <img src="img/<?php echo $username->username; ?>/<?php echo $projekti->nimi; ?>/projektikansi/<?php echo $projekti->pid; ?>.jpg"/>
            <p><?php echo $projekti->nimi; ?></p>
        </div>
      </a>
      	   <?php
      	  } ?> 
            
        </section>
