	<div class="tiedot">   
	<h1>Käyttäjän <?php echo $_SESSION['username']?> profiili</h1>
        <br>
        <br>
    <?php // Jos nimi on kerrottu se näytetään
        if(($_SESSION['etunimi'])!=NULL || $_SESSION['sukunimi'] != NULL){
        echo '<div class="tieto-container">';?>
        <h3>Nimi</h3> 
        <p><?php echo $_SESSION['etunimi'].' '.$_SESSION['sukunimi'];?></p>
            <?php echo '</div>';}?>
    <?php // Jos sukupuoli on kerrottu se näytetään
        if(($_SESSION['sukupuoli']!=0 || $_SESSION['sukupuoli'])!=NULL){
        echo '<div class="tieto-container">';?>
            <h3>Sukupuoli</h3>
        <?php 
                echo '<p>';
                echo $_SESSION['sukupuoli'];
                echo '</p>';
                echo '</div>';}?>
        
    <div class="tieto-container">
        <h3>Sähköposti</h3>
        <p><?php echo $_SESSION['sposti'];?></p>
    </div>
    <?php // Jos puhelinnumero on kerrottu se näytetään
        if(($_SESSION['puh'])!=NULL){
        echo '<div class="tieto-container">';?>
                <h3>Puhelinnumero</h3>
                <?php 
                    echo '<p>';
                    echo $_SESSION['puh'];
                    echo '</p>';
                    echo '</div>';}?>
            
     <?php // Jos Osoite on kerrottu se näytetään
        if($_SESSION['osoite'] !=NULL || $_SESSION['postinumero'] != NULL || $_SESSION['kaupunki'] != NULL){
        echo '<div class="tieto-container">';?>
        <h3>Osoite</h3>
        <?php
            echo '<p>';
            if($_SESSION['osoite'] !=NULL) { 
            echo $_SESSION['osoite'].' ';
            } 
            if ($_SESSION['postinumero'] !=NULL) {
            echo $_SESSION['postinumero'].' ';
            } 
            if ($_SESSION['kaupunki'] !=NULL){
            echo $_SESSION['kaupunki'];
            };
            echo '</p>';
            echo '</div>';}?>
        
    <?php // Jos syntymäpäivä on kerrottu se näytetään ikänä    
        if($_SESSION['saika'] !="0000-00-00"){
        echo '<div class="tieto-container">';?>
        <h3>Ikä</h3>
        <?php 
            echo '<p>';
            age();
            echo '</p>';
            echo '</div>';}?>
    
        <?php // Jos koulutus on kerrottu se näytetään
        if($_SESSION['koulutus'] != NULL){
        echo '<div class="tieto-container">';?>
        <h3>Koulutus</h3>
        <?php 
            echo '<p>';
            echo $_SESSION['koulutus'];
            echo '</p>';
            echo '</div>';}?>
    
    <?php // Jos Käytetty Ohjelmisto/Välineistö on kerrottu se näytetään
        if($_SESSION['ohj_val'] != NULL){
        echo '<div class="tieto-container">';?>
    
        <h3>Käytetty Ohjelmisto/Välineistö</h3>
        <?php 
            echo '<p>';
            echo $_SESSION['ohj_val'];
            echo '</p>';
            echo '</div>';}?>
        <form action="luoprofiili.php" class="profiili" method="post">
            <input class="button_small" type='submit' action="luoprofiili.php" value='Muokkaa Profiilia' name='profiili'>
        </form>
</div>

