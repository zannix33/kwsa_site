<?php

namespace Modulatte\Core\Concepts\Projects;

class ProjectSettings
{
    public static bool $hasProjects = false;
    public static array $categories = [];

    public static function hasProjects(bool $enabled = true)
    {
        static::$hasProjects = $enabled;
    }

    public static function categories(array $categories = [])
    {
        static::$categories = $categories;
    }
}
