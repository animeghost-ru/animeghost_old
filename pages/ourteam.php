<?
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/var.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/auth.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/session.php');
$var['title'] = 'Наша команда';
$var['page'] = 'ourteam';
require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');
?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/private/right.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>
