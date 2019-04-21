<?
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/var.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/session.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/auth.php');

$var['title'] = 'Главная';
$var['page'] = 'main';

require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');

?>

<div class="simpleblock">

</div>

<?

require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>
