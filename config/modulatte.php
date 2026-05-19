<?php

return [
    'pages' => [
        'nested' => false,
        'depth' => 2,   // this controls the allowed depth in UI
    ],
    'projects' => [
        'enabled' => true,
    ],
    'news' => [
        'enabled' => true,
        'categories' => [
            'enabled' => true,
            'multiple' => false,
        ],
        'tags' => true,
    ],

];
