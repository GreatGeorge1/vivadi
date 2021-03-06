<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Vivadi</title>
    <meta charset="utf-8">
    <meta content="Yehor Illarionov" name="author">
    <meta content="Floor catalog" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!-- build:css css/vendor.css-->
    <link rel="stylesheet" href="libs/mdi/css/materialdesignicons.min.css">
    <!-- endbuild-->
    <!-- build:css css/main.css-->
    <link rel="stylesheet" href="../template/css/main.css">
    <link rel="stylesheet" href="../template/css/contacts.css">
    <!-- endbuild-->
  </head>
  <body class="page">
    <div class="page__wrap">
      <div class="bg">
        <div class="head-line">
          <div class="head-line__container">
            <div class="head-line-item"><img src="../template/img/logo/logo.png" alt="Logo" height="50px" title=""/>
            </div>
            <div class="head-line-item"><b class="FORM search" action="">
                <input id="submit" value="" type="submit"/>
                <label class="submit" for="submit"></label><a class="icon" href="javascript: void(0)"></a>
                <input type="search" name="Search" id="search" placeholder="Поиск"/></b>
            </div>
          </div>
        </div>
        <div class="header-fix"></div>
        <header class="header">
          <div class="header__container">
            <div class="header__nav">
              <nav class="header-nav">
                <div class="header-nav__item"><a class="header-nav__link" href="/">Главная</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link" href="/category">Товары</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link" href="/about">О компании</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link" href="/news">Новости</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link header-nav__link--active" href="/contacts">Контакты</a>
                </div>
              </nav>
            </div>
          </div>
        </header>
        <div class="contacts">
          <section class="section_light">
            <div class="section_light__container">
              <div class="section_light__name">
                <p class="namefont">Контактные данные</p>
              </div>
              <div class="section_light__container2">
                <p class="section_light__text">
                   Город<br>Адрес<br>Телефон<br>Телефон<br>Почта<br>Почта
                </p>
                <div class="map" id="map">
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="clr"></div>
        <footer class="footer">
          <div class="footer__container">
            <div class="footer-map">
              <p class="footer__title">Карта сайта</p><br/><a class="footer-map__item" href="#">link item</a><br/><a class="footer-map__item" href="#">link item</a><br/><a class="footer-map__item" href="#">link item</a><br/><a class="footer-map__item" href="#">link item</a><br/><a class="footer-map__item" href="#">link item</a>
            </div>
            <div class="footer-contacts">
              <p class="footer__title">Контактные данные</p><br/><span class="footer-contacts__item">контакт1</span><br/><span class="footer-contacts__item">контакт2</span><br/><span class="footer-contacts__item">контакт3</span>
            </div>
            <div class="footer-adds">
              <p class="footer__title">Дополнительно</p><br/><a class="footer-adds__item" href="#">link item</a><br/><a class="footer-adds__item" href="#">link item</a><br/><a class="footer-adds__item" href="#">link item</a>
            </div><img class="footer__logo" src="../template/img/logo/logo.png" alt="" role="presentation"/>
          </div><span class="footer__copy">2017</span>
        </footer>
      </div>
      <!-- build:js js/vendor.js-->
      <script src="../template/libs/jquery/dist/jquery.min.js"></script>
      <!-- endbuild-->
      <!-- build:js js/main.js-->
      <script src="../template/js/main.js"></script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkJ_CQGHEf1ZBI8NpKJJF0CTfmMh32jEk&amp;callback=initMap"></script>
      <!-- endbuild-->
    </div>
  </body>
</html>
