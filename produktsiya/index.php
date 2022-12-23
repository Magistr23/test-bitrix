<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог продукции");?><main class="page__body">
<div class="container">
	 <!-- Хлебные крошки --><?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"catalog_cable",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "catalog_cable",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_PICTURE" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_FIELD_CODE" => array(0=>"NAME",1=>"",),
		"FILTER_NAME" => "",
		"FILTER_PRICE_CODE" => "",
		"FILTER_PROPERTY_CODE" => array(0=>"",1=>"",),
		"FILTER_VIEW_MODE" => "HORIZONTAL",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "Catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "30",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_SHOW_PARENT_NAME" => "N",
		"SECTION_TOP_DEPTH" => "1",
		"SEF_FOLDER" => "/produktsiya/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("sections"=>"","section"=>"#SECTION_CODE#/","element"=>"#SECTION_CODE#/#ELEMENT_CODE#/","compare"=>"compare.php?action=#ACTION_CODE#","smart_filter"=>"#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"TEMPLATE_THEME" => "blue",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_VIEW_MODE" => "SECTION",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_REVIEW" => "N",
		"USE_STORE" => "N",
		"VARIABLE_ALIASES" => array("compare"=>array("ACTION_CODE"=>"action",),)
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"template1",
	Array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "Catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("",""),
		"LIST_PROPERTY_CODE" => array("",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "товары",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "Y",
		"VARIABLE_ALIASES" => Array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID")
	)
);?><br>
</div>
<div class="container">
	 <!-- Хлебные крошки --> 
	 <!-- /Продукция -->
	<h2 class="small-mb">Наличие на складе</h2>
	<div class="b-block-cols">
		<div class="block-cols__big">
			 <!-- фильтр -->
			<div class="b-filter">
				<div class="filter__search">
 <input type="text" placeholder="Поиск по наименованию">
				</div>
				<div class="filter__selectbox">
					<select name="" id="" class="filter__select js-select">
						<option value="1">Силовой кабель</option>
						<option value="2">Силовой кабель 2</option>
						<option value="3">Силовой кабель 3</option>
						<option value="4">Силовой кабель 4</option>
						<option value="5">Силовой кабель 5</option>
					</select>
				</div>
			</div>
			 <!-- /фильтр --> <!-- таблица товаров -->
			<div class="b-product-table b-table js-table">
				<table>
				<tbody>
				<tr>
					<th>
						 Наименование
					</th>
					<th>
						 Склад
					</th>
					<th>
						 Кол-во
					</th>
					<th>
						 Ед. измерения
					</th>
					<th>
						 Цена
					</th>
					<th>
						 &nbsp;
					</th>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				<tr>
					<td>
						 АППГнг(А)-HF ТУ 16.К99-010-2004 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
						 Москва
					</td>
					<td>
						 2895
					</td>
					<td>
						 метр
					</td>
					<td>
						 по запросу <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
					<td>
 <a href="#callback" data-fancybox="" class="b-btn product-table__btn">Заказать</a>
					</td>
				</tr>
				</tbody>
				</table>
				 <!-- пагинация -->
				<div class="b-paginate hide-on-tablet hide-on-mobile">
					<div class="paginate__links">
 <a class="paginate__link paginate__link--prev" href="#">&nbsp;</a> <a href="#" class="paginate__link active">1</a> <a href="#" class="paginate__link">2</a> <a href="#" class="paginate__link">3</a> <span class="paginate__dots">...</span> <a href="#" class="paginate__link">78</a> <a class="paginate__link paginate__link--next" href="#">&nbsp;</a>
					</div>
				</div>
				<div class="b-show-more b-btn hide-on-desktop js-show-more">
					 Показать еще
				</div>
				<div class="b-show-more b-show-more--hide b-btn hide-on-desktop js-hide-more">
					 Свернуть
				</div>
				 <!-- пагинация -->
			</div>
			 <!-- /таблица товаров -->
		</div>
		<div class="block-cols__small">
			 <!-- документы -->
			<div class="b-docs">
				<div class="docs__item">
 <a href="#" class="docs__link">&nbsp;</a>
					<div class="docs__img">
 <img src="/local/templates/furniture_gray/img/icons/xls.svg" alt="">
					</div>
					<div class="docs__title">
						 Скачать все товары в наличии от 20.09.2022
					</div>
				</div>
			</div>
			 <!-- /документы -->
			<h3 class="small-mb">Новое поступление</h3>
			<div class="b-products b-products--col">
				 <!-- карточка продукта -->
				<div class="b-product">
					<div class="product__image">
 <img src="/local/templates/furniture_gray/img/item.png" alt="">
					</div>
					<div class="product__content">
 <a href="#" class="product__title">ВВГЭнг(А)</a>
						<div class="product__icons">
 <img src="/local/templates/furniture_gray/img/icons/icon-1.svg" alt=""> <img src="/local/templates/furniture_gray/img/icons/icon-3.svg" alt=""> <img src="/local/templates/furniture_gray/img/icons/icon-4.svg" alt=""> <img src="/local/templates/furniture_gray/img/icons/icon-4.svg" alt="">
						</div>
						<div class="product__txt">
							 Силовые кабели с медными жилами, с изоляцией и оболочкой из ПВХ пластиката пониженной горючести. Экранированные (Проволочный экран из медных... <a class="product__more" href="#">подробнее</a>
						</div>
					</div>
				</div>
				 <!-- /карточка продукта --> <!-- карточка продукта -->
				<div class="b-product">
					<div class="product__image">
 <img src="/local/templates/furniture_gray/img/item.png" alt="">
					</div>
					<div class="product__content">
 <a href="#" class="product__title">ВВГЭнг(А)</a>
						<div class="product__icons">
 <img src="/local/templates/furniture_gray/img/icons/icon-1.svg" alt=""> <img src="/local/templates/furniture_gray/img/icons/icon-3.svg" alt=""> <img src="/local/templates/furniture_gray/img/icons/icon-4.svg" alt="">
						</div>
						<div class="product__txt">
							 Силовые кабели с медными жилами, с изоляцией и оболочкой из ПВХ пластиката пониженной горючести. Экранированные (Проволочный экран из медных... <a class="product__more" href="#">подробнее</a>
						</div>
					</div>
				</div>
				 <!-- /карточка продукта --> <!-- карточка продукта -->
				<div class="b-product">
					<div class="product__image">
 <img src="/local/templates/furniture_gray/img/item.png" alt="">
					</div>
					<div class="product__content">
 <a href="#" class="product__title">ВВГЭнг(А)</a>
						<div class="product__icons">
 <img src="/local/templates/furniture_gray/img/icons/icon-1.svg" alt=""> <img src="/local/templates/furniture_gray/img/icons/icon-3.svg" alt=""> <img src="/local/templates/furniture_gray/img/icons/icon-4.svg" alt="">
						</div>
						<div class="product__txt">
							 Силовые кабели с медными жилами, с изоляцией и оболочкой из ПВХ пластиката пониженной горючести. Экранированные (Проволочный экран из медных... <a class="product__more" href="#">подробнее</a>
						</div>
					</div>
				</div>
				 <!-- /карточка продукта -->
			</div>
		</div>
	</div>
</div>
 </main>
<!-- Остались вопросы? -->
<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"form", 
	array(
		"EMAIL_TO" => "spanhbob98@mail.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
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