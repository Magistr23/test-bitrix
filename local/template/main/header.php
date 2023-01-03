<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?$APPLICATION->ShowTitle()?></title>
    <link
      rel="shortcut icon"
      href="<?=SITE_TEMPLATE_PATH?>/img/icons/favicon.png"
      type="image/x-icon"
    />
	<?$APPLICATION->ShowHead();?>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/select2/select2.min.css"); ?>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/swiper/swiper.min.css"); ?>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/fancybox/jquery.fancybox.min.css"); ?>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/jquery-ui.min.css"); ?>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/jquery-3.6.0.min.js"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/inputmask/jquery.inputmask.min.js"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/jquery-ui.min.js"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/jquery.ui.touch-punch.min.js"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/swiper/swiper.min.js"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/select2/select2.min.js"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/fancybox/jquery.fancybox.min.js"); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/libs/validate/jquery.validate.min.js"); ?>
	<script
      src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"
      type="text/javascript"
    ></script>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/script.js"); ?>
  </head>
  <body class="body">
    <div class="page p-main">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
      <!-- шапка -->
      <header class="page__header">
        <div class="b-header">
          <div class="container">
            <div class="header__inside">
              <div class="header__left">
                <div class="header__logo">
                <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/index_inc.php"
	)
);?>
                </div>
                <div class="header__city">
                  <!-- выбор города -->
                  <div class="b-city">
                    <div class="city-active">
                      <svg
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.7527 0.232588C15.5349 -0.0133049 16.2643 0.734867 15.9986 1.51056L11.3468 15.0936C11.028 16.0244 9.69786 15.9837 9.4366 15.0351L7.69333 8.70581C7.59612 8.35287 7.31382 8.08126 6.9574 7.99773L0.826043 6.56081C-0.164315 6.32872 -0.216054 4.93827 0.754317 4.63322L14.7527 0.232588Z"
                          fill="#AFB1B6"
                        />
                      </svg>
                      <span>Москва</span>
                    </div>
                  </div>
                  <!-- /выбор города -->
                </div>
              </div>
              <div class="header__menu">
                <!-- меню -->
                <?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"header_menu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "top",
							"COMPONENT_TEMPLATE" => "header_menu",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "Y"
						)
					);?>
                <!-- /меню -->
              </div>
              <div class="header__search">
                <!-- поиск -->
                <div class="b-header-search js-header-search">
                  <div class="header-search__icon js-header-search-show">
                    <svg
                      width="17"
                      height="17"
                      viewBox="0 0 17 17"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="7.58822"
                        cy="7.58822"
                        r="6.58822"
                        stroke="url(#paint0_linear_1_672)"
                        stroke-width="2"
                      />
                      <path
                        d="M13 13L16 16"
                        stroke="url(#paint1_linear_1_672)"
                        stroke-width="2"
                        stroke-linecap="round"
                      />
                      <defs>
                        <linearGradient
                          id="paint0_linear_1_672"
                          x1="7.58822"
                          y1="1"
                          x2="7.58822"
                          y2="14.1764"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#F59A65" />
                          <stop offset="1" stop-color="#FDCD81" />
                        </linearGradient>
                        <linearGradient
                          id="paint1_linear_1_672"
                          x1="14.5"
                          y1="13"
                          x2="14.5"
                          y2="16"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#F59A65" />
                          <stop offset="1" stop-color="#FDCD81" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>

                  <div class="header-search__show js-header-search-show"></div>
                  <form
                    action=""
                    class="header-search__form js-header-search-form"
                  >
                    <input
                      type="text"
                      class="header-search__input js-header-search-input"
                      placeholder="Поиск по названию или артикулу"
                    />
                    <div class="header-search__close js-header-search-close">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          x="1.51465"
                          y="0.100586"
                          width="26"
                          height="2"
                          transform="rotate(45 1.51465 0.100586)"
                          fill="url(#paint0_linear_127_8468)"
                        />
                        <rect
                          x="0.100586"
                          y="18.4854"
                          width="26"
                          height="2"
                          transform="rotate(-45 0.100586 18.4854)"
                          fill="url(#paint1_linear_127_8468)"
                        />
                        <defs>
                          <linearGradient
                            id="paint0_linear_127_8468"
                            x1="14.5146"
                            y1="0.100586"
                            x2="14.5146"
                            y2="2.10059"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop stop-color="#F59A65" />
                            <stop offset="1" stop-color="#FDCD81" />
                          </linearGradient>
                          <linearGradient
                            id="paint1_linear_127_8468"
                            x1="13.1006"
                            y1="18.4854"
                            x2="13.1006"
                            y2="20.4854"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop stop-color="#F59A65" />
                            <stop offset="1" stop-color="#FDCD81" />
                          </linearGradient>
                        </defs>
                      </svg>
                    </div>
                  </form>
                  <div class="header-search__result js-header-search-result">
                    <div class="header-search__links">
                      <a href="#" class="header-search__link"
                        >Кабель бронированнный МККШВвнг(А)-FRLS</a
                      >
                      <a href="#" class="header-search__link"
                        >Кабель бронированнный МККШВвнг(А)-FRLS</a
                      >
                      <a href="#" class="header-search__link"
                        >Кабель бронированнный МККШВвнг(А)-FRLS</a
                      >
                      <a href="#" class="header-search__link"
                        >Кабель бронированнный МККШВвнг(А)-FRLS</a
                      >
                    </div>
                  </div>
                </div>
                <!-- /поиск -->
              </div>
              <div class="header__contacts">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "COMPONENT_TEMPLATE" => ".default",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/index_phone.php"
                )
              );?>
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

              <div class="header__adaptive">
                <!-- адаптивное меню -->
                <div class="b-adaptive-menu js-adaptive-menu">
                  <div class="adaptive-menu__show js-adaptive-show">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                  <div class="adaptive-menu__inside js-adaptive-inside">
                    <div class="container">
                      <div class="adaptive-menu__hide js-adaptive-hide">
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /адаптивное меню -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
	  <? if ($APPLICATION->GetCurPage() != "/") : ?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"bread",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
		<? endif; ?>
