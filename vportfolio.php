<?php 

require_once('model/dbFunctions.php');
$username = getUsername($_GET['portfolio'], $DBH); 
?>
  <section class="projektinakyma">
        <?php
	   $projektit = getProjects($username->id, $DBH);
      	   foreach($projektit as $projekti){
	     ?>
            <a href="<?php echo SITE_ROOT; ?>/?portfolio=<?php echo $_SESSION['username']; ?>&projekti=<?php echo $projekti->id; ?>">
      		<div class="polaroid">
                <img src="img/projektikansi/<?php echo $projekti->id; ?>.jpg"/>
            <p><?php echo $projekti->nimi; ?></p>
        </div>
      	   <?php
      	  } ?>
        </section>
        </div>
    </body>
</html>
