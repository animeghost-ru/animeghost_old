<?
require($_SERVER['DOCUMENT_ROOT'].'/private/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/mysql.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/var.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/auth.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/settings/session.php');
$var['title'] = 'Каталог Аниме';
$var['page'] = 'anime';
require($_SERVER['DOCUMENT_ROOT'].'/private/header.php');
?>

<div class="simpleblock" id="searchParams">
<input id="aname" class="search" placeholder="Введите название">
<div>
   <select id="chosen" class="form-control сhosen search" data-placeholder="Выбрать жанры" multiple>
      <? echo getGenreList(); ?>
   </select>
</div>
</div>

<div class="simpleblock" id="searchResults">

</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/private/right.php');
require($_SERVER['DOCUMENT_ROOT'].'/private/footer.php');
?>
