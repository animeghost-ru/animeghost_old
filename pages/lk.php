<?
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/session.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/var.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/auth.php');

$var['title'] = 'Личный кабинет';
$var['page'] = 'lk';
require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');
if (!$_SESSION['login']){
  echo '<div class="simpleblock"> Вы не авторизованы, перейдите на страницу авторизации! </div>';
}else{
?>
<div class="simpleblock">
  <h3>Профиль пользователя <? echo $user['login'];?></h3>

</div>


<?
}
require($_SERVER['DOCUMENT_ROOT'].'/private/right.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>
