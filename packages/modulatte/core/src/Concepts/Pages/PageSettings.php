<?php


namespace Modulatte\Core\Concepts\Pages;

class PageSettings
{
    public static bool $hasPages = true;
    public static array $pages = ['Home'];
    public static function hasPages(bool $enabled = true)
    {
        static::$hasPages = $enabled;
    }

    public static function pages(array $pages)
    {
        static::$pages = $pages;
    }
}
