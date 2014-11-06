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
        <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
        <h1 id="logo"><a href="#">shoparound</a></h1>
            <?if(!CSite::InDir('/')):?></a><?endif;?>

        <!-- Cart -->
        <div id="cart">
            <a href="#" class="cart-link">Your Shopping Cart</a>
            <div class="cl">&nbsp;</div>
            <span>Articles: <strong>4</strong></span>
            &nbsp;&nbsp;
            <span>Cost: <strong>$250.99</strong></span>
        </div>
        <!-- End Cart -->

        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">The Store</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- End Navigation -->
    </div>
    <!-- End Header -->