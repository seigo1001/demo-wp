<?php 
get_header(); 
get_template_part('first-view-parts');?>

<!-- 記事リンク -->
<div class="l-top-information p-top-information">
    <div class="c-news-DateCat p-top-information__datecat">
        <p class="c-news-DateCat__date p-top-infomrmation__date">2020.07.20</p>
        <span class="c-news-DateCat__category">お知らせ </span>
    </div>
    <p class="c-news-information p-top-information__text">
        <a href="#">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a>
    </p>
    <div class="l-top-information__btn">
        <a href="#" class="c-btn c-btn--bgleft"><span>すべて見る</span></a>
    </div>
    <div class="l-top-information__more-btn">
        <a href="<?php echo home_url();?>/news/" class="c-more-btn c-more-btn--bgleft">
        <span class="c-more-btn__text">すべて見る</span>
        </a>
    </div>
</div>

<!-- 斜線 -->
<div class="c-oblique-line"></div>
<!-- 事業内容 -->
    <div class="l-top-content p-top-content">
        <div class="p-top-content__title p-section-title">
            <div class="p-top-content__title-wrap p-section-title__logo-wrap">
                <div class="p-section-title__logo">
                    <span class="c-section-title__english">Content</span>
                </div>
            </div>
        <div class="p-section-title__heading">
        <h2 class="p-section-title__text">事業内容</h2>
        </div>
    </div>
    
    <ul class="p-top-content__list p-page-list">

        <li class="p-page-list__item">
            <a href="<?php echo home_url();?>/business/" class="p-page-list__link">
                <picture class="p-page-list__picture">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image1-pc.png" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image1.png" alt="" class="p-page-list__img" />
                </picture>
                <span class="p-page-list__title">経営理念ページへ</span>
            </a>
        </li>

        <li class="p-page-list__item">
            <a href="<?php echo home_url();?>/business/#biz1/" class="p-page-list__link">
                <picture class="p-page-list__picture">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image2-pc.png" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image2.png" alt="" class="p-page-list__img" />
                </picture>
                <span class="p-page-list__title">理念1へ</span>
            </a>
        </li>

        <li class="p-page-list__item">
            <a href="<?php echo home_url();?>/business/#biz2/" class="p-page-list__link">
                <picture class="p-page-list__picture">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image3-pc.png" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image3.png" alt="" class="p-page-list__img" />
                </picture>
                <span class="p-page-list__title">理念2へ</span>
            </a>
        </li>

        <li class="p-page-list__item">
            <a href="<?php echo home_url();?>/business/#biz3/" class="p-page-list__link">
                <picture class="p-page-list__picture">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image4-pc.png" media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/page-list-image4.png" alt="" class="p-page-list__img" />
            </picture>
            <span class="p-page-list__title">理念3へ</span>
            </a>
        </li>
    </ul>
</div>

<!-- 斜線 -->
<div class="l-top-oblique-line-reverse c-oblique-line-reverse"></div>
<!-- 制作実績 -->
<div class="l-top-works p-top-works">
    <div class="p-top-works__title p-section-title">
        <div class="p-top-works__title-wrap p-section-title__logo-wrap">
            <div class="p-section-title__logo">
                <span class="c-section-title__english">Works</span>
            </div>
        </div>
        <div class="p-section-title__heading">
            <h2 class="p-section-title__text">制作実績</h2>
        </div>
    </div>
    
    <div class="p-top-works__item">
        <div class="p-top-work">
            <div class="p-top-work__wrap c-top-work">
                <div class="p-top-work__inner">
                    <div class="p-top-work__slider swiper">
                        <div class="c-top-work__slider swiper-wrapper">
                            <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slider1.jpg" alt="slider" />
                            <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slider2.jpg" alt="slider" />
                            <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slider3.jpg" alt="slider" />
                        </div>
                    </div>
                    <div class="swiper-pagination p-top-work__pagination"></div>
                </div>
                
                <div class="p-top-work__body">
                    <p class="p-top-work__body-title">メインタイトルが入ります</p>
                    <p class="p-top-work__body-text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
                    <div class="p-top-work__btn">
                        <a href="<?php home_url();?>/performance/" class="c-btn c-btn--bgleft"><span>詳しく見る</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- 企業概要 -->
<div class="l-top-overview p-top-overview">
    <div class="p-top-overview__title p-section-title">
        <div class="p-top-overview__title-wrap p-section-title__logo-wrap">
            <div class="p-section-title__logo">
                <span class="c-section-title__english">Overview</span>
            </div>
        </div>
    <div class="p-section-title__heading">
        <h2 class="p-section-title__text">企業概要</h2>
    </div>
</div>

<div class="p-top-overview__card">
    <div class="p-top-about">
        <!-- <h3 class="c-section-title">企業概要</h3> -->
        <div class="p-top-about__wrap">
            <picture class="p-top-about__picture">
                <source class="p-top-about__source" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about_pc.jpg" media="(min-width: 756px)" />
                <!-- 756px以上で表示する画像 -->
                <img class="p-top-about__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about_sp.jpg" alt="企業概要" /><!-- 756px以下で表示する画像 -->
            </picture>
            <div class="p-top-about__body">
                <p class="p-top-about__body-title">メインタイトルが入ります</p>
                <p class="p-top-about__body-text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
                <div class="p-top-about__btn">
                    <a href="<?php home_url();?>/about/" class="c-btn c-btn--bgleft"><span>詳しく見る</span></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- ブログ -->
<div class="l-top-blog p-top-blog">
    <div class="p-top-blog__title p-section-title">
        <div class="p-top-blog__title-wrap p-section-title__logo-wrap">
            <div class="p-section-title__logo">
                <span class="c-section-title__english">Blog</span>
            </div>
        </div>
        
        <div class="p-section-title__heading">
            <h2 class="p-section-title__text">ブログ</h2>
        </div>
    </div>
    
    <div class="l-top-blog__items p-top-blog__items p-top-blog-items">

    <?php
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'date' => 'DESC',
    );
    $blog_items = new WP_Query($args);

    if( $blog_items->have_posts() ):
        while($blog_items->have_posts() ) : $blog_items->the_post();
        
        if ( $blog_items->current_post == 0) :
    ?>
    <div class="p-top-blog__item p-blog__item--new" data-group="1">
        <?php else : ?>
    <div class="p-top-blog__item" data-group="1">
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="c-blog-card">
            <div class="c-blog-card__img">
                <img class="c-blog-card__thumb" src="<?php echo the_post_thumbnail_url();?>" alt="" />
            </div>
        
            <div class="c-blog-card__contents">
                <div class="c-blog-card__body">
                    <p class="c-blog-card__title">
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
                    <time class="c-blog-card__time" datetime="2021.07.20"><?php the_time('Y.m.d'); ?></time>
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

    <div class="p-top-blog__btn">
        <a href="<?php home_url();?>/blog/" class="c-btn c-btn--bgleft"><span>詳しく見る</span></a>
    </div>
</div>
<!-- お問い合わせ -->
<?php get_template_part('contact-parts');?>

<?php get_footer(); ?>