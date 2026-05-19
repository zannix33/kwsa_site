<?php


namespace Modulatte\Core\Concepts\Globals;

class GlobalSettings
{
    public static array $menu = ['Home' => '/'];
    public static array $socials = ['Facebook'];

    public static function menu(array $menu)
    {
        static::$menu = $menu;
    }

    public static function socials(array $socials)
    {
        static::$socials = $socials;
    }
}
