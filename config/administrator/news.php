<?php
return [
    'title' => 'News',
    'single' => 'news',
    'model' => 'App\Models\Post',
    'form_width' => 600,

    'columns' => [
        'id' => [
            'type' => 'number'
        ],
        'preview_image' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/posts/resize/(:value)" height="100" />',
        ),
        'title' => [
            'type' => 'text',
            'title' => 'Title'
        ],
        'preview_text' => [
            'type' => 'text',
            'title' => 'Preview text'
        ],
        'active' => [
            'type' => 'bool',
            'title' => 'Active',
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
        'type' => [
            'type' => 'enum',
            'title' => 'Тип',
            'options' => [
                'Галерея',
                'Фото',
                'Видео'
            ],
        ],
        'preview_text' => [
            'type' => 'wysiwyg',
            'title' => 'Краткое описание'
        ],
        'detail_text' => [
            'type' => 'wysiwyg',
            'title' => 'Полное описание'
        ],
        'preview_img' => [
            'title' => 'Маленькая картинка',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/posts/origin/',
            'sizes' => [
                [150, 150, 'crop', public_path().'/uploads/posts/resize/', 100],
            ],
        ],
        'preview_img' => [
            'title' => 'Большая картинка',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/posts/origin/',
            'sizes' => [
                [150, 150, 'crop', public_path().'/uploads/posts/resize/', 100],
            ],
        ]
    ]
];