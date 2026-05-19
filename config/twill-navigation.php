<?php

return [
    "pages" => [
        "title" => "Pages",
        "module" => true,
    ],
    "contactEntries" => [
        "title" => "Contact Entries",
        'module' => true,
        'primary_navigation' => [
            'export-contact-entries' => [
                'title' => 'Export All Entries',
                'route' => 'admin.contact-entries.export',
            ],
        ],
    ],
    "projects" => [
        "title" => "Projects",
        'route' => 'admin.projects.index',
    ],
    'news' => [
        'title' => 'News',
        'route' => 'admin.news.index',
        'primary_navigation' => [
            'news' => [
                'title' => 'All News Articles',
                'route' => 'admin.news.index',
            ],
            'categories' => [
                'title' => 'News Categories',
                'route' => 'admin.newsCategories.index',
            ],
        ],
    ],
    // "articles" => [
    //     "title" => "News",
    //     'route' => 'admin.articles.index',
    //     'primary_navigation' => [
    //         'articles' => [
    //             'title' => 'All Articles',
    //             'route' => 'admin.articles.index',
    //         ],
    //         'categories' => [
    //             'title' => 'Article Categories',
    //             'route' => 'admin.articleCategories.index',
    //         ],
    //     ],
    // ],
    "settings" => [
        "title" => "Settings",
        "route" => "admin.settings",
        "params" => ["section" => "general"],
        'primary_navigation' => [
            'general' => [
                'title' => 'General Settings',
                'route' => 'admin.settings',
                "params" => ["section" => "general"],
            ],
            'seo' => [
                'title' => 'SEO Settings',
                'route' => 'admin.settings',
                "params" => ["section" => "seo"],
            ],
            'analytics' => [
                'title' => 'Analytics',
                'route' => 'admin.settings',
                "params" => ["section" => "analytics"],
            ],
            'social' => [
                'title' => 'Social',
                'route' => 'admin.settings',
                "params" => ["section" => "social"],
            ],
            'header' => [
                'title' => 'Header',
                'route' => 'admin.settings',
                "params" => ["section" => "header"],
            ],
        ],
    ],
];
