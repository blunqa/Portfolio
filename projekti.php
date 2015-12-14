<?php 
require_once('model/dbFunctions.php');
$project = getProject($_GET['projekti'], $DBH); 
?>
<div id="content">
    <div id="tiedostot">
        <?php
	   $kuvat = getKuvat($project->pid, $DBH);
      	   foreach($kuvat as $kuva) {
	     ?>
            <a href="img/<?php echo $project->username; ?>/<?php echo $project->nimi; ?>/<?php echo $kuva->kid; ?>.jpg"><img src="img/<?php echo $project->username; ?>/<?php echo $project->nimi; ?>/<?php echo $kuva->kid; ?>.jpg"></a>
    
    <?php
      	  } ?>
    </div>
    <div id="info">
        
        <div class="projekti-nimi"><h1><?php echo $project->nimi; ?></h1></div>
        <div class="projekti-pvm"><?php echo $project->pvm; ?></div>
        <div class="projekti-tekija">Tekijä: <?php echo $project->etunimi.' '.$project->sukunimi; ?></div>
        <div class="projekti-rooli">Rooli projektissa: <?php echo $project->rooli; ?></div>
        <div class="projekti-share"><?php include("fbShare.php"); ?></div>
        <div class="projekti-kuvaus"><h3>Projektin kuvaus</h3><br><?php echo $project->kuvaus; ?></div>
    </div>

</div>

