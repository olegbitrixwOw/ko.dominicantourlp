<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);

?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead()?>
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.png">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.7.2.min.js"></script>
	<script type="<?=SITE_TEMPLATE_PATH?>/text/javascript" src="js/jquery.inputmask.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
</head>


<body>
<?$APPLICATION->ShowPanel();?>

<div class="wrapper">

	<div class="header">
		<div class="center header1">

			<div class="top">
				<div class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></div>	
				<div class="adres">
					<p><?=GetMessage("ADDR")?></p>

				</div>
<?$APPLICATION->IncludeComponent(
               "bitrix:main.include",
               "",
               Array(
                   "AREA_FILE_SHOW" => "file",
                   "AREA_FILE_SUFFIX" => "inc",
                   "EDIT_TEMPLATE" => "",
                   "PATH" => SITE_TEMPLATE_PATH."/include/phone.php"
               )
           );?>


			</div>
<h1><?=GetMessage("TITLE")?></h1>



		</div>












<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"excursions_list_by_ko",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#EXCURSIONS#",
		"IBLOCK_TYPE" => "ko_dominicantourlp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => ""
	)
);?>



<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"faq_by_ko",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#FAQ#",
		"IBLOCK_TYPE" => "ko_dominicantourlp",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => ""
	)
);?>



	<div class="map">
		<div class="center">
			<h3><?=GetMessage("MAP_TITLE")?></h3>
		</div>
		<div class="map_yandex">
			<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=CmTq9cVdJ2mBh9kLoB2vXKtQYFvjpKnw&amp;width=100:&amp;height=545"></script>
		</div>
	</div>

























</body>