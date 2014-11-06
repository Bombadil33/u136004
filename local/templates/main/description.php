<?php
/**
 * Created by PhpStorm.
 * User: Adasdad
 * Date: 06.11.2015
 * Time: 20:11
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
$arTemplate = Array(
    "NAME" => GetMessage("TEMPLATE_DESCRIPTION_NAME"),
    "DESCRIPTION" => GetMessage("TEMPLATE_DESCRIPTION_DESC")
);
?>
