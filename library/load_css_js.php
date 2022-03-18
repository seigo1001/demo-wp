<?php
/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{

	wp_enqueue_style( 'my', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), '1.0.1', 'all' );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery-js' ), '1.0.1', true );
	wp_enqueue_script( 'swipercdn', 'https://unpkg.com/swiper/swiper-bundle.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/top-slider.js', array( 'jquery' ), '1.0.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');
