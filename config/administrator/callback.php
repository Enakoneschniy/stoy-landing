<?php

return [
    'title' => 'Заявки',
    'single' => 'заявку',
    'model' => 'App\Models\Callback',
    'form_width' => 600,
    'columns' => [
        'id' => [
            'type' => 'number',
        ],
        'name' => [
            'type' => 'text',
            'title' => 'Имя',
        ],
        'phone' => [
            'type' => 'text',
            'title' => 'Телефон'
        ],
        'created_at' => [
            'title' => 'Дата добавления',
            'type' => 'datetime',
            'date_format' => 'dd.mm.yy', //optional, will default to this value
            'time_format' => 'HH:mm',    //optional, will default to this value
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
            'title' => 'Активность'
        ],
        'name' => [
            'type' => 'text',
            'title' => 'Имя',
        ],
        'phone' => [
            'type' => 'text',
            'title' => 'Телефон'
        ]
    ],
    'filters' =>[
        'active' => [
            'type' => 'bool',
            'title' => 'Активность'
        ],
        'name' => [
            'type' => 'text',
            'title' => 'Имя',
        ],
        'phone' => [
            'type' => 'text',
            'title' => 'Телефон'
        ],
        'created_at' => [
            'title' => 'Дата добавления',
            'type' => 'datetime',
            'date_format' => 'dd.mm.yy', //optional, will default to this value
            'time_format' => 'HH:mm',    //optional, will default to this value
        ]
    ]
];