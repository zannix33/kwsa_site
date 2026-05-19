<?php

return [
    'namespace' => 'Modulatte\Core',
    'frontend' => [
        'views_path' => 'site',
    ],
    'admin_middleware_group' => 'admin',
    'enabled' => [
        'search' => true,
        'site-link' => true,
        //'dashboard' => false
    ],
    'dashboard' => [
        'analytics' => [
            'enabled' => true,
            'service_account_credentials_json' => storage_path('app/analytics/service-account-credentials.json'),
        ],
        'modules' => [
            'Modulatte\Core\Models\Page' => [
                'name' => 'pages',
                'count' => true,
                'create' => false,
                'activity' => true,
                'draft' => true,
                'search' => false,
            ],
        ],
    ],
];
