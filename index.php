<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');//заловок на странице

$APPLICATION->SetPageProperty('TITLE', 'Заголовок');//загловок на вкладке браузера
?> 
<p>Текст на главной</p>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>