<?php require_once('model/dbFunctions.php');
$username = getUsername($_GET['username'], $DBH);
?>
<div class="tiedot">   
	<h1>Käyttäjän <?php echo $username->username; ?> profiili</h1>
        <br>
    <a href="<?php echo SITE_ROOT.'?portfolio='.$username->username; ?>">
    <input type="submit" class="button_small" value="Portfolio">
    </a>
    <br>
    <br>
    <?php // Jos nimi on kerrottu se näytetään
        if($username->etunimi !=NULL || $username->sukunimi != NULL){
        echo '<div class="tieto-container">';?>
        <h3>Nimi</h3> 
        <p><?php echo $username->etunimi.' '.$username->sukunimi;?></p>
            <?php echo '</div>';}?>
    <?php // Jos sukupuoli on kerrottu se näytetään
        if($username->sukupuoli !=0 || $username->sukupuoli !=NULL){
        echo '<div class="tieto-container">';?>
            <h3>Sukupuoli</h3>
        <?php 
                echo '<p>';
                echo $username->sukupuoli;
                echo '</p>';
                echo '</div>';}?>
        
    <div class="tieto-container">
        <h3>Sähköposti</h3>
        <p><?php echo $username->sposti;?></p>
    </div>
    <?php // Jos puhelinnumero on kerrottu se näytetään
        if($username->puh !=NULL){
        echo '<div class="tieto-container">';?>
                <h3>Puhelinnumero</h3>
                <?php 
                    echo '<p>';
                    echo $username->puh;
                    echo '</p>';
                    echo '</div>';}?>
            
     <?php // Jos Osoite on kerrottu se näytetään
        if($username->osoite !=NULL || $username->postinumero != NULL || $username->kaupunki != NULL){
        echo '<div class="tieto-container">';?>
        <h3>Osoite</h3>
        <?php
            echo '<p>';
            if($username->osoite !=NULL) { 
            echo $username->osoite .' ';
            } 
            if ($username->postinumero  !=NULL) {
            echo $username->postinumero.' ';
            } 
            if ($username->kaupunki !=NULL){
            echo $username->kaupunki;
            };
            echo '</p>';
            echo '</div>';}?>
        
    <?php // Jos syntymäpäivä on kerrottu se näytetään ikänä    
        if($username->pvm !="0000-00-00"){
        echo '<div class="tieto-container">';?>
        <h3>Ikä</h3>
        <?php 
            echo '<p>';
            age();
            echo '</p>';
            echo '</div>';}?>
    
        <?php // Jos koulutus on kerrottu se näytetään
        if($username->koulutus != NULL){
        echo '<div class="tieto-container">';?>
        <h3>Koulutus</h3>
        <?php 
            echo '<p>';
            echo $username->koulutus;
            echo '</p>';
            echo '</div>';}?>
    
    <?php // Jos Käytetty Ohjelmisto/Välineistö on kerrottu se näytetään
        if($username->ohj_val != NULL){
        echo '<div class="tieto-container">';?>
    
        <h3>Käytetty Ohjelmisto/Välineistö</h3>
        <?php 
            echo '<p>';
            echo $username->ohj_val;
            echo '</p>';
            echo '</div>';}?>
        <?php if($_SESSION['username'] == $username->username) { ?>
        <form action="luoProfiili.php" class="profiili" method="post">
            <input class="button_small" type='submit' action="luoProfiili.php" value='Muokkaa Profiilia' name='profiili'>
        </form>
    <?php } ?>
</div>

