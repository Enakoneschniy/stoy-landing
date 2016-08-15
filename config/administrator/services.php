<?php

return [
    'title' => 'Виды работ',
    'single' => 'вид работ',
    'model' => 'App\Models\Service',
    'form_width' => 600,
    'columns' => [
        'id' => [
            'type' => 'number',
        ],
        'image' => array(
            'title' => 'Картинка',
            'output' => '<img src="/uploads/service/resize/admin/(:value)" width="128" />',
        ),
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'describe' => [
            'type' => 'text',
            'title' => 'Описание'
        ],
        'price' => [
            'type' => 'number',
            'output' => '(:value)грн.'
        ],
        'sort' => [
            'type' => 'number',
            'title' => 'Сортировка'
        ],
        'active' => [
            'type' => 'bool',
            'title' => 'Активность',
            'editable' => true,
            'select' => "IF((:table).active, 'Да', 'Нет')",
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Активность',
            'select' => "IF((:table).active, 'Да', 'Нет')",
        ],
        'sort' => [
            'type' => 'number',
            'title' => 'Сортировка'
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'describe' => [
            'type' => 'wysiwyg',
            'title' => 'Описание'
        ],
        'price' => [
            'type' => 'number',
            'title' => 'Цена'
            //'output' => '(:value)грн.'
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/service/origin/',
            'sizes' => [
                [128, 128, 'crop', public_path().'/uploads/service/resize/admin/', 100],
                [750, 500, 'crop', public_path().'/uploads/service/resize/', 100],
                [128, 128, 'crop', public_path().'/uploads/service/resize/preview/', 100],
            ],
        ]
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
        'describe' => [
            'type' => 'wysiwyg',
            'title' => 'Описание'
        ],
        'price' => [
            'type' => 'number',
            'title' => 'Цена',
            //'output' => '(:value)грн.'
        ],
    ]
];