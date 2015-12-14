<?php function login($username, $salasana, $DBH) {
	// !! on suola, jotta kantaan taltioitu eri hashkoodi vaikka salasana olisi tiedossa
	//kokeile !! ja ilman http://www.danstools.com/md5-hash-generator/
	//Tukevampia salauksia hash('sha256', $pwd ) tai hash('sha512', $pwd )
	//MD5 on 128 bittinen
	$hashpwd = hash('md5', $salasana.'!!'); //HUOM Suola
	//An array of values with as many elements as there are bound parameters in the 
	//SQL statement being executed. All values are treated as PDO::PARAM_STR
	$data = array('username' => $username, 'salasana' => $hashpwd);
	//print_r($data);
	try {
		//print_r($data);
		//echo "Login 1<br />";
		$STH = $DBH->prepare("SELECT * FROM KAYTTAJA WHERE username = :username AND salasana = :salasana");
		$STH->execute($data);
		$STH->setFetchMode(PDO::FETCH_OBJ);
		$row = $STH->fetch();
		//print_r($row);
		if($STH->rowCount() > 0){
			//echo "Login 4<br />";
			return $row;
		} else {
			//echo "Login 5<br />";
			return false;
		}
	} catch(PDOException $e) {
		echo "Login DB error.";
		file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", FILE_APPEND);
	}
}
function getUsername($kayttaja, $DBH){
	try {
		$STH = $DBH->prepare("SELECT * FROM KAYTTAJA WHERE username = :username");
		$STH->bindParam(':username', $kayttaja);
		$STH->execute($data);
		$STH->setFetchMode(PDO::FETCH_OBJ);
		$username = $STH->fetch();
		return($username);
	} catch(PDOException $e) {
		file_put_contents('log/DBErrors.txt', 'portfolio.php: '.$e->getMessage()."\n", FILE_APPEND);
		return false;
	}
}
function getProjects($userID, $DBH){
	
	try {
		$projektit = array();
		$STH = $DBH->prepare("SELECT PROJEKTI.id, PROJEKTI.nimi, PROJEKTI.kuvaus, PROJEKTI.kategoria, PROJEKTI.pvm  FROM PROJEKTI, PROF_PROJ WHERE PROF_PROJ.projekti = PROJEKTI.id AND PROF_PROJ.kayttaja = :user");
		$STH->bindParam(':user', $userID);
		$STH->execute();
		$STH->setFetchMode(PDO::FETCH_OBJ);
		while ($projekti = $STH->fetch()){
			$projektit[] = $projekti;	
		}
		return $projektit;
	} catch(PDOException $e) {
		file_put_contents('log/DBErrors.txt', 'subcategory.php: '.$e->getMessage()."\n", 
FILE_APPEND);
		return false;
	}
}
?>

<?php
/**
 * SELAA 12 UUSINTA PROJEKTIA!
 * Hakee annetusta kannasta enintään 12 uusinta projektia. 
 * @param unknown_type $DBH
 * @return $projektit taulukko
 */
function getNewProjects($DBH){
	try {
		//Haetaan 12 uusinta projektia
		$projektit = array(); //Taulukko projekti-olioille
	
		$STH = $DBH->query("SELECT projekti.nimi, projekti.kuva 
				            FROM projekti
				            ORDER BY projekti.pvm DESC LIMIT 12");  //DESC,ASC
		$STH->setFetchMode(PDO::FETCH_OBJ);  //yksi rivi objektina
		return $projektit;
	} catch(PDOException $e) {
        //Kirjoitetaan mahdollinen virheviesti tiedostoon
		file_put_contents('log/DBErrors.txt', 'selaa.php: '.$e->getMessage()."\n", FILE_APPEND);
		return false;
	}
}
?>
