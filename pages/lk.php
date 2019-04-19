<? 
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
$var['title'] = 'Личный кабинет';
$var['page'] = 'lk';
require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');
?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/private/right.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>