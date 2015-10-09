<?
require($_SERVER["DOCUMENT_ROOT"]."/mobile/headers.php");
define('MOBILE_TEMPLATE_CSS', "/im_styles.css");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

CMobile::getInstance()->setLargeScreenSupport(false);
CMobile::getInstance()->setScreenCategory("NORMAL");

\Bitrix\Main\Data\AppCacheManifest::getInstance()->addAdditionalParam("api_version", CMobile::getApiVersion());
\Bitrix\Main\Data\AppCacheManifest::getInstance()->addAdditionalParam("platform", CMobile::getPlatform());
\Bitrix\Main\Data\AppCacheManifest::getInstance()->addAdditionalParam("im-resent", 'v3');
\Bitrix\Main\Data\AppCacheManifest::getInstance()->addAdditionalParam("version", "v5");
\Bitrix\Main\Data\AppCacheManifest::getInstance()->addAdditionalParam("user", $USER->GetId());

$APPLICATION->IncludeComponent("bitrix:mobile.im.recent", ".default", array('POSITION' => 'RIGHT'), false, Array("HIDE_ICONS" => "Y"));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>