<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                //return get_the_title($home);
                return __('próximo concierto', 'sage');
            }
            return __('Latest Posts', 'sage');
        }
        if (is_front_page()) {
                return;
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function anio()
    {
        return date('Y');
    }

    public function links()
    {
        $links = [
            'facebook' => 'https://www.facebook.com/BarbaCorsini/',
            'twitter' => 'https://twitter.com/BarbaCorsini'
        ];
        return $links;
    }
    public function mas_info()
    {
            return  get_field('mas_info');
    }
}
