<?
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/var.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/session.php');
$var['title'] = 'Личный кабинет';
$var['page'] = 'lk';
require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');
if (!$_SESSION['login']){
  echo '<div class="simpleblock"> Вы не авторизованы, перейдите на страницу авторизации! </div>';
}
?>
<div class="simpleblock">


</div>


<?
require($_SERVER['DOCUMENT_ROOT'].'/private/right.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>
