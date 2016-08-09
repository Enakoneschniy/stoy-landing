<?php

return [
    'title' => 'Картинки в хедере и футере',
    'edit_fields' => [
        'title_header' => [
            'title' => 'Заголовок в хедере',
            'type' => 'textarea'
        ],
        'description_header' => [
            'title' => 'Описание в хедере',
            'type' => 'textarea'
        ],
        'header_image' =>[
            'title' => 'Картинка в хедере',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/images/origin/',
            'sizes' => [
                [1600, 1062, 'crop', public_path().'/uploads/images/resize/', 100],
            ],
        ],
        'footer_image' =>[
            'title' => 'Картинка в футере',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/images/origin/',
            'sizes' => [
                [1600, 1062, 'crop', public_path().'/uploads/images/resize/', 100],
            ],
        ]
    ]
];