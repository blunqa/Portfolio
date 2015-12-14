<?php
/**
 * Redirects to given url
 * Redirect... Try PHP header redirect, then Java redirect, then try http redirect.:
 * Voi käyttää missä kohtaa tahansa sivulla
 * @param url 
 */
function redirect($url){
	if (!headers_sent()){    //If headers not sent yet... then do php redirect
		header('Location: '.$url); exit;
	}else{            //If headers are sent... do java redirect... if java disabled, do html redirect.
		echo '<script type="text/javascript">';
	echo 'window.location.href="'.$url.'";';
		echo '</script>';
		echo '<noscript>';
		echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
		echo '</noscript>'; exit;
	}
}

/**
* Turn on HTTPS - Detect if HTTPS, if not on, then turn on HTTPS:
*/
function SSLon() {
	if ($_SERVER ['HTTPS'] != 'on') {
		$url = "https://" . $_SERVER ['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		redirect ( $url );
	}
}
/**
* Turn Off HTTPS -- Detect if HTTPS, if so, then turn off HTTPS:
*/
function SSLoff() {
	if ($_SERVER ['HTTPS'] == 'on') {
		$url = "http://" . $_SERVER ['HTTP_HOST'] . $_SERVER ['REQUEST_URI'];
		redirect ( $url );
	}
}

function age(){
    $today = new DateTime();
    $birthdate = new DateTime($_SESSION['saika']);
    $interval = $today->diff($birthdate);
    echo $interval->format('%y vuotta');
}
?>
