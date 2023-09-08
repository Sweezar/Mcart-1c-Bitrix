<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">      
			<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback_form", Array(
				"EMAIL_TO" => "royal13flush@gmail.com",	// E-mail, на который будет отправлено письмо
					"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
					"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
					"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
				),
				false
			);?>
			</div>
			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
					Array()
					);?>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>