<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Title+");
$APPLICATION->SetPageProperty("keywords", "Keywords+");
$APPLICATION->SetPageProperty("description", "Description+");
$APPLICATION->SetTitle("Тест");
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<? $APPLICATION->IncludeComponent("mycomponents:main.feedback", "contactsPageForm", Array(
	"EMAIL_TO" => "victor010389@yandex.ru",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
			2 => "PHONE",
		),
		"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"AJAX_MODE" => "Y" //отправка формы без перезагрузки страницы
	),
	false
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>