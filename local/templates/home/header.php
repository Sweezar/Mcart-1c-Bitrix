<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php $APPLICATION->ShowTitle()?></title>
  <?php $APPLICATION->ShowHead();?>

  <?php
    use Bitrix\Main\Page\Asset;
    $objAsset = Asset::getInstance();

    $objAsset->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
    $objAsset->addString('<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">');
    
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/fonts/icomoon/style.css');

    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/magnific-popup.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/jquery-ui.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/owl.theme.default.min.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap-datepicker.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/mediaelementplayer.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/animate.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/fonts/flaticon/font/flaticon.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/fl-bigmug-line.css');
    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/aos.css');

    $objAsset->addCss(SITE_TEMPLATE_PATH.'/css/style.css');

    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery-3.3.1.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery-migrate-3.0.1.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery-ui.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/popper.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/mediaelement-and-player.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.stellar.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.countdown.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.magnific-popup.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/bootstrap-datepicker.min.js');
    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/aos.js');

    $objAsset->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
  ?>

</head>

<body>
  <?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span>
                <span class="d-none d-md-inline-block ml-2">
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include", 
                  ".default", 
                  array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/phone.php",
                    "COMPONENT_TEMPLATE" => ".default",
                    "EDIT_TEMPLATE" => ""
                  ),
                  false
                );?>
                </span>
              </a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    ".default", 
                    array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/include/email.php",
                      "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                  );?>
                </span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include/auth.php",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/include/social_list.php",
              "COMPONENT_TEMPLATE" => ".default"
            ),
            false
          );?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/logo.php",
                "COMPONENT_TEMPLATE" => ".default"
              ),
              false
            );?>
            </h1>
          </div>

            <!-- Верхнее меню -->
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
              "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "3",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "36000",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "horizontal_multilevel"
              ),
              false
            );?>

          

        </div>
      </div>
    </div>
  </div>

  <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumb", 
	array(
		"COMPONENT_TEMPLATE" => "breadcrumb",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	),
	false
);?>