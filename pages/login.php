<?
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/var.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/session.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/auth.php');
$var['title'] = 'Авторизация';
$var['page'] = 'login';
require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');
if (empty($_SESSION['login']))
{
?>
<div class="simpleblock">
    <div id="input">
        <input id="login" class="form-control" placeholder="Логин" type="text" required style="margin-bottom: 5px;">
        <input id="pass" class="form-control" placeholder="Пароль" type="password" required>
        <input class="btn" type="submit" value="Вход в личный кабинет." login-submit>
        <a href="/public/logout.php"><input class="btn" type="submit" value="Выход!"></a>
        <p id="loginMes"></p>
    </div>
    <div id="gif" style="display: none;">
        <img src="<? echo $var['siteroot']?>img/35.gif" style="margin-left: 49%;">
    </div>
</div>
<?
}else{
?>
<div class="simpleblock">
    <div id="input">
        <a href="/public/logout.php"><input class="btn" type="submit" value="Выход!"></a>
        <p id="loginMes"></p>
    </div>
    <div id="gif" style="display: none;">
        <img src="<? echo $var['siteroot']?>img/35.gif" style="margin-left: 49%;">
    </div>
</div>
<?
}
require($_SERVER['DOCUMENT_ROOT'].'/private/right.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>
