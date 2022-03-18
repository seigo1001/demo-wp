<?php get_header(); ?>

<section class="p-work-detail">
    <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php 
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
    </div>
    <div class="p-work-detail__layer">
      <div class="c-work-detail-title p-work-detail__title"> 〇〇株式会社様 制作実績 </div>
      <div class="c-news-DateCat">
        <p class="c-news-DateCat__date">2020.07.20 </p>
        <span class="c-news-DateCat__category">カテゴリ2 </span>
      </div>
      <div class="c-gallery">
        <div class="swiper-container c-gallery-slider">
          <!-- メイン -->
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
        <!-- サムネイル -->
        <div class="swiper-container c-gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/swiper1.jpg" alt="1"></div>
          </div>
        </div>
      </div>
      <div class="c-works-detail-point">
        <div class="c-works-detail-point__title">制作のポイント</div>
        <p class="c-works-detail-point__text">テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
      </div>
      <div class="c-works-detail-point">
        <div class="c-works-detail-point__title">デザインのポイント</div>
        <p class="c-works-detail-point__text">テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
      </div>
      <div class="c-works-detail-point">
        <div class="c-works-detail-point__title">その他</div>
        <p class="c-works-detail-point__text">テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
      </div>
      <div class="c-pagination">
        <div class="c-pagination__wrap">
          <span class="c-pagination__prev">prev</span>
          <span class="c-pagination__all">一覧</span>
          <span class="c-pagination__next">next</span>
        </div>
      </div>
    </div>

    <?php get_template_part('relation-parts');?>

  </section>

    <?php get_template_part('contact-parts');?>
<?php get_footer(); ?>