<?php


namespace Modulatte\Core\Concepts\SEO;

class SEOSettings
{
    public static bool $hasPwa = true;
    public static bool $hasAnalytics = true;
    public static bool $hasSeo = true;

    public static function hasPWA(bool $enabled = true)
    {
        static::$hasPwa = $enabled;
    }

    public static function hasAnalytics(bool $enabled = true)
    {
        static::$hasAnalytics = $enabled;
    }

    public static function hasSeo(bool $enabled = true)
    {
        static::$hasSeo = $enabled;
    }
}
