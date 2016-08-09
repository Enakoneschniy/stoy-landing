<?php

return [
    'title' => 'Портфолио объектов',
    'single' => 'картинку',
    'model' => 'App\Models\Portfolio',
    'form_width' => 600,
    'columns' => [
        'id' => [
            'type' => 'number'
        ],
        'image' => [
            'title' => 'Картинка',
            'output' => '<img src="/uploads/portfolio/resize/admin/(:value)" width="85" />',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'project' => [
            'title' => 'Объект',
            'type' => 'relationship',
            'name_field' => 'title',
            'output' => function($value, $model)
            {
                return  $value->title;
            },
        ],
        'active' => [
            'type' => 'bool',
            'title' => 'Активность',
            'select' => "IF((:table).active, 'Да', 'Нет')",
        ]
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Активность',
        ],

        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'project' => [
            'title' => 'Объект',
            'type' => 'relationship',
            'relationship' => 'App\Models\Project',
            'name_field' => 'title'
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/portfolio/origin/',
            'sizes' => [
                [85, 60, 'crop', public_path().'/uploads/portfolio/resize/admin/', 100],
                [360, 240, 'crop', public_path().'/uploads/portfolio/resize/preview/', 100],
                [1024, 683, 'crop', public_path().'/uploads/portfolio/resize/detail/', 100],
            ],
        ],

    ],
    'filters' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Активность',
            'select' => "IF((:table).active, 'Да', 'Нет')",
        ],

        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'project' => [
            'title' => 'Объект',
            'type' => 'relationship',
            'relationship' => 'App\Models\Project',
            'name_field' => 'title'
        ],
    ]
];