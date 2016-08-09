<?php
return [
    'title' => 'Меню',
    'single' => 'элемент',
    'model' => 'App\Models\Menu',
    'form_width' => 600,
    'columns' => [
        'id' => [
            'type' => 'number',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'url' => [
            'type' => 'text',
            'title' => 'Ссылка'
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
            'editable' => true,
            'select' => "IF((:table).active, 'Да', 'Нет')",
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'url' => [
            'type' => 'text',
            'title' => 'Ссылка'
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
        'url' => [
            'type' => 'text',
            'title' => 'Ссылка'
        ],
    ]
];