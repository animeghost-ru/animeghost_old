<? 
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
$var['title'] = 'Авторизация';
$var['page'] = 'login';
require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');
?>
<div class="simpleblock">
    <div id="input">
        <input class="form-control" placeholder="Логин" type="text" required style="margin-bottom: 5px;">
        <input class="form-control" placeholder="Пароль" type="password" required>
        <input class="btn" type="submit" value="Вход в личный кабинет." login-submit>
    </div>
    <div id="gif" style="display: none;">
        <img src="<? echo $var['siteroot']?>img/35.gif" style="margin-left: 49%;">
    </div>
</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/private/right.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>