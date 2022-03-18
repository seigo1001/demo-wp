<?php
add_action( 'init', 'custom_post_type' );
function custom_post_type() {
    //カスタム投稿タイプをダッシュボードの編集画面で使用する項目
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'revisions'
    );

    //投稿タイプ：お知らせ
    // register_post_type( 'news',
    // array(
    //     'labels' => array(
    //         'name' => __('お知らせ'),
    //         'singular_name' => __('お知らせ'),
    //         'add_new' => __('新規追加', 'news'),
    //         'add_new_item' => __('新規追加')
    //     ),
    //     'public' => true,
    //     'has_archive' => true,
    //     'hierarchical' => false,
    //     'menu_position' => 25,
    //     'menu_icon' => 'dashicons-edit',
    //     'supports' => $supports
    //     )
    // );

    //投稿タイプ：制作実績
    // register_post_type( 'works',
    // array(
    //     'labels' => array(
    //         'name' => __('制作実績'),
    //         'singular_name' => __('制作実績'),
    //         'add_new' => __('新規追加', 'works'),
    //         'add_new_item' => __('新規追加')
    //     ),
    //     'public' => true,
    //     'has_archive' => true,
    //     'hierarchical' => false,
    //     'menu_position' => 25,
    //     'menu_icon' => 'dashicons-edit',
    //     'supports' => $supports
    //     )
    // );


    //以下はカスタムタクソノミーの追加
    // register_taxonomy(
    //     'work',        //カスタムタクソノミー名
    //     array('works'),           //このタクソノミーを利用する投稿タイプ名
    //     array(
    //         'label' => '制作実績カテゴリー',       //カスタムタクソノミーのラベル
    //         'labels' => array(
    //             'popular_item' => 'popular item',
    //             'edit_item' => 'edit item',
    //             'add_new_item' => '新規カテゴリーを追加',
    //             'search_items' => 'カテゴリーを検索'
    //         ),
    //         'public' => true,   //管理画面及びサイト上に公開
    //         'description' => 'WordPress講座一覧',   //説明文
    //         'hierarchical' => true,     //カテゴリー形式
    //         'show_in_rest' => true      //Gutenbergで表示
    //     )
    // );
}