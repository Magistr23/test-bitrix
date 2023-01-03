<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>



	<footer class="page__footer">
        <div class="b-footer">
          <div class="container">
            <div class="footer__logo">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/logo.svg" alt="" />
            </div>
            <div class="footer__content">
              <div class="footer__contacts">
                <div class="footer__item">
                  <div class="footer__name">Адрес</div>
                  <div class="footer__value">
                    <?$APPLICATION->IncludeComponent(
	                   "bitrix:main.include",
	                   ".default",
	                   Array(
		                    "AREA_FILE_SHOW" => "file",
		                    "AREA_FILE_SUFFIX" => "inc",
		                    "COMPONENT_TEMPLATE" => ".default",
		                    "EDIT_TEMPLATE" => "",
		                    "PATH" => "/index_adres.php"
	                  )
                     );?>
                  </div>
                </div>
                <div class="footer__item">
                  <div class="footer__name">
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
                  </div>
                  <div class="footer__value">Бесплатный номер</div>
                </div>
                <div class="footer__item">
                  <div class="footer__name">9:00 – 18:00</div>
                  <div class="footer__value">Часы работы</div>
                </div>
                <div class="footer__item">
                  <div class="footer__name">
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
                  <div class="footer__value">E-mail</div>
                </div>
              </div>

              <div class="footer__menus">
                <div class="footer__menu js-footer-menu">
                  <div class="footer__title js-footer-title">Информация</div>
                  <ul class="footer__ul js-footer-ul">
                    <li class="footer__li">
                      <a class="footer__link" href="#">Пресс – центр</a>
                    </li>
                    <li class="footer__li">
                      <a class="footer__link" href="#">Партнерам</a>
                    </li>
                    <li class="footer__li">
                      <a class="footer__link" href="#">О компании</a>
                    </li>
                  </ul>
                </div>
                <div class="footer__menu js-footer-menu">
                  <div class="footer__title js-footer-title">Продукция</div>
                  <ul class="footer__ul js-footer-ul">
                    <li class="footer__li">
                      <a class="footer__link" href="#">Монтажный кабель</a>
                    </li>
                    <li class="footer__li">
                      <a class="footer__link" href="#">Контрольный кабель</a>
                    </li>
                    <li class="footer__li">
                      <a class="footer__link" href="#">Силовой кабель</a>
                    </li>
                    <li class="footer__li">
                      <a class="footer__link" href="#">Провод и шнуры</a>
                    </li>
                    <li class="footer__li">
                      <a class="footer__link" href="#">Провода установочные</a>
                    </li>
                  </ul>
                </div>
                <div class="footer__menu js-footer-menu">
                  <div class="footer__title js-footer-title">Документы</div>
                  <ul class="footer__ul js-footer-ul">
                    <li class="footer__li">
                      <a class="footer__link" href="#"
                        >Лицензии и сертификаты</a
                      >
                    </li>
                    <li class="footer__li">
                      <a class="footer__link" href="#"
                        >Товары в наличии на складе (от 20.09.2022)
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="footer__button">
                <a class="footer__btn" href="#callback" data-fancybox
                  >Связаться с нами</a
                >
              </div>
            </div>

            <div class="footer__bottom">
              <div class="footer__copy">© «Универсалкабель» 2022</div>
              <a href="#" class="footer__policy">Политика конфиденциальности</a>
            </div>
          </div>
        </div>
        <!-- popup-ы -->
        <div class="b-popup" id="callback">
          <div class="popup__inner">
            <div class="popup__title">Укажите ваши данные</div>
            <div class="popup__subtitle">
              Мы свяжемся с Вами в ближайшее время
            </div>
            <form class="popup__form">
              <div class="popup__flex">
                <div class="popup__left">
                  <input
                    type="text"
                    class="popup__input"
                    placeholder="Как вас зовут?"
                  />
                  <input
                    type="text"
                    class="popup__input"
                    placeholder="+7"
                    data-inputmask="'mask':'+7 (999)-999-99-99'"
                  />
                  <input
                    type="text"
                    class="popup__input"
                    placeholder="Укажите вашу эл. почту"
                  />
                </div>
                <div class="popup__right">
                  <textarea
                    class="popup__textarea"
                    name=""
                    id=""
                    cols="10"
                    rows="10"
                    placeholder="Комментарий"
                  ></textarea>
                </div>
              </div>
              <div class="popup__block">
                <div class="popup__name">Добавить файлы</div>
                <div class="popup__drag">
                  <div class="b-drag-drop js-drag-area">
                    <div class="drag-drop__container js-drop">
                      <span class="drag-drop__btn">+</span>
                      <span class="drag-drop__txt"
                        >Прикрепите файлы (документы и/или изображения)</span
                      >
                      <input
                        class="drag-drop__input js-files"
                        type="file"
                        multiple
                      />
                    </div>
                    <div class="js-files-text drag-drop__text"></div>
                  </div>
                </div>
              </div>
              <div class="popup__agree">
                <input
                  type="checkbox"
                  class="popup__checkbox"
                  id="popup-check"
                />
                <label for="popup-check" class="popup__check-label"
                  >Нажимая на кнопку “Отправить”, вы соглашаетесь с Политикой
                  обработки персональных данных</label
                >
              </div>
              <button class="popup__btn b-btn">Отправить</button>
            </form>
          </div>
        </div>
        <!-- /popup-ы -->
      </footer>
      <!-- подвал -->
    </div>
  </body>
</html>