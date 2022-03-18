<?php get_header(); ?>

<section class="sublayer">
    <div class="p-blog-detail">
      <div class="breadcrumbs c-breadcrumb-list__menu" typeof="BreadcrumbList" vocab="https://schema.org/" style="padding-left: 0" >
          <?php 
          if(function_exists('bcn_display'))
          {
              bcn_display();
          }
          ?>
      </div>

      <div class="l-blog-detail__side c-blog-head">

      <?php

        if( have_posts() ):
            while(have_posts() ) : the_post();
      ?>
        <h2 class="c-blog-head__title"><?php the_title(); ?></h2>
        <div class="c-news-DateCat">
          <p class="c-news-DateCat__date"><?php the_time('Y.m.d'); ?> </p>
          <span class="c-news-DateCat__category"><?php the_category(); ?> </span>
        </div>
        <div class="c-blog-eyeCatch">
          <img src="<?php echo the_post_thumbnail_url();?>" alt="eyecatch" class="pc-only">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blog-eyecatch_sp.jpg" alt="eyecatch" class="sp-only">
        </div>
        <div class="c-blog-head__body">
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>

      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
      </div>

      <div class="l-blog-detail__side c-blog-body">
        <div class="c-blog-body__title">
          <h3>見出し2</h3>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="c-blog-body__subtitle">
          <h3><span>見出し３ 見出し３ 見出し３</span></h3>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="c-blog-eyeCatch">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blog-image_pc.jpg" alt="blogimage" class="pc-only">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blog-image_sp.jpg" alt="blogimage" class="sp-only">
        </div>
        <div class="blog-body__body">
          <ul class="bullet-list">
            <li>・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ul>
          <ol class="number-list">
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ol>
        </div>
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