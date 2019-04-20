<?
$var['time'] = time();
$var['ip'] = $_SERVER['REMOTE_ADDR'];
$var['user_agent'] = '';
if(!empty($_SERVER['HTTP_USER_AGENT'])){
	$var['user_agent'] = htmlspecialchars($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
}
$var['user_values'] = [
	'access' => 'Доступ',
	'register_date' => 'Дата регистрации',
	'last_activity' => 'Последняя активность',
	'name' => 'Имя',
	'age' => 'Возраст',
	'sex' => 'Пол',
	'vk' => 'Вконтакте',
	'telegram' => 'Телеграм',
	'steam' => 'SteamID',
	'phone' => 'Телефон',
	'skype' => 'Skype',
	'facebook' => 'Facebook',
	'instagram' => 'Instagram',
	'youtube' => 'Youtube',
	'twitch' => 'Twitch',
	'twitter' => 'Twitter',
	'telegram' => 'Telegram'
];
$var['error'] = [
	'success' => 'Успех',
	'empty' => 'Пустое значение, заполните поля',
	'wrong' => 'Неправильное значение',
	'authorized' => 'Уже авторизован',
	'registered' => 'Уже зарегистрирован',
	'long' => 'Слишком длинное значение',
	'short' => 'Слишком короткое значение',
	'wrongLogin' => 'Неправильный логин',
	'wrongEmail' => 'Неправильный email',
	'wrongUserAgent' => 'Неправильный user agent',
	'invalidUser' => 'Неправильный пользователь',
	'wrong2FA' => 'Неправильный код 2FA',
	'wrongPass' => 'Неправильный пароль',
	'wrongNewPasswd' => 'Новый пароль не совпадает',
	'samePasswd' => 'Использован старый пароль',
	'noUser' => 'Нет такого пользователя',
	'wrongHash' => 'Неправильный hash',
	'wrongLink' => 'Неправильная ссылка',
	'reCaptchaFail' => 'reCaptcha test failed',
	'reCaptcha3' => 'reCaptcha test failed: score too low',
	'coinhive' => 'Coinhive проверка не пройдена',
	'checkEmail' => 'Проверьте почту',
	'unauthorized' => 'Неавторизованный пользователь',
	'2FA' => '2FA уже активирована',
	'2FAdisabled' => '2FA выключена',
	'2FAenabled' => '2FA включена',
	'access' => 'Доступ запрещен',
	'same' => 'Одинаковые данные',
	'used' => 'Уже занято',
	'noUploadFile' => 'Неудачная загрузка',
	'uploadError' => 'Неудачная загрузка',
	'wrongType' => 'Неправильный формат файла',
	'maxSize' => 'Слишком большой файл',
	'maxarg' => 'Слишком много аргументов',
	'wrongData' => 'Неправильные данные',
	'wrongRelease' => 'Неправильный релиз',
	'exitTorrent' => 'Торрент уже добавлен',
];

?>
