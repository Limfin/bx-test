<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('О нас');//заловок на странице

$APPLICATION->SetPageProperty('TITLE', 'О нас');//загловок на вкладке браузера
$APPLICATION->SetPageProperty("keywords", "Keywords о нас");
$APPLICATION->SetPageProperty("description", "Description о нас");
?> 
<?= "Вывод description: " . $APPLICATION->GetPageProperty("description"); ?>
<p>Страница О нас</p>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>