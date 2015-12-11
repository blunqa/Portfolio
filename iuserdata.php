	<div class="tiedot">   
	<h1>Käyttäjän <?php echo $_SESSION['username']?> tiedot</h1>
        <br>
	<h3>Nimi</h3> 
        <p><?php echo $_SESSION['etunimi'].' '.$_SESSION['sukunimi'];?></p>
            
    <?php // Jos sukupuoli on kerrottu se näytetään
        if(($_SESSION['sukupuoli'])!=0){?>
    <h3>Sukupuoli</h3>
        <?php 
                echo '<p>';
                echo $_SESSION['sukupuoli'];
                echo '</p>';}?>
        
    <h3>Sähköposti</h3>
	   <p><?php echo $_SESSION['sposti'];?></p>
        
    <?php // Jos puhelinnumero on kerrottu se näytetään
        if(($_SESSION['puh'])!=NULL){?>
            <h3>Puhelinnumero</h3>
                <?php 
                    echo '<p>';
                    echo $_SESSION['puh'];
                    echo '</p>';}?>

     <?php // Jos Osoite on kerrottu se näytetään
        if($_SESSION['osoite'] !=NULL || $_SESSION['postinumero'] != NULL || $_SESSION['kaupunki'] != NULL){?>
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
        }?>
    <?php // Jos syntymäpäivä on kerrottu se näytetään    
        if($_SESSION['saika'] !=NULL){?>
    <h3>Syntymäpäivä</h3>
        <?php 
            echo '<p>';
            echo $_SESSION['saika'];
            echo '</p>';}?>
    <?php // Jos koulutus on kerrottu se näytetään
        if($_SESSION['koulutus'] != NULL){?>
    <h3>Koulutus</h3>
        <?php 
            echo '<p>';
            echo $_SESSION['koulutus'];
            echo '</p>';}?>
    <?php // Jos Käytetty Ohjelmisto/Välineistö on kerrottu se näytetään
        if($_SESSION['ohj_val'] != NULL){?>
    <h3>Käytetty Ohjelmisto/Välineistö</h3>
        <?php 
            echo '<p>';
            echo $_SESSION['ohj_val'];
            echo '</p>';}?>
        <form action="luoprofiili.php" class="profiili" method="post">
            <input class="button_small" type='submit' action="luoprofiili.php" value='Muokkaa Profiilia' name='profiili'>
        </form>
	</div>

