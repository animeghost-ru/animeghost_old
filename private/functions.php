<?
function _msg($key, $err = 'ok'){
	global $var;
	die(json_encode(['err' => $err, 'mes' => $var['error'][$key], 'key' => $key]));
}

function _exit()
{
	global $db, $var;
	if(session_status() != PHP_SESSION_NONE)
	{
		if($_SESSION['login'])
		{
			$query = $db->prepare('DELETE FROM `session` WHERE `hash` = :hash');
			$query->bindParam(':hash', $_SESSION['login']);
			$query->execute();
		}
		$params = session_get_cookie_params();
		setcookie(session_name(), '', $var['time'] - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
		session_unset();
		session_destroy();
		if(strpos($var['user_agent'], 'mobileApp') === false)
		{
			header("Location: https://".$_SERVER['SERVER_NAME']);
		}
	}
}

function getGenreList()
{
	global $db; $arr = [];
	$result = '';
	$tmpl = '<option value="{name}">{name}</option>';
	$sql = "SELECT `name` from `genres` ORDER BY `rating` ASC";
	$query = $db->query($sql);
	while($row = $query->fetch())
	{
		$arr[] = $row['name'];
	}
	foreach($arr as $k => $v)
	{
		$result .= str_replace('{name}', $v, $tmpl);
	}
	return $result;
}

function login()
{
	global $db, $user, $var;
	if($user){
		_msg('authorized', 'error');
	}
	if(empty($_POST['login']) || empty($_POST['pass']))
	{
		_msg('empty', 'error');
	}
	$_POST['login'] = mb_strtolower($_POST['login']);
	$query = $db->prepare('SELECT `id`, `login`, `pass` FROM `users` WHERE `login` = :login');
	$query->bindValue(':login', $_POST['login']);
	$query->execute();
	if($query->rowCount() == 0)
	{
		_msg('invalidUser', 'error');
	}
	$row = $query->fetch();
	if($_POST['pass'] != $row['pass'])
	{
		_msg('wrongPass', 'error');
	}else{
	sessStart($row);
	_msg('success');
	}
}

function sessStart($row)
{
	global $db, $var;

	//$hash = session_hash($row['login'], $row['pass']);
	$query = $db->prepare('INSERT INTO `session` (`uid`, `hash`, `ip`, `info`) VALUES (:uid, :hash, INET6_ATON(:ip), :info)');
	$query->bindParam(':uid', $row['id']);
	$query->bindParam(':hash', $row['login']);
	$query->bindParam(':ip', $var['ip']);
	$query->bindParam(':info', $var['user_agent']);
	$query->execute();
	$_SESSION['login'] = $row['login'];
	$sid = $db->lastInsertId();
	$query = $db->prepare('UPDATE `users` SET `last_activity` = :time WHERE `id` = :id');
	$query->bindParam(':time', $var['time']);
	$query->bindParam(':id', $row['id']);
	$query->execute();
	$query = $db->prepare('INSERT INTO `log_ip` (`uid`, `sid`, `ip`, `time`, `info`) VALUES (:uid, :sid, INET6_ATON(:ip), :time, :info)');
	$query->bindParam(':uid', $row['id']);
	$query->bindParam(':sid', $sid);
	$query->bindParam(':ip', $var['ip']);
	$query->bindParam(':time', $var['time']);
	$query->bindParam(':info', $var['user_agent']);
	$query->execute();
}


function auth()
{
	global $conf, $db, $var, $user;
	if(random_int(1, 1000) == 1)
	{
		$tmp = time();
		$query = $db->prepare('DELETE FROM `session` WHERE `time`< :time');
		$query->bindParam(':time', $tmp);
		$query->execute();
	}
	if($_SESSION['login'])
	{
		$query = $db->prepare('SELECT `id`, `uid`, `hash` FROM `session` WHERE `hash` = :hash and `time` > :time');
		$query->bindParam(':hash', $_SESSION['login']);
		$query->bindParam(':time', $var['time']);
		$query->execute();
		if($query->rowCount()!=1)
		{
			_exit();
			return;
		}
		$session = $query->fetch();
		$query = $db->prepare('SELECT `id`, `login`, `pass`, `mail`, `vk`, `avatar`, `regdate`, `last_activity` FROM `users` WHERE `id` = :id');
		$query->bindParam(':id', $session['uid']);
		$query->execute();
		if($query->rowCount() != 1)
		{
			_exit();
			return;
		}
		$row = $query->fetch();
		if ($_SESSION['login'] != $row['login'])
		{
			_exit();
			return;
		}
		if(random_int(1, 10) == 1)
		{
			$tmp = $var['time']+60*60*24*30;
			$query = $db->prepare('UPDATE `session` set `time` = :time WHERE `id` = :id');
			$query->bindParam(':time', $tmp);
			$query->bindParam(':id', $session['id']);
			$query->execute();
		}
		$user =
		[
			'id' => $row['id'],
			'vk' => $row['vk'],
			'avatar' => $row['avatar'],
			'pass' => $row['pass'],
			'mail' => $row['mail'],
			'login' => $row['login'],
			'regdate' => $row['regdate'],
			'last_activity' => $row['last_activity']
		];
	}
}

?>
