<?php
require_once('config.php');
require_once('functions.php');
require_once('dbFunctions.php');
SSLon();
//Tänne tullaan kun ilogSign.php lomakkeella painetaan Kirjaudu painiketta
//Kayttaja/salasana kannassa?
//user oliossa kayttajatiedot jos ok, muuten false

$user = login($_POST['username'], $_POST['salasana'], $DBH);
//print_r($user);
if(!$user){
	$_SESSION['loggausvirhe'] = 'yes';
	//Aiheuttaa alert() pääsivulla
    $message = "Väärä salasana tai käyttäjätunnus";
    echo "<script type='text/javascript'>alert('$message');</script>";
	
    redirect(SITE_ROOT); 
} else {
	unset($_SESSION['loggausvirhe']);
	//Jos käyttäjätunnistettiin, talletetaan tiedot sessioon esim. kassalle siirtymistä
	//varten on hyvä tietää asiakastiedot
	$_SESSION['logged_in'] = 'yes';

	$_SESSION['username'] = $user->username;
	//print_r($_SESSION);
	//Jos loggaus onnistuu niin palataan paasivulle
    
	redirect(SITE_ROOT . "/selaa.php");

}

?>
