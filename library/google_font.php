<?php
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
function add_google_fonts() {
    wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap', false );
    wp_enqueue_style( ' add_google_fonts2 ', ' ttps://fonts.googleapis.com/css?family=Noto+Serif+JP', false );
}
