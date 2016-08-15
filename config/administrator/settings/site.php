<?php
return [
    'title' => 'Настройки сайта',
    'edit_fields' => [
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'description' => [
            'type' => 'textarea',
            'title' => 'Описание'
        ],
        'keywords' => [
            'type' => 'text',
            'title' => 'Ключевые слова'
        ],
        'favicon' => [
            'type' => 'image',
            'title' => 'Фавиконка',
            'naming' => 'random',
            'location' => public_path().'/uploads/images/favicon/',
        ],
        'logo_image' => [
            'type' => 'image',
            'title' => 'Логотип',
            'naming' => 'random',
            'location' => public_path().'/uploads/images/',
            'sizes' => [
                [35, 35, 'crop', public_path().'/uploads/images/logo/', 100],
            ],
        ],
        'logo_text' => [
            'type' => 'text',
            'title' => 'Текст логотипа',
        ]
    ]
];