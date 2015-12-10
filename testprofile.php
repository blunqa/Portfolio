<?php
require_once('config.php');
require_once('functions.php');

    $data = $_POST['data'];
	//Laitetaan syötetyt tiedot sessioon jemmaan, jotta voidaan palata muuttamaan annettuja arvoja
	$_SESSION['lomakedata'] = serialize($data);
    //onko sähköposti oikeanlainen???
    redirect(SITE_ROOT . '/tallennaProfile.php');
//	        echo $data['etunimi'];
//            echo '<br>';
//            echo $data['sukunimi'];
//            echo '<br>';
//            echo $data['year'].'-'.$data['month'].'-'.$data['day'];
//            echo '<br>';
//            echo $data['puh'];
//            echo '<br>';
//            echo $data['osoite'];
//            echo '<br>';
//            echo $data['kaupunki'];
//            echo '<br>';
//            echo $data['postinumero'];
//            echo '<br>';
//            echo $data['sukupuoli'];
//            echo '<br>';
//            echo $data['koulutus'];
//            echo '<br>';
//            echo $data['ohj_val'];
//            echo '<br>';
//            echo '<a href="tallennaProfile.php" class="button sininen">Tallenna</a>';

?>
