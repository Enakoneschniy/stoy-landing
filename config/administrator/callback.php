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
        'status' => [
            'type' => 'text',
            'title' => 'Статус'
        ],
        'comment' => [
            'type' => 'text',
            'title' => 'Комментарий'
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
        'status' => [
            'type' => 'enum',
            'options' => ['Активнй', 'Перезвонить', 'Жду ответ', 'Клиент'],
            'title' => 'Статус'
        ],
        'name' => [
            'type' => 'text',
            'title' => 'Имя',
        ],
        'phone' => [
            'type' => 'text',
            'title' => 'Телефон'
        ],

        'comment' => [
            'type' => 'textarea',
            'title' => 'Комментарий'
        ],
    ],
    'filters' =>[
        'active' => [
            'type' => 'bool',
            'title' => 'Активность'
        ],
        'status' => [
            'type' => 'enum',
            'options' => ['Активнй', 'Перезвонить', 'Жду ответ', 'Клиент'],
            'title' => 'Статус'
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