<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Vivadi</title>
    <meta charset="utf-8"/>
    <meta content="Yehor Illarionov" name="author"/>
    <meta content="Floor catalog" name="description"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <!-- build:css css/vendor.css-->
    <link rel="stylesheet" href="libs/mdi/css/materialdesignicons.min.css"/>
    <!-- endbuild-->
    <!-- build:css css/main.css-->
    <link rel="stylesheet" href="../template/css/main.css"/>
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
                <div class="header-nav__item"><a class="header-nav__link <?php echo ($page=="main"?" header-nav__link--active":"")?>" href="/">Главная</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link <?php echo ($page=="category"?" header-nav__link--active":"")?>" href="/category">Товары</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link <?php echo ($page=="about"?" header-nav__link--active":"")?>" href="/about">О компании</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link <?php echo ($page=="news"?" header-nav__link--active":"")?>" href="/news">Новости</a>
                </div>
                <div class="header-nav__item"><a class="header-nav__link <?php echo ($page=="contacts"?" header-nav__link--active":"")?>" href="/contacts">Контакты</a>
                </div>
              </nav>
            </div>
          </div>
        </header>
