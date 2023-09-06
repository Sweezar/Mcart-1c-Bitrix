<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
          <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/footer_about.php",
                "COMPONENT_TEMPLATE" => ".default"
              ),
              false
            );?>
          </div>
        </div>

        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "36000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>

        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/footer_social.php",
                "COMPONENT_TEMPLATE" => ".default"
              ),
              false
            );?>

        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/footer_copyright.php",
                "COMPONENT_TEMPLATE" => ".default"
              ),
              false
            );?>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>

  </div>

</body>

</html>