<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('О нас'); //заловок на странице

$APPLICATION->SetPageProperty('TITLE', 'О нас'); //загловок на вкладке браузера
$APPLICATION->SetPageProperty("keywords", "Keywords о нас");
$APPLICATION->SetPageProperty("description", "Description о нас");
?>
<?= "Вывод description: " . $APPLICATION->GetPageProperty("description"); ?>

<!-- О нас -->
<section class="who-area-are pad-90" id="about_us">
	<div class="container">
		<h2 class="title-1">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "about_title",
					"EDIT_TEMPLATE" => ""
				)
			); ?>
		</h2>
		<div class="row">
			<div class="col-md-7">
				<div class="who-we">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "about_text",
							"EDIT_TEMPLATE" => ""
						)
					); ?>
				</div>
			</div>
			<div class="col-md-5">
				<div class="about-bg">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "about_image",
							"EDIT_TEMPLATE" => ""
						)
					); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>