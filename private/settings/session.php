<?
function sessionHandler(){
	if(isset($_COOKIE['PHPSESSID']) && !preg_match('/^[-,a-zA-Z0-9]{22,64}$/', $_COOKIE['PHPSESSID'])){
		setcookie('PHPSESSID', '', time() - 86400, '/', $_SERVER['SERVER_NAME'], true, true);
		unset($_COOKIE['PHPSESSID']);
		return;
	}
	$lifetime = 60*60*24*30;
	session_set_cookie_params($lifetime, '/', $_SERVER['SERVER_NAME'], true, true);
	session_start();

	if(empty($_SESSION['secret'])){
		$_SESSION['secret'] = bin2hex(random_bytes(32));
	}

	if(random_int(1, 10) == 1){
		setcookie(session_name(), session_id(), time()+$lifetime, '/', $_SERVER['SERVER_NAME'], true, true);
	}
}
sessionHandler();
?>
