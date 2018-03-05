<?php

function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '3' );//cat 3 es conciertos
        $query->set('orderby', 'meta_value');
        $query->set('meta_key', 'fecha');
        $query->set('order', 'ASC');
        $query->set( 'posts_per_page', 1 );
    }
}
add_action( 'pre_get_posts', 'my_home_category' );
?>
