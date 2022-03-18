<?php
if ( is_front_page() ){
?>
    <!-- メインビュー -->
    <div class="p-mv">
    <div class="p-mv__title">
      <h1 class="p-mv__main-title">メインタイトルが入ります</h1>
      <p class="p-mv__sub-title">サブタイトルが入ります</p>
    </div>
    <div class="swiper-container p-mv__container">
      <div class="swiper-wrapper">
        <div class="swiper-slide p-mv__slide">
          <div class="slide-img p-mv__img-wrapper">
            <img class="p-mv__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv-image1.png" alt="メインビューイメージ画像" />
          </div>
        </div>
        <div class="swiper-slide p-mv__slide">
          <div class="slide-img p-mv__img-wrapper">
            <img class="p-mv__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv-image2.png" alt="メインビューイメージ画像" />
          </div>
        </div>
        <div class="swiper-slide p-mv__slide">
          <div class="slide-img p-mv__img-wrapper">
            <img class="p-mv__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv-image3.png" alt="メインビューイメージ画像" />
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
} else if ( is_page('business')) {
?>
    <section class="l-business sublayer p-business">
    <div class="c-subfv">
      <h2>事業内容</h2>
    </div>
    
    <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php 
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
    </div>
    
<?php
} else if ( is_page('about')) {
?>
    <section class="l-about sublayer p-about">
        <div class="c-subfv">
        <h2>企業概要</h2>
        </div>

    <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php 
    if(function_exists('bcn_display'))
    {
        bcn_display();
    }
    ?>
    </div>
<?php
} else if ( is_page('contact')){
?>
    <section class="l-contact sublayer">
        <div class="c-subfv">
        <h2>お問い合わせ</h2>
        </div>
    </section>
    
    <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php 
    if(function_exists('bcn_display'))
    {
        bcn_display();
    }
    ?>
    </div>
<?php
} else if ( is_home()){
?>
    <section class="l-blog sublayer p-blog">
        <div class="c-subfv">
        <h2>ブログ</h2>
        </div>
    <div class="p-blog__wrap">
      <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php 
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
      </div>
<?php
} else if ( is_post_type_archive('performance') ) {
?>
    <section class="l-works sublayer p-works">
    <div class="c-subfv">
      <h2>制作実績</h2>
    </div>
    <div class="p-works__wrap">
      <div class="p-works__head">

        <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/" style="margin-bottom: 90px;">
        <?php 
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
      </div>
        
<?php
} else if ( is_post_type_archive('news')) {
?>
    <section class="l-news sublayer p-news">
    <div class="c-subfv">
      <h2>お知らせ</h2>
    </div>
    
    <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php 
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
      </div>
<?php
}