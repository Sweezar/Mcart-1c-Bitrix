<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="site-section border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "contacts_image",
					"EDIT_TEMPLATE" => ""
				)
			);?>
			</div>
			<div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
				<div class="site-section-title mb-3">
					<h2><?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "contacts_header",
							"EDIT_TEMPLATE" => ""
						)
					);?></h2>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "contacts_text",
						"EDIT_TEMPLATE" => ""
					)
				);?>
				</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>