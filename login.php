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
    redirect(SITE_ROOT);
} else {
	unset($_SESSION['loggausvirhe']);
    
	//Jos käyttäjätunnistettiin, talletetaan tiedot sessioon esim. kassalle siirtymistä
	//varten on hyvä tietää asiakastiedot
	$_SESSION['logged_in'] = 'yes';
    $_SESSION['username'] = $user->username;
    $_SESSION['etunimi'] = $user->etunimi;
	$_SESSION['sukunimi'] = $user->sukunimi;
    $_SESSION['saika'] = $user->saika;
	$_SESSION['puh'] = $user->puh;
	$_SESSION['postinumero'] = $user->postinumero;
	$_SESSION['kaupunki'] = $user->kaupunki;
	$_SESSION['osoite'] = $user->osoite;
	$_SESSION['sposti'] = $user->sposti;
    $_SESSION['koulutus'] = $user->koulutus;
    $_SESSION['sukupuoli'] = $user->sukupuoli;
    $_SESSION['ohj_val'] = $user->ohj_val;
    
	//print_r($_SESSION);
	//Jos loggaus onnistuu niin palataan paasivulle
    
	redirect(SITE_ROOT);

}

?>
