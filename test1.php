<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test1");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"form", 
	array(
		"EMAIL_TO" => "Spanhbob98@mail.ru",
		"EVENT_MESSAGE_ID" => array(
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "form"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>