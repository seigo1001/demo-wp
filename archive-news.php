 <?php 
 get_header();
 get_template_part('first-view-parts');
 ?>

 
    <div class="p-news__wrap">
      <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 5,
          'post_type' => 'news',
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'paged' => $paged,
        );
        $news_items = new WP_Query($args);

        if( $news_items->have_posts() ):
            while($news_items->have_posts() ) : $news_items->the_post();
      ?>

      <div class="p-news__item">
        <div class="p-news-infomation">
          <div class="c-news-DateCat p-news-information__date">
            <p class="c-news-DateCat__date"><?php the_time('Y.m.d'); ?></p>
            <span class="c-news-DateCat__category">カテゴリ </span>
          </div>
          <p class="c-news-information p-news-information__text"><a href="#"><?php the_title(); ?></a></p>
        </div>
      </div>

      <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
    </div>
    <?php
    wp_pagenavi(array('query' => $news_items));
    ?>
  </section>

<?php get_template_part('contact-parts'); ?>


<?php get_footer(); ?>