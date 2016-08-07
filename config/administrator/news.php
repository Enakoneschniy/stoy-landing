<?php
return [
    'title' => 'Новости',
    'single' => 'новость',
    'model' => 'App\Models\Post',
    'form_width' => 600,

    'columns' => [
        'id' => [
            'type' => 'number'
        ],
        'image' => array(
            'title' => 'Картинка',
            'output' => '<img src="/uploads/posts/resize/admin/(:value)" width="85" />',
        ),
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'preview_text' => [
            'type' => 'text',
            'title' => 'Краткое описание'
        ],
        'created_at' => [
            'type' => 'datetime',
            'title' => 'Дата добавления',
            'date_format' => 'dd.mm.yy', //optional, will default to this value
            'time_format' => 'HH:mm',    //optional, will default to this value
        ],
        'active' => [
            'type' => 'bool',
            'title' => 'Активность',
            'editable' => true,
        ],

    ],
    'edit_fields' => [
        'active' => [
            'title' => 'Активность',
            'type' => 'bool',
        ],
        'title' => [
            'title' => 'Заголовок',
            'type' => 'text'
        ],
        'preview_text' => [
            'type' => 'wysiwyg',
            'title' => 'Краткое описание'
        ],
        'detail_text' => [
            'type' => 'wysiwyg',
            'title' => 'Полное описание'
        ],
        'image' => [
            'title' => 'Превью картинка',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/posts/origin/',
            'sizes' => [
                [85, 60, 'crop', public_path().'/uploads/posts/resize/detail/admin', 100],
                [750, 500, 'crop', public_path().'/uploads/posts/resize/public', 100],
                [75, 50, 'crop', public_path().'/uploads/posts/resize/preview/public', 100],
            ],
        ]
    ],
    'filters' => [
        'active' => [
            'title' => 'Активность',
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок',
        ],
        'created_at' => [
            'type' => 'datetime',
            'title' => 'Дата добавления',
            'date_format' => 'dd.mm.yy', //optional, will default to this value
            'time_format' => 'HH:mm',    //optional, will default to this value
        ],
    ]
];