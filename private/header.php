<?
$var['siteroot'] = "http://animeghost.ru/";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=1920px">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<? echo $var['siteroot']?>AnimeGhost.ico" type="image/ico">
    <title><?php echo $var['title']; ?></title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<? echo $var['siteroot']?>css/main.css">
    <link rel="stylesheet" href="<? echo $var['siteroot']?>css/chosen.css">
  </head>
  <body>

    <a class="logoimg" href="/"><img src="<? echo $var['siteroot']?>img/biglogo.png"></a>
    <div class="main">
      <div class="content">
				<div class="contentmenu">
					<ul class="main-navigation">
						<li><a id="button0" href="/">ГЛАВНАЯ</a></li>
						<li><a id="button1" href="/pages/anime.php">АНИМЕ</a></li>
						<li><a id="button2" href="/pages/manga.php">МАНГА</a></li>
						<li><a id="button3" href="/pages/lk.php">ЛИЧНЫЙ КАБИНЕТ</a></li>
						<li><a id="button4" href="/pages/login.php">ВХОД</a></li>
						<li><a id="button5" href="/pages/reg.php">РЕГИСТРАЦИЯ</a></li>
                  <li><a id="button6" href="/pages/ourteam.php">КОМАНДА ANIMEGHOST</a></li>
					</ul>
				</div>