</div>
	  	<? if ($APPLICATION->GetCurPage() != "/") : ?>
            <header>
            <div class="container">
              <h1><?= $APPLICATION->ShowTitle(true); ?></h1>
      </div>
            </header>
			<?else:?>
				<main class="page__body p-main">
        <div class="container">
          <!-- слайдер на главной -->
          <div class="swiper js-main-banner b-main-banner">
            <div class="swiper-wrapper main-banner__wrapper">
              <div class="swiper-slide main-banner__slide">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/main.png"
                  alt=""
                  class="main-banner__img hide-on-mobile"
                />
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/main-mobile.png"
                  alt=""
                  class="main-banner__img hide-on-tablet hide-on-desktop show-on-mobile"
                />
                <div class="main-banner__content">
                  <div class="main-banner__title">
                    Кабель с изоляцией из полиуретана
                  </div>
                  <div class="main-banner__text">
                    <img
                      src="<?=SITE_TEMPLATE_PATH?>/img/icons/slide-icon.png"
                      alt=""
                      class="main-banner__icon"
                    />

                    <span>
                      Превосходная износостойкость гибкого кабеля
                      из&nbsp;полиуретана</span
                    >
                  </div>
                  <a href="#" class="main-banner__btn">Подробнее</a>
                </div>
              </div>
              <div class="swiper-slide main-banner__slide">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/main.png"
                  alt=""
                  class="main-banner__img hide-on-mobile"
                />
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/main-mobile.png"
                  alt=""
                  class="main-banner__img hide-on-tablet hide-on-desktop show-on-mobile"
                />
              </div>
              <div class="swiper-slide main-banner__slide">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/main.png"
                  alt=""
                  class="main-banner__img hide-on-mobile"
                />
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/main-mobile.png"
                  alt=""
                  class="main-banner__img hide-on-tablet hide-on-desktop show-on-mobile"
                />
              </div>
            </div>
            <div
              class="swiper-pagination js-main-banner-pagination main-banner__pagination"
            ></div>

            <div
              class="swiper-button-prev js-main-banner-prev main-banner__prev"
            ></div>
            <div
              class="swiper-button-next js-main-banner-next main-banner__next"
            ></div>
          </div>
          <!-- /слайдер на главной -->
          <!-- Продукция -->
          <h2>Продукция</h2>
          <div class="b-category">
            <div class="category__item">
              <div class="category__img">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/category-1.png"
                  alt=""
                  class="category__image"
                />
              </div>
              <div class="category__content">
                <a href="#" class="category__title">Монтажный кабель</a>
                <div class="category__links">
                  <a href="#" class="category__link">МККШВнг(А)</a>
                  <a href="#" class="category__link">МККШВнг(А)-LS</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS</a>
                  <a href="#" class="category__link">МККШВнг(А)-HF</a>
                  <a href="#" class="category__link">МККШВнг(А)-HF</a>
                  <a href="#" class="category__link">МККШВнг(А)-HF</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS</a>

                  <a href="#" class="category__link category__link--more"
                    >Еще 35...</a
                  >
                </div>
              </div>
            </div>

            <div class="category__item">
              <div class="category__img">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/category-1.png"
                  alt=""
                  class="category__image"
                />
              </div>
              <div class="category__content">
                <a href="#" class="category__title">Монтажный кабель</a>
                <div class="category__links">
                  <a href="#" class="category__link">МККШВнг(А)</a>
                  <a href="#" class="category__link">МККШВнг(А)-LS</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS</a>
                  <a href="#" class="category__link">МККШВнг(А)-HF</a>
                  <a href="#" class="category__link">МККШВнг(А)-HF</a>
                  <a href="#" class="category__link">МККШВнг(А)-HF</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS</a>

                  <a href="#" class="category__link category__link--more"
                    >Еще 35...</a
                  >
                </div>
              </div>
            </div>

            <div class="category__item">
              <div class="category__img">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/category-5.png"
                  alt=""
                  class="category__image"
                />
              </div>
              <div class="category__content">
                <a href="#" class="category__title">Силовой кабель</a>
                <div class="category__links">
                  <a href="#" class="category__link">МККШВнг(А)</a>
                  <a href="#" class="category__link">МККШВнг(А)-LS</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS</a>
                  <a href="#" class="category__link">МККШВнг(А)-HF</a>

                  <a href="#" class="category__link category__link--more"
                    >Еще 35...</a
                  >
                </div>
              </div>
            </div>

            <div class="category__item">
              <div class="category__img">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/category-2.png"
                  alt=""
                  class="category__image"
                />
              </div>
              <div class="category__content">
                <a href="#" class="category__title">Провод и шнуры</a>
                <div class="category__links">
                  <a href="#" class="category__link">МККШВнг(А)</a>
                  <a href="#" class="category__link">МККШВнг(А)-LS</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS </a>

                  <a href="#" class="category__link category__link--more"
                    >Еще 35...</a
                  >
                </div>
              </div>
            </div>

            <div class="category__item">
              <div class="category__img">
                <img
                  src="<?=SITE_TEMPLATE_PATH?>/img/category-3.png"
                  alt=""
                  class="category__image"
                />
              </div>
              <div class="category__content">
                <a href="#" class="category__title">Провода установочные</a>
                <div class="category__links">
                  <a href="#" class="category__link">МККШВнг(А)</a>
                  <a href="#" class="category__link">МККШВнг(А)-LS</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS</a>
                  <a href="#" class="category__link">МККШВвнг(А)-FRLS </a>

                  <a href="#" class="category__link category__link--more"
                    >Еще 35...</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- /Продукция -->
        </div>
        <!-- Наши преимущества -->
        <div class="b-dark-section">
          <div class="container">
            <h2>Наши преимущества</h2>
            <div class="b-benefits">
              <div class="benefits__item">
                <div class="benefits__titleblock">
                  <div class="benefits__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/benefit-1.svg" alt="" />
                  </div>
                  <div class="benefits__title">2000 м <sup>2</sup> склад</div>
                </div>
                <div class="benefits__txt">
                  15 000 единиц кабелей ежедневно в наличии
                </div>
              </div>
              <div class="benefits__item">
                <div class="benefits__titleblock">
                  <div class="benefits__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/benefit-2.svg" alt="" />
                  </div>
                  <div class="benefits__title">Доставка по&nbsp;РФ</div>
                </div>
                <div class="benefits__txt">
                  Доставка по Москве и области и регионам РФ
                </div>
              </div>
              <div class="benefits__item">
                <div class="benefits__titleblock">
                  <div class="benefits__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/benefit-3.png" alt="" />
                  </div>
                  <div class="benefits__title">Высокое качество</div>
                </div>
                <div class="benefits__txt">
                  Гарантируем высокое качество продукции
                </div>
              </div>
              <div class="benefits__item">
                <div class="benefits__titleblock">
                  <div class="benefits__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/benefit-4.svg" alt="" />
                  </div>
                  <div class="benefits__title">Сроки изготовления</div>
                </div>
                <div class="benefits__txt">
                  Выполним ваш заказ качественно и в срок
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Наши преимущества -->
        <div class="container">
          <!-- Партнерам -->
          <h2>Партнерам</h2>
          <div class="b-parnters">
            <div class="parnters__item parnters__item--delivery">
              <a href="#" class="parnters__title">Доставка <br />и самовывоз</a>
              <a href="#" class="parnters__btn b-btn">Подробнее</a>
            </div>

            <div class="parnters__item parnters__item--licenses">
              <a href="#" class="parnters__title"
                >Сертификаты <br />и лицензии</a
              >
              <a href="#" class="parnters__btn b-btn">Подробнее</a>
            </div>
          </div>
          <!-- /Партнерам -->
        </div>
        <div class="b-gray-section">
          <div class="container">
            <!-- О компании -->
            <div class="b-about">
              <div class="about__left">
                <h2 class="about__h2">О компании</h2>
                <div class="about__info">
                  <p>
                    Кабельный завод «Универсалкабель» был образован в 2019 году
                    инженерами — специалистами в области разработки и
                    производства специальных кабелей.
                  </p>
                  <p>
                    На сегодняшний день компания располагает собственным
                    специализированным производством, научно-технической и
                    испытательной базой.
                  </p>
                </div>
                <div class="about__directions">
                  <div class="about__title">
                    Основные направления деятельности:
                  </div>
                  <div class="about__direction">
                    Производство кабельно-проводниковой продукции
                  </div>
                  <div class="about__direction">
                    Разработка новых видов кабелей
                  </div>
                  <div class="about__direction">
                    В собственной сертифицированной лаборатории
                  </div>
                </div>
                <a href="#" class="about__btn b-btn">Подробнее</a>
              </div>
              <div class="about__middle">
                <div class="swiper about__slider js-about-slider">
                  <div class="swiper-wrapper about__wrapper">
                    <div class="swiper-slide about__slide">
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/about.png" alt="" />
                    </div>
                    <div class="swiper-slide about__slide">
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/about.png" alt="" />
                    </div>
                  </div>

                  <div
                    class="swiper-button-prev about__prev js-about-prev"
                  ></div>
                  <div
                    class="swiper-pagination about__pagination js-about-pagination"
                  ></div>
                  <div
                    class="swiper-button-next about__next js-about-next"
                  ></div>
                </div>
              </div>
              <div class="about__rigth">
                <div class="about__counts">
                  <div class="about__count">
                    <div class="about__num">10 000</div>
                    <div class="about__txt">Километров кабеля изготовлено</div>
                  </div>
                  <div class="about__count">
                    <div class="about__num">560</div>
                    <div class="about__txt">Марок разнообразных кабелей</div>
                  </div>
                  <div class="about__count">
                    <div class="about__num">20+</div>
                    <div class="about__txt">Производим продукцию</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /О компании -->
          </div>
        </div>
        <!-- Пресс–центр -->
        <div class="container">
          <h2>Пресс–центр</h2>
          <div class="b-press">
            <div class="press__left">
              <div class="press__big">
                <img class="press__img" src="<?=SITE_TEMPLATE_PATH?>/img/press.png" alt="" />

                <div class="press__content">
                  <div class="press__date">10 сентября</div>
                  <div class="press__title">
                    Компания «Универсалкабель» начала производить бронированный
                    силовой кабель
                  </div>
                </div>
                <a href="#" class="press__link">&nbsp;</a>
              </div>
            </div>
            <div class="press__right">
              <div class="press__name">Последние новости</div>
              <div class="press__items">
                <div class="press__item">
                  <a href="#" class="press__title">
                    Расширение складских площадей в Подмосковье с продукцией
                    компании «Универсалкабель»
                  </a>
                  <div class="press__date">сегодня, 12.30</div>
                </div>
                <div class="press__item">
                  <a href="#" class="press__title">
                    Расширение складских площадей в Подмосковье с продукцией
                    компании «Универсалкабель»
                  </a>
                  <div class="press__date">сегодня, 12.30</div>
                </div>
                <div class="press__item">
                  <a href="#" class="press__title">
                    Расширение складских площадей в Подмосковье с продукцией
                    компании «Универсалкабель»
                  </a>
                  <div class="press__date">сегодня, 12.30</div>
                </div>
              </div>
              <a class="press__btn b-btn" href="#">Смотреть все</a>
            </div>
          </div>
        </div>
        <!-- /Пресс–центр -->
      </main>
		<?endif;?>
