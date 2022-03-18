<!-- 
Template Name: business
-->
<?php 
get_header();
get_template_part('first-view-parts');
?>

    <div class="p-business__wrap">
      <div class="c-business-head">
        <h2 class="c-business-head__title">企業理念</h2>
        <p class="c-business-head__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
      <div class="p-business__items">

        <div class="p-business-wrap__item" id="biz1">
          <div class="c-business-item">
            <picture class="c-business-item__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/business_container_pc.jpg" media="(min-width: 756px)" /><!-- 756px以上で表示する画像 -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/business_container_sp.jpg" alt="企業概要"><!-- 756px以下で表示する画像 -->
            </picture>
            <div class="c-business-item__body">
              <h3 class="c-business-item__title">企業理念１</h3>
              <p class="c-business-item__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
          </div>
        </div>

        <div class="p-business-wrap__item" id="biz2">
          <div class="c-business-item--reverse">
            <picture class="c-business-item__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/business_container_pc2.jpg" media="(min-width: 756px)" /><!-- 756px以上で表示する画像 -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/business_container_sp2.jpg" alt="企業概要"><!-- 756px以下で表示する画像 -->
            </picture>
            <div class="c-business-item__body">
              <h3 class="c-business-item__title">企業理念２</h3>
              <p class="c-business-item__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
          </div>
        </div>

        <div class="p-business-wrap__item" id="biz3">
          <div class="c-business-item">
            <picture class="c-business-item__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/business_container_pc3.jpg" media="(min-width: 756px)" /><!-- 756px以上で表示する画像 -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/business_container_sp3.jpg" alt="企業概要"><!-- 756px以下で表示する画像 -->
            </picture>
            <div class="c-business-item__body">
              <h3 class="c-business-item__title">企業理念３</h3>
              <p class="c-business-item__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('contact-parts');?>


<?php get_footer(); ?>