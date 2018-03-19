<?php

function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '3' );//cat 3 es conciertos
        $today = date('Ymd');
        $custom_meta = array (
            'key' => 'fecha',
            'compare' => '>=',
            'value' => $today
        );
        $query->set('meta_query', array ( $custom_meta ) );
        $query->set('orderby', 'meta_value');
        $query->set('order', 'ASC');
        $query->set( 'posts_per_page', 1 );
    }
    if ( $query->is_category('3') && $query->is_main_query() ) {
        $query->set('orderby', 'meta_value');
        $query->set('meta_key', 'fecha');
        $query->set('order', 'ASC');
    }
}
add_action( 'pre_get_posts', 'my_home_category' );
?>
