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
?>
