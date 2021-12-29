<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Контакты'); //заловок на странице

$APPLICATION->SetPageProperty('TITLE', 'Контакты'); //загловок на вкладке браузера
$APPLICATION->SetPageProperty("keywords", "Keywords Контакты");
$APPLICATION->SetPageProperty("description", "Description Контакты");
?>


<!-- Контакты + ФОС -->
<div class="contact-form pt-90 pb-30">
	<div class="container">
		<div class="row">
			<div class="section-heading text-center mb-70">
				<h2>Нужен классный сайт?</h2>
				<p>Оставьте заявку в форме ниже и мы всё сделаем!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="contact-info">
					<address>
						<ul>
							<li>
								<i aria-hidden="true" class="fa fa-map-marker brand-color"></i>
								<div class="address">
									Мы находимся по адресу:
									<hr>
									<p>г. Тюмень, ул. Республики 94, офис 23</p>
								</div>
							</li>
							<li>
								<i aria-hidden="true" class="fa fa-phone brand-color"></i>
								<div class="phone">
									<p>8-123-456-7899</p>
								</div>
							</li>
							<li>
								<i class="fa fa-envelope brand-color"></i>
								<div class="mail">
									<p>
										<a href="mailto:#">wecoders@wecodres.com</a>
									</p>
								</div>
							</li>
							<li></li>
						</ul>
					</address>
				</div>
			</div>

			<? $APPLICATION->IncludeComponent(
				"mycomponents:main.feedback",
				"contactsPageForm",
				array(
					"AJAX_MODE" => "Y",
					"EMAIL_TO" => "victor010389@yandex.ru", // E-mail, на который будет отправлено письмо
					"EVENT_MESSAGE_ID" => array(0 => "7",), // Почтовые шаблоны для отправки письма
					"OK_TEXT" => "Спасибо, ваше сообщение принято.", // Сообщение, выводимое пользователю после отправки
					"REQUIRED_FIELDS" => array(0 => "NAME", 1 => "EMAIL", 2 => "PHONE",), // Обязательные поля для заполнения
					"USE_CAPTCHA" => "N", // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
					"AJAX_MODE" => "Y" //отправка формы без перезагрузки страницы
				)
			); ?>

		</div>
	</div>
</div>

<!-- Карта -->
<div class="map-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="map" class="mtb-90"></div>
			</div>
		</div>
	</div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>