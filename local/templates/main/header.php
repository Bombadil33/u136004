<?php
/**
 * Created by PhpStorm.
 * User: Adasdad
 * Date: 06.11.2015
 * Time: 15:33
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?> <?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/style.css", true);?>
    <!--[if lte IE 6]>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/ie6.css", true);?><![endif]-->

    <?$APPLICATION->ShowHead();?>

    <!-- JS -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery-1.4.1.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.jcarousel.pack.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery-func.js", true);?>
    <!-- End JS -->

</head>
<body>
<?$APPLICATION->ShowPanel();?>

<!-- Shell -->
<div class="shell">

    <!-- Header -->
    <div id="header">
        <h1 id="logo">
                <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                    <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php" ));?>
                    <?if(!CSite::InDir('/')):?></a><?endif;?>

        </h1>
        <!-- Cart -->
        <div id="cart">
            <a href="#" class="cart-link">Вход/Регистрация</a>
        </div>
        <!-- End Cart -->

        <!-- Navigation -->
        <div id="navigation">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "ROOT_MENU_TYPE" => "top",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(""),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            )
        );?>
        </div>
        <!-- End Navigation -->

        <!-- Phone -->
        <div id="phone">
            <ul>
                <li class="phone"><?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/phonenumber.php" ));?></li>
            </ul>
        </div>
        <!-- End Phone -->
    </div>
    <!-- End Header -->

