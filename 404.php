<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>
<main class="page__body">
        <div class="container container--noleft">
          <div class="b-error-page">
            <div class="error-page__left">
              <img
                class="hide-on-tablet hide-on-mobile"
                src="<?=SITE_TEMPLATE_PATH?>/img/404.png"
                alt=""
              />
              <img class="hide-on-desktop" src="<?=SITE_TEMPLATE_PATH?>/img/404-mobile.png" alt="" />
            </div>
            <div class="error-page__right">
              <div class="error-page__title">Страница не найдена</div>
              <a href="/" class="b-btn">На главную</a>
            </div>
          </div>
        </div>
      </main>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>