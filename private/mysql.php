<?
$dsn = "mysql:host=".$conf['mysql_host'].";dbname=".$conf['mysql_base'].";charset=utf8";

$opt = array(
    PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

try { $db = new PDO($dsn, $conf['mysql_user'], $conf['mysql_pass'], $opt); }
catch (PDOException $e) {
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/private/logs/PDOErrors.txt', $e->getMessage().PHP_EOL, FILE_APPEND);
	die('MySQL ERROR');
}

/*
try {
	$db = new PDO("mysql:host={$conf['mysql_host']};dbname={$conf['mysql_base']}", $conf['mysql_user'], $conf['mysql_pass']);
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$db->exec("set names utf8");
}
catch(PDOException $e) {
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/private/logs/PDOErrors.txt', $e->getMessage().PHP_EOL, FILE_APPEND);
	die('MySQL ERROR');
}

*/

/*
$link = mysqli_connect($conf['mysql_host'], $conf['mysql_user'], $conf['mysql_pass'], $conf['mysql_base'])
    or die("������ " . mysqli_error($link));
*/
?>
