<div class="l-blog-detail__relation">
      <div class="_c-btn-article">
        <span class="c-btn-article-text">関連記事</span>
      </div>

      <div class="p-work-detail__cards">

      <?php
        $args = array(
          'posts_per_page' => 4,
          'post_type' => 'post',
          'orderby' => 'menu_order',
          'order' => 'ASC',
        );
        $post_items = new WP_Query($args);

        if( $post_items->have_posts() ):
            while($post_items->have_posts() ) : $post_items->the_post();
      ?>
     
        <a href="<?php the_permalink(); ?>" class="c-article-card">
          <div class="c-article-card__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/blog_1.jpg" alt="" />
          </div>
          <div class="c-article-card__contents">
            <div class="c-article-card__body">
              <p class="c-article-card__title">
              <?php 
                if(mb_strlen($post->post_title, 'UTF-8')>10){
                  $title = mb_substr($post->post_title, 0, 10, 'UTF-8');
                  echo $title.'...';
                }else{
                  echo $post->post_title;
                }
                ?>
            </p>
              <p class="c-article-card__text">
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
            <div class="c-article-card__item p-card__item">
              <span class="c-article-card__category">カテゴリ</span>
              <time class="c-article-card__time" datetime="2021.07.20"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
        </a>

        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>

      </div>

    </div>