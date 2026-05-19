<?php

use App\Concepts\Articles\ArticleSettings;
use App\Concepts\Products\ProductsSettings;
use App\Concepts\Photos\PhotoSettings;

if (!function_exists('collectMenuItems')) {
    function collectMenuItems(): array
    {
        $menu = config('twill-navigation');
        if (!ArticleSettings::$hasArticles) {
            unset($menu['articles']);
        }
        if (!PhotoSettings::$hasPhotos) {
            unset($menu['photos']);
        }
        if (!ProductsSettings::$hasProducts) {
            unset($menu['products']);
        }

        return $menu;
    }
}
