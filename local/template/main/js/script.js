$(document).ready(function () {
  function headerPadding() {
    let height = $(".b-header").height();
    $(".page").css("margin-top", height);
  }
  headerPadding();
  $(window).resize(function () {
    headerPadding();
  });

  // красивый select
  if ($(".js-select").length) {
    $(".js-select").select2({ minimumResultsForSearch: Infinity });
  }
  $(".js-select").on("select2:select", function (e) {
    $(".js-select").select2("open");
  });
  // /красивый select
  // плавный скролл к якорю
  $(".js-scroll").click(function () {
    $("html").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top - 130,
      },
      300
    );
    return false;
  });
  // плавный скролл к якорю
  // маска для инаупов
  if ($("[data-inputmask]").length) {
    $("input").inputmask();
  }
  // /маска для инпупов

  // shadows
  $(".js-table").each(function () {
    var wrapper = $(this);

    if ($(".js-table table").width() > $(".container").width()) {
      /* Erstellt die nötigen DIVs */
      var tableHtml = wrapper.html();
      wrapper.html(
        "<div class='table__shadow shadow-left'></div><div class='table__inner-wrapper'>" +
          tableHtml +
          "</div><div class='table__shadow shadow-right'></div>"
      );

      var innerWrapper = wrapper.children(".table__inner-wrapper");
      var shadowLeft = wrapper.children(".shadow-left");
      var shadowRight = wrapper.children(".shadow-right");
      var tableScrollLeft = getScrollPosition(innerWrapper, "left");
      var tableScrollRight = getScrollPosition(innerWrapper, "right");

      /* Setzt die initiale Transparenz der Schatten */
      setScrollOpacity(shadowLeft, tableScrollLeft);
      setScrollOpacity(shadowRight, tableScrollRight);

      /* Setzt die Transparenz wärend des Scrollens passend zur Position */
      innerWrapper.scroll(function () {
        var innerWrapper = $(this);
        var tableScrollLeft = getScrollPosition(innerWrapper, "left");
        var tableScrollRight = getScrollPosition(innerWrapper, "right");
        setScrollOpacity(shadowLeft, tableScrollLeft);
        setScrollOpacity(shadowRight, tableScrollRight);
      });

      /* Liefert den Scrollabstand zur übergebenen Seite des Tabellenrahmens */
      function getScrollPosition(innerWrapper, side) {
        switch (side) {
          case "left":
            return innerWrapper.scrollLeft();
          case "right":
            return (tableScrollRight =
              innerWrapper.children("table").width() -
              innerWrapper.width() -
              innerWrapper.scrollLeft());
          default:
            return false;
        }
      }

      /* Setzt die Transparenz der Schatten */
      function setScrollOpacity(shadowElem, scrollPosition) {
        var shadowElemWidth = shadowElem.width();
        /* Der Schatten wird nur sichtbar, wenn ein Scrollabstand zur jeweiligen Seite vorhanden ist */
        if (scrollPosition / shadowElemWidth <= 0) {
          shadowElem.css({ opacity: 0 });
        } else if (scrollPosition <= shadowElemWidth) {
          var opacity = scrollPosition / shadowElemWidth;
          shadowElem.css({ opacity: opacity });
        } else {
          if (shadowElem.css("opacity") != 1) {
            shadowElem.css({ opacity: 1 });
          }
        }
      }
    }
  });
  // shadows
  //  поиск
  $(".js-header-search-show").on("click", function (e) {
    e.preventDefault();
    $(".js-header-search-form").addClass("open");
    $(".js-header-search").addClass("open");
  });
  $(".js-header-search-close").on("click", function (e) {
    e.preventDefault();
    $(".js-header-search-form").removeClass("open");
    $(".js-header-search").removeClass("open");
    $(".js-header-search-result").hide();
  });
  $(".js-header-search-input").on("input", function (e) {
    e.preventDefault();
    $(".js-header-search-result").show();
  });
  // /поиск
  // адаптивное меню
  $(".js-adaptive-show").on("click", function (e) {
    e.preventDefault();
    $(".js-adaptive-inside").slideDown();
  });
  $(".js-adaptive-hide").on("click", function (e) {
    e.preventDefault();
    $(".js-adaptive-inside").slideUp();
  });
  // /адаптивное меню
  // меню в футере
  $(".js-footer-title").on("click", function (e) {
    e.preventDefault();
    if ($(window).width() < 750) {
      if (!$(this).hasClass("open")) {
        $(".js-footer-title.open")
          .parents(".js-footer-menu")
          .find(".js-footer-ul")
          .slideUp();
        $(".js-footer-title.open")
          .parents(".js-footer-menu")
          .find(".js-footer-ul")
          .removeClass("open");
      }
      $(this).toggleClass("open");
      $(this).parents(".js-footer-menu").find(".js-footer-ul").slideToggle();
    }
  });
  // /меню в футере
  // слайдер на главной
  if ($(".js-main-banner").length) {
    var swiper = new Swiper(".js-main-banner", {
      effect: "fade",
      navigation: {
        nextEl: ".js-main-banner-next",
        prevEl: ".js-main-banner-prev",
      },
      pagination: {
        el: ".js-main-banner-pagination",
        // dynamicBullets: true,
      },
    });
  }
  // /слайдер на главной
  // О компании
  if ($(".js-about-slider").length) {
    var swiper = new Swiper(".js-about-slider", {
      // effect: "fade",
      navigation: {
        nextEl: ".js-about-next",
        prevEl: ".js-about-prev",
      },
      pagination: {
        el: ".js-about-pagination",
      },
    });
  }
  // /О компании
  // слайдер на детальной
  if ($(".js-detail-slider").length) {
    var swiper = new Swiper(".js-detail-slider", {
      // effect: "fade",
      navigation: {
        nextEl: ".js-detail-slider-next",
        prevEl: ".js-detail-slider-prev",
      },
      pagination: {
        el: ".js-detail-slider-pagination",
      },
    });
  }
  // слайдер на детальной
  // Подгруппы продукции
  $(".js-subgroups-top").on("click", function (e) {
    e.preventDefault();
    if (!$(this).hasClass("open")) {
      $(".js-subgroups-top.open")
        .parents(".js-subgroups-item")
        .find(".js-subgroups-content")
        .slideUp();
      $(".js-subgroups-top.open").removeClass("open");
    }
    $(this).toggleClass("open");
    $(this)
      .parents(".js-subgroups-item")
      .find(".js-subgroups-content")
      .slideToggle();
  });

  if ($(window).width() < 750) {
    if ($(".js-subgroups-content").length > 3) {
      $(".js-subgroups-content .js-show-more").hide();
    }
    $(".js-subgroups-content .b-product:nth-child(n + 3)").hide();

    $(".js-show-more").on("click", function (e) {
      e.preventDefault();
      $(this).hide();
      $(this).parents(".js-subgroups-content ").find(".js-hide-more").show();
      $(this)
        .parents(".js-subgroups-content ")
        .find(".b-product:nth-child(n + 3)")
        .show();
    });

    $(".js-hide-more").on("click", function (e) {
      e.preventDefault();
      $(this).hide();

      $(this).parents(".js-subgroups-content ").find(".js-show-more").show();
      $(this)
        .parents(".js-subgroups-content ")
        .find(".b-product:nth-child(n + 3)")
        .hide();

      let showBtn = $(this)
        .parents(".js-subgroups-content ")
        .find(".js-show-more");

      $("html").animate(
        {
          scrollTop: showBtn.offset().top,
        },
        50
      );
    });
  }
  // /Подгруппы продукции
  // Читать полностью
  $(".js-show-more").on("click", function (e) {
    e.preventDefault();
    console.log("show-");
    $(this)
      .parents(".js-show-more-block")
      .find(".js-show-more-txt")
      .addClass("open")
      .css("max-height", "none");
    $(this).parents(".js-show-more-block").find(".js-hide-more-txt").show();
    $(this).hide();
  });

  $(".js-hide-more-txt").on("click", function (e) {
    e.preventDefault();

    $(this)
      .parents(".js-show-more-block")
      .find(".js-show-more-txt")
      .removeClass("open")
      .css("max-height", "200px");
    $(this).parents(".js-show-more-block").find(".js-show-more").show();
    $(this).hide();
  });
  // /Читать полностью
  // Характеристики
  var swiper = new Swiper(".js-tabs-slider", {
    slidesPerView: "auto",
    navigation: {
      nextEl: ".js-tabs-next",
      prevEl: ".js-tabs-prev",
    },
  });
  $(".js-characteristic-link").on("click", function (e) {
    e.preventDefault();
    let href = $(this).attr("href");
    $(".js-characteristic-link.active").removeClass("active");
    $(this).addClass("active");
    $(".characteristic__content.active").removeClass("active").hide();
    $(href).fadeIn().addClass("active");
  });
  // /Характеристики
  // Фото
  if ($(".js-photos").length) {
    var swiper = new Swiper(".js-photos", {
      slidesPerView: 2,
      spaceBetween: 30,
      navigation: {
        nextEl: ".js-photos-next",
        prevEl: ".js-photos-prev",
      },
      pagination: {
        el: ".js-photos-pagination",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        630: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1200: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
      },
    });
  }
  // /Фото

  // слайдер сертификатов
  if ($(".js-sertificates-swiper").length) {
    var swiper = new Swiper(".js-sertificates-swiper", {
      slidesPerView: "auto",
      noSwiping: true,
      noSwipingClass: "sertificates__images",
      navigation: {
        nextEl: ".js-sertificates-next",
        prevEl: ".js-sertificates-prev",
      },
      pagination: {
        el: ".js-sertificates-pagination",
      },
    });
  }

  if ($(".js-sertificates-images").length) {
    var swiper = new Swiper(".js-sertificates-images", {
      slidesPerView: "auto",
    });
  }
  // /слайдер сертификатов

  // shadows
  $(".js-vertical-shadow").each(function () {
    if ($(window).width() < 1250) {
      var wrapper = $(this);

      /* Erstellt die nötigen DIVs */
      var tableHtml = wrapper.html();
      wrapper.html(
        "<div class='table__shadow shadow-top'></div>" +
          tableHtml +
          "</div><div class='table__shadow shadow-bottom'></div>"
      );

      var innerWrapper = wrapper.children(".table__inner-wrapper");
      var shadowTop = wrapper.children(".shadow-top");
      var shadowBottom = wrapper.children(".shadow-bottom");
      var tableScrollTop = getScrollPosition(innerWrapper, "top");
      var tableScrollBottom = getScrollPosition(innerWrapper, "bottom");

      /* Setzt die initiale Transparenz der Schatten */
      setScrollOpacity(shadowTop, tableScrollTop);
      setScrollOpacity(shadowBottom, tableScrollBottom);

      /* Setzt die Transparenz wärend des Scrollens passend zur Position */
      wrapper.scroll(function () {
        var innerWrapper = $(this);
        var tableScrollTop = getScrollPosition(innerWrapper, "top");
        var tableScrollBottom = getScrollPosition(innerWrapper, "bottom");
        setScrollOpacity(shadowTop, tableScrollTop);
        setScrollOpacity(shadowBottom, tableScrollBottom);
      });

      /* Liefert den Scrollabstand zur übergebenen Seite des Tabellenrahmens */
      function getScrollPosition(innerWrapper, side) {
        switch (side) {
          case "top":
            return innerWrapper.scrollTop();
          case "bottom":
            return (tableScrollBottom =
              innerWrapper.height() - innerWrapper.scrollTop());

          default:
            return false;
        }
      }

      /* Setzt die Transparenz der Schatten */
      function setScrollOpacity(shadowElem, scrollPosition) {
        var shadowElemHeight = shadowElem.height();

        /* Der Schatten wird nur sichtbar, wenn ein Scrollabstand zur jeweiligen Seite vorhanden ist */
        if (scrollPosition / shadowElemHeight <= 0) {
          shadowElem.css({ opacity: 0 });
        } else if (scrollPosition <= shadowElemHeight) {
          var opacity = scrollPosition / shadowElemHeight;
          shadowElem.css({ opacity: opacity });
        } else {
          if (shadowElem.css("opacity") != 1) {
            shadowElem.css({ opacity: 1 });
          }
        }
      }
    }
  });
  // shadows

  // Доставка
  $(".js-delivery-show").on("click", function (e) {
    e.preventDefault();
    const position =
      $(".js-delivery").offset().top +
      $(".js-delivery").height() -
      $(".b-header").height() -
      50;
    $(this).hide();
    let height = $(".js-delivery-ul").height() + 20 + "px";
    $(".js-delivery").css("max-height", height);
    $(".js-delivery").addClass("active");
    $(".js-delivery-hide").show();

    $("html").animate(
      {
        scrollTop: position,
      },
      500
    );
  });
  $(".js-delivery-hide").on("click", function (e) {
    e.preventDefault();
    $(this).hide();
    $(".js-delivery").removeAttr("style");
    $(".js-delivery").removeClass("active");
    $(".js-delivery-show").show();
  });
  // /Доставка
  // слайдер людей
  (function () {
    const breakpoint = window.matchMedia("(max-width:750px)");

    let mySwiper1;
    let mySwiper2;

    const breakpointChecker = function () {
      if (breakpoint.matches === true) {
        if (mySwiper1 !== undefined) mySwiper1.destroy(true, true);
        if (mySwiper2 !== undefined) mySwiper2.destroy(true, true);
        return;
      } else if (breakpoint.matches === false) {
        return enableSwiper();
      }
    };
    const enableSwiper = function () {
      mySwiper1 = new Swiper(".js-people-1", {
        slidesPerView: "auto",

        pagination: { el: ".js-people-1-pagination" },
        paginationClickable: true,
        navigation: {
          nextEl: ".js-people-1-next",
          prevEl: ".js-people-1-prev",
        },
      });

      mySwiper2 = new Swiper(".js-people-2", {
        slidesPerView: "auto",

        pagination: { el: ".js-people-2-pagination" },
        paginationClickable: true,
        navigation: {
          nextEl: ".js-people-2-next",
          prevEl: ".js-people-2-prev",
        },
      });
    };
    breakpointChecker();
  })();

  if ($(window).width() < 750) {
    if ($(".js-people .people__wrapper").length > 2) {
      $(".js-people-show").hide();
    }
    $(".js-people .people__slide:nth-child(n + 3)").hide();

    $(".js-people-show").on("click", function (e) {
      e.preventDefault();
      $(this).hide();
      $(this)
        .parents(".js-people ")
        .find(".people__slide:nth-child(n + 3)")
        .show();
      $(this)
        .parents(".js-people ")
        .find(".js-people-hide")
        .css("display", "block");
    });

    $(".js-people-hide").on("click", function (e) {
      e.preventDefault();
      $(this).hide();

      $(this).parents(".js-people ").find(".js-people-show").show();
      $(this)
        .parents(".js-people")
        .find(".people__slide:nth-child(n + 3)")
        .hide();

      let showBtn = $(this)
        .parents(".js-people ")
        .find(".people__slide:nth-child(2)");

      $("html").animate(
        {
          scrollTop: showBtn.offset().top,
        },
        50
      );
    });
  }
  // /слайдер людей

  $(".popup__btn").on("cilck", function (e) {
    e.preventDefault;
    console.log(1);
  });

  //  drag and drop
  var $fileInput = $(".js-files");
  var $droparea = $(".js-drop");
  $fileInput.on("dragenter focus click", function () {
    $droparea.addClass("is-active");
  });
  $fileInput.on("dragleave blur drop", function () {
    $droparea.removeClass("is-active");
  });
  $fileInput.on("change", function () {
    console.log($(this)[0].files);

    var $textContainer = $(".js-files-text");

    if ($(this)[0].files.length == 0) {
      $textContainer.removeClass("active");
    } else {
      $textContainer.addClass("active");
    }
    var $filesNames = "";
    for (const [key, file] of Object.entries($(this)[0].files)) {
      const decimals = 2;
      const k = 1024;
      const dm = decimals < 0 ? 0 : decimals;
      const sizes = ["Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"];

      const i = Math.floor(Math.log(file.size) / Math.log(k));

      let size = `${parseFloat((file.size / Math.pow(k, i)).toFixed(dm))} ${
        sizes[i]
      }`;

      $filesNames =
        $filesNames +
        '<span class="drag-drop__item js-drag-drop__item "><span class="drag-drop__file-name js-drag-drop-file-name ">' +
        file.name +
        ",</span> " +
        "<span class='drag-drop__file-size '>" +
        size +
        "</span>&nbsp;<a href='javascript: return false;' class='drag-drop__cross js-drag-drop-cross'>x</a></span>";
    }
    $textContainer.html($filesNames);
  });

  $("body").on("click", ".js-drag-drop-cross", function () {
    var $name = $(this)
      .parents(".js-drag-drop__item")
      .find(".js-drag-drop-file-name")
      .text();
    var $files = $(this).parents(".js-drag-area").find(".js-files")[0].files;
    var fileInput = $(this).parents(".js-drag-area").find(".js-files")[0];
    const dataTransfer = new DataTransfer();
    for (const [key, file] of Object.entries($files)) {
      if ($name != file.name) {
        dataTransfer.items.add(file);
        fileInput.files = dataTransfer.files;
      }
    }
    $(this).parent().remove();
  });
  //  /drag and drop
});
