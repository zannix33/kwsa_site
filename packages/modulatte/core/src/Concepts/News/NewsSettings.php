<?php

namespace Modulatte\Core\Concepts\News;

class NewsSettings
{
    public static bool $hasNews = false;
    public static array $categories = [];

    public static function hasNews(bool $enabled = true)
    {
        static::$hasNews = $enabled;
    }

    public static function categories(array $categories = [])
    {
        static::$categories = $categories;
    }
}
