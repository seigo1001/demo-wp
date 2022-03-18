<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="robots" content="noindex" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUpsチーム開発</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary" />
  <!-- ファビコン -->
  <link rel="icon" href="#" />

  <?php wp_head(); ?>
</head>

<body>
  <header class="p-header">
    <div class="c-header__logo">
      <a href="<?php echo esc_url( home_url() ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps.svg" alt="header-logo" />
      </a>
    </div>
    <nav class="p-header-nav">

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'global',
          'container' => '',
          'menu_class' => 'p-header-nav__items'
        )
      );
      ?>

    </nav>
    <div class="c-header-drawer c-hamburger js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="p-header__menu p-drawer js-drawer-menu">
      <ul class="p-drawer__items">
        <li class="c-drawer__item">
          <a class="c-drawer__item-link" href="/index.html">トップ</a>
        </li>
        <li class="c-drawer__item">
          <a class="c-drawer__item-link" href="/news.html">お知らせ</a>
        </li>
        <li class="c-drawer__item">
          <a class="c-drawer__item-link" href="/business.html">事業内容</a>
        </li>
        <li class="c-drawer__item">
          <a class="c-drawer__item-link" href="/works.html">制作実績</a>
        </li>
        <li class="c-drawer__item">
          <a class="c-drawer__item-link" href="/about.html">企業概要</a>
        </li>
        <li class="c-drawer__item">
          <a class="c-drawer__item-link" href="/blog.html">ブログ</a>
        </li>
        <li class="c-drawer__item">
          <a class="c-drawer__item-link" href="/contact.html">お問い合わせ</a>
        </li>
      </ul>
    </nav>
  </header>