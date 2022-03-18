<?php 
get_header();
get_template_part('first-view-parts');
?>

        <div class="search">
          <span class="search__item is-active" data-group="">ALL</span>
          <span class="search__item" data-group="1">カテゴリ1</span>
          <span class="search__item" data-group="2">カテゴリ2</span>
          <span class="search__item" data-group="3">カテゴリ3</span>
        </div>
      </div>
      
      <div class="p-works-items">
      <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 2,
          'post_type' => 'performance',
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'paged' => $paged,
        );
        $works_items = new WP_Query($args);

        if( $works_items->have_posts() ):
            while($works_items->have_posts() ) : $works_items->the_post();
      ?>
        <div class="p-works__item" data-group="1">
          <a href="<?php the_permalink(); ?>" class="c-works-item">
            <span class="c-works-item__category">カテゴリ１</span>
            <figure class="c-works-item__img">
              <?php the_post_thumbnail(); ?>
            </figure>
            <div class="c-works-item__name"><?php the_title(); ?></div>
          </a>
        </div>
        <?php
            endwhile;
          endif;
        wp_reset_postdata();
        ?>
      </div>

      
    </div>
    <?php //if (function_Exists('the_pagination')){
          // $pagination_array = the_pagination();
          //配列じゃないなら非表示
          // if ( !is_array($pagination_array) ) return;
          //   echo '<nav class="c-pagination">';
          //   echo '<div class="c-pagination__wrap">';
          //   echo '<ul class="c-pagination__pages">';
          //   foreach($pagination_array as $key => $val) {
          //     echo '<li class="c-pagination__page">'.$pagination_array[$key].'</li>';
          //   }
          //   echo '</ul>';
          //   echo '</div>';
          //   echo '</nav>';
          // wp_pagenavi(array('query' => $news_items));
        //}


        // if (function_exists("pagination")){
        //   pagination($works_items->max_num_pages);
        // }

        // $args = array(
        //   'mid_size' => 1,
        //   'prev_next' => 'true',
        //   'prev_text' => 'PREV',
        //   'next_text' => 'NEXT',
        //   'screen_reader_text' => '',
        // );
        // the_posts_pagination($args);

        wp_pagenavi(array('query' => $works_items));
    ?>
    <div class="p-works__pagenation">
      <div class="c-pagination">
      </div>
    </div>
    
  </section>
  
   <!-- お問い合わせ -->
   <?php get_template_part('contact-parts');?>


<?php get_footer(); ?>