<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Прес-центр");
?><main class="page__body">
<div class="container">
	 <!-- Хлебные крошки --> <!-- Хлебные крошки --> <!-- Пресс – центр -->
	<div class="b-press b-press--detail">
		<div class="press__left">
			<div class="press__big">
 <img src="/local/templates/furniture_gray/img/press.png" class="press__img" alt="">
				<div class="press__content">
					<div class="press__date">
						10 сентября
					</div>
					<div class="press__title">
						 Компания «Универсалкабель» начала производить бронированный силовой кабель
					</div>
				</div>
 <a href="#" class="press__link">&nbsp;</a>
			</div>
		</div>
		<div class="press__right hide-on-tablet hide-on-mobile">
			<div class="press__name">
				Последние новости
			</div>
			<div class="press__items">
				<div class="press__item">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	".default",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/new/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_ID#/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
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
		"USE_SEARCH" => "N"
	)
);?>
				</div>
			</div>
		</div>
	</div>
	 <!-- /Пресс – центр --> <!-- Список новостей -->
	<h2>Похожие новости</h2>
	<div class="b-news">
		<div class="news__items">
			<div class="news__item">
 <a href="#" class="news__link">&nbsp;</a> <img src="/local/templates/furniture_gray/img/news-1.png" alt="" class="news__image">
				<div class="news__title">
					 Расширение складских площадей в Подмосковье с продукцией компании «Универсалкабель»
				</div>
				<div class="news__date">
					сегодня, 12.30
				</div>
			</div>
			<div class="news__item">
 <a href="#" class="news__link">&nbsp;</a> <img src="/local/templates/furniture_gray/img/news-2.png" alt="" class="news__image">
				<div class="news__title">
					 Подмосковье с продукцией компании «Универсалкабель»
				</div>
				<div class="news__date">
					сегодня, 12.30
				</div>
			</div>
			<div class="news__item">
 <a href="#" class="news__link">&nbsp;</a> <img src="/local/templates/furniture_gray/img/news-3.png" alt="" class="news__image">
				<div class="news__title">
					 Расширение складских площадей в Подмосковье с продукцией компании «Универсалкабель»
				</div>
				<div class="news__date">
					сегодня, 12.30
				</div>
			</div>
			<div class="news__item">
 <a href="#" class="news__link">&nbsp;</a> <img src="/local/templates/furniture_gray/img/news-2.png" alt="" class="news__image">
				<div class="news__title">
					 Подмосковье с продукцией компании «Универсалкабель»
				</div>
				<div class="news__date">
					сегодня, 12.30
				</div>
			</div>
			<div class="news__item">
 <a href="#" class="news__link">&nbsp;</a> <img src="/local/templates/furniture_gray/img/news-3.png" alt="" class="news__image">
				<div class="news__title">
					 Расширение складских площадей в Подмосковье с продукцией компании «Универсалкабель»
				</div>
				<div class="news__date">
					сегодня, 12.30
				</div>
			</div>
		</div>
 <a href="#" class="news__btn b-btn js-news-show">Показать еще</a> <a href="#" class="news__btn news__btn--hide b-btn js-news-show">Скрыть</a>
	</div>
	 <!-- /Список новостей --> <!-- Последние новости -->
	<div class="b-press hide-on-desktop">
		<div>
			<div class="press__name">
				Последние новости
			</div>
			<div class="press__items">
				<div class="press__item">
 <a href="#" class="press__title">
					Расширение складских площадей в Подмосковье с продукцией компании «Универсалкабель» </a>
					<div class="press__date">
						сегодня, 12.30
					</div>
				</div>
				<div class="press__item">
 <a href="#" class="press__title">
					Расширение складских площадей в Подмосковье с продукцией компании «Универсалкабель» </a>
					<div class="press__date">
						сегодня, 12.30
					</div>
				</div>
				<div class="press__item">
 <a href="#" class="press__title">
					Расширение складских площадей в Подмосковье с продукцией компании «Универсалкабель» </a>
					<div class="press__date">
						сегодня, 12.30
					</div>
				</div>
				<div class="press__item">
 <a href="#" class="press__title">
					Расширение складских площадей в Подмосковье с продукцией компании «Универсалкабель» </a>
					<div class="press__date">
						сегодня, 12.30
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- /Последние новости -->
</div>
 <!-- Фото -->
<div class="b-light-section">
	<div class="container">
		<h2>Фотогалерея</h2>
		<div class="b-photos">
			<div class="photos__slider js-photos swiper">
				<div class="swiper-wrapper photos__wrapper js-photos-wrapper">
					<div class="swiper-slide photos__slide">
 <a href="/local/templates/furniture_gray/img/photo.png" data-fancybox="photo"> <img src="/local/templates/furniture_gray/img/photo.png" alt=""></a>
					</div>
					<div class="swiper-slide photos__slide">
 <a href="/local/templates/furniture_gray/img/photo.png" data-fancybox="photo"> <img src="/local/templates/furniture_gray/img/photo.png" alt=""></a>
					</div>
					<div class="swiper-slide photos__slide">
 <a href="/local/templates/furniture_gray/img/photo.png" data-fancybox="photo"> <img src="/local/templates/furniture_gray/img/photo.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="swiper-button-prev photos__prev js-photos-prev">
			</div>
			<div class="swiper-button-pagination photos__pagination js-photos-pagination">
			</div>
			<div class="swiper-button-next photos__next js-photos-next">
			</div>
		</div>
	</div>
</div>
 <!-- /Фото -->
<div class="container">
	 <!-- Контакты для СМИ -->
	<div class="b-contacts-line">
		 Контакты для СМИ:&nbsp; 
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/index_email.php"
	)
);?>
	</div>
	 <!-- /Контакты для СМИ -->
</div>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>