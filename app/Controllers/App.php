<?php

namespace App\Controllers;

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
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_category()) {
            return single_cat_title('', false);
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

    public static function bloke()
    {
        return (object) array (
            'frase_destacada' => get_field('phrase_lead'),
            'frase' => get_field('frase'),
        );
    }

    public static function cat()
    {
        return (object) array (
            'autor' => get_field('author'),
            'cargo' => get_field('charge'),
            'user' => get_field('user_twitter'),
            'link_tw' => get_field('link_user_twitter'),
            'mail' => get_field('email'),
        );
    }
}
