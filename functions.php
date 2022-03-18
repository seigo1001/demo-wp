<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


require_once('library/load_css_js.php');		//CSS,JS読み込み
require_once('library/google_font.php');			//googleフォント読み込み
require_once('library/global_menu.php');		//グローバルメニュー登録
require_once('library/custom_post_type.php');	//カスタム投稿登録


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );



add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

function my_css_attributes_filter($var) {
return is_array($var) ? array_intersect($var, array( 'c-header-nav__item' ) ) : '';
}


function the_pagination() {
	global $wp_query;
	$bignum = 999999999;
	if ( $wp_query->max_num_pages <= 1)
		return;
	// echo '<nav class="c-pagination">';
	// echo '<div class="c-pagination__wrap">';

	return paginate_links( array(
		'base'		=> str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
		'format'	=> '?paged=%#%',
		'current'	=> max( 1, get_query_var( 'paged' ) ),
		'total'		=> $wp_query->max_num_pages,
		'prev_text'	=> 'PERV',
		'next_text'	=> 'NEXT',
		'type'		=> 'array',
		'end_size'	=> 2,
		'mid_size'	=> 2
	));

	// echo '</div>';
	// echo '</nav>';
}

function pagination($pages='', $range=2) {
	$showitems = ($range * 2) + 1; //表示するページ数

	global $paged; //現在のページ値
	if(empty($paged)) $paged = 1;	//デフォルトのページ

	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;	//全ページ数を取得
		if(!$pages){	//全ページ数が空の場合は、1とする
			$pages = 1;
		}	
	}

	if(1 != $pages){	//全ページが1でない場合はページネーションを表示する
		echo '<nav class="c-pagination">';
        echo '<div class="c-pagination__wrap">';
		echo '<ul class="c-pagination__pages">';

		//Prev: 現在のページ値が1より大きい場合は表示
		if($paged > 1) echo '<li class="c-pagination__page"><a href="'.get_pagenum_link($paged - 1).'"></a>PREV</li>';

		for ($i = 1; $i <= $pages; $i++){
			if( 1 != $pages && ( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)){
				//三項演算子での条件分岐
				echo ($paged == $i) ? '<li class="c-pagination__page"><a href="'. get_pagenum_link($i) . '">'.$i.'</a></li>¥n' : '<li class="c-pagination__page"><a href="'. get_pagenum_link($i) . '">'.$i.'</a></li>¥n';
			}
		}
		//Next: 総ページ数より現在のページ値が小さい場合は表示
		if($paged < $pages) echo '<li class="c-pagination__page"<a href="'.get_pagenum_link($paged + 1).'"</a>NEXT</li>';
	}
}