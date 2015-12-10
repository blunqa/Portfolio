<?php
require_once('config.php');
require_once('functions.php');
SSLon();
$userdata = unserialize($_SESSION['lomakedata']);  //tekstimuodosta takaisin taulukoksi
$username = $_SESSION['username'];

$userdata['pvm'] = $userdata['year'] . '-' . $userdata['month'] . '-' . $userdata['day'];
unset($userdata['year']);
unset($userdata['month']);
unset($userdata['day']);

	try {
			$STH2 = $DBH->prepare("UPDATE KAYTTAJA SET etunimi=:etunimi, sukunimi=:sukunimi, saika=:pvm, puh=:puh, osoite=:osoite, kaupunki=:kaupunki, postinumero=:postinumero, sukupuoli=:sukupuoli, koulutus=:koulutus, ohj_val=:ohj_val WHERE username = '$username';");
            
			if($STH2->execute($userdata)){
					try { 
					//Jos käyttäjän tallennus onnistui asetetaan hänet loggautuneeksi 
					//eli kirjoitetaan käyttäjätiedot myös sessiomuuttujiin	
					$sql = "SELECT * FROM KAYTTAJA WHERE username = '$username';";
					$STH3 = $DBH->query($sql);
					$STH3->setFetchMode(PDO::FETCH_OBJ);
					$user = $STH3->fetch();
					$_SESSION['etunimi'] = $user->etunimi;
					$_SESSION['sukunimi'] = $user->sukunimi;
                    $_SESSION['saika'] = $user->saika;
                    $_SESSION['puh'] = $user->puh;
                    $_SESSION['osoite'] = $user->osoite;
                    $_SESSION['kaupunki'] = $user->kaupunki;
                    $_SESSION['postinumero'] = $user->postinumero;
                    $_SESSION['sukupuoli'] = $user->sukupuoli;
                    $_SESSION['koulutus'] = $user->koulutus;
                    $_SESSION['ohj_val'] = $user->ohj_val;    
				    redirect(SITE_ROOT . "/selaa.php");//Palaa heti idex.php sivulle
				} catch(PDOException $e) {
					echo 'Käyttäjän tietojen hakuerhe';
					file_put_contents('log/DBErrors.txt', 'tallennaProfiili 3: 
'.$e->getMessage()."\n", FILE_APPEND);
				}
            }
		} catch(PDOException $e) {
			echo 'Tietojen lisäyserhe';
			file_put_contents('log/DBErrors.txt', 'tallennaProfiili 2: '.$e->getMessage()."\n", 
FILE_APPEND);
		
    }
	

?>
