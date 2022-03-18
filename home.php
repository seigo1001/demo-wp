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
      <div class="p-blog-items">

      <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 6,
          'post_type' => 'post',
          'order' => 'DESC',
          'paged' => $paged,
        );
        $post_items = new WP_Query($args);

        if( $post_items->have_posts() ):
            while($post_items->have_posts() ) : $post_items->the_post();

            if ( $post_items->current_post == 0) :
      ?>
        <div class="p-blog__item p-blog__item--new" data-group="1">
        <?php else : ?>
        <div class="p-blog__item" data-group="1">
        <?php endif; ?>
          <a href="<?php the_permalink(); ?>" class="c-blog-card">
            <div class="c-blog-card__img">
              <img class="c-blog-card__thumb" src="<?php echo the_post_thumbnail_url();?>" alt="" />
            </div>
            <div class="c-blog-card__contents">
              <div class="c-blog-card__body">
                <p class="c-blog-card__title" style="text-align: left;">
                <?php 
                if(mb_strlen($post->post_title, 'UTF-8')>15){
                  $title = mb_substr($post->post_title, 0, 15, 'UTF-8');
                  echo $title.'...';
                }else{
                  echo $post->post_title;
                }
                ?>
                </p>
              
                <p class="c-blog-card__text"> 
                <?php
                if(mb_strlen($post->post_content,'UTF-8')>40){
                  $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 40,'UTF-8'));
                  echo $content.'...';
                }else{
                  echo str_replace('\n', '', strip_tags($post->post_content));
                }
                ?>
                </p>
              </div>

              <div class="c-blog-card__item p-card__item">
                <span class="c-blog-card__category"><?php the_category(); ?></span>
                <time class="c-blog-card__time" datetime="2021.07.20"><?php the_date('Y.m.d'); ?></time>
              </div>
            </div>
          </a>
        </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>

        </div>

        <?php //if //(function_Exists('the_pagination')){
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
          wp_pagenavi(array('query' => $post_items));
        //}
        ?>
    </div>

    
  </section>

  <?php get_template_part('contact-parts');?>

<?php get_footer(); ?>