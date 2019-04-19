<?
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
		_message('authorized', 'error');
	}
	if(empty($_POST['login']) || empty($_POST['pass']))
	{
		_msg('empty', 'error');
	}
	$_POST['login'] = mb_strtolower($_POST['mail']);
	$query = $db->prepare('SELECT `id`, `login`, `pass` FROM `users` WHERE `login` = :login');
	$query->bindValue(':login', $_POST['login']);
	$query->execute();
	if($query->rowCount() == 0)
	{
		_msg('invalidUser', 'error');
	}
	$row = $query->fetch();
	if(!password_verify($_POST['pass']), $row['pass'])
	{
		_msg('wrongPass', 'error');
	}
	sessStart($row);
	_msg('success');
}

function sessStart($row)
{
	global $db, $var;

	$hash = session_hash($row['login'], $row['pass']);
	$query = $db->prepare('INSERT INTO `session` (`uid`, `ip`, `info`) VALUES (:uid, INET6_ATON(:ip), :info)');
	$query->bindParam(':uid', $row['id']);
	$query->bindParam(':ip', $var['ip']);
	$query->bindParam(':info', $var['user_agent']);
	$query->execute();
	$_SESSION['sess'] = $hash[0];
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

?>
