<?php
require_once('config.php');
require_once('functions.php');

    $data = $_POST['data'];
	//Laitetaan syötetyt tiedot sessioon jemmaan, jotta voidaan palata muuttamaan annettuja arvoja
	$_SESSION['lomakedata'] = serialize($data);
    //onko sähköposti oikeanlainen???
	        echo $data['etunimi'];
            echo '<br>';
            echo $data['sukunimi'];
            echo '<br>';
            echo $data['year'].'-'.$data['month'].'-'.$data['day'];
            echo $data['puh'];
            echo $data['osoite'];
            echo $data['kaupunki'];
            echo $data['postinumero'];
            echo $data['sukupuoli'];
            echo $data['koulutus'];
            echo $data['ohj_val'];
            echo '<a href="tallennaProfile.php" class="button sininen">Tallenna</a>';

  
	


?>
