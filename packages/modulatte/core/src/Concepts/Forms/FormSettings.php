<?php


namespace Modulatte\Core\Concepts\Forms;

class FormSettings
{
    public static bool $hasForms = true;
    public static array $forms = ['Contact'];

    public static function hasForms(bool $enabled = true)
    {
        static::$hasForms = $enabled;
    }

    public static function forms(array $forms = [])
    {
        static::$forms = $forms;
    }
}
