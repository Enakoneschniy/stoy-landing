<?php

return [
    'title' => 'Объекты',
    'single' => 'объект',
    'model' => 'App\Models\Project',
    'form_width' => 600,
    'columns' => [
        'id' => [
            'type' => 'number',
        ],
        'image' => [
            'title' => 'Картинка',
            'output' => '<img src="/uploads/projects/resize/admin/(:value)" width="85" />',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'describe' => [
            'type' => 'wysiwyg',
            'title' => 'Описание'
        ],
        'portfolios' =>[
            'type' => 'relationship',
            'title' => 'Картинки',
            'output' => function($value, $model)
            {

                $arr = $value->toArray();
                $output = "<div>";
                foreach ($arr as $key => $item){
                    if($key%3 == 0 && $key != 0)
                        $output .= '</div><div>';
                    $output .= '<img style="padding: 2px" src="/uploads/portfolio/resize/admin/'.$item['image'].'" width="40" />';

                }
                $output .= "</div>";
                return $output;
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
            'editable' => true,
        ],

        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'describe' => [
            'type' => 'wysiwyg',
            'title' => 'Описание'
        ],
        'portfolios' =>[
            'type' => 'relationship',
            'title' => 'Картинки',
            'name_field' => 'id', //using the getNameAttribute accessor
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/projects/origin/',
            'sizes' => [
                [85, 60, 'crop', public_path().'/uploads/projects/resize/admin/', 100],
                [360, 240, 'crop', public_path().'/uploads/projects/resize/preview/', 100],
                [1024, 683, 'crop', public_path().'/uploads/projects/resize/detail/', 100],
            ],
        ],
    ],
    'filters' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Активность',

        ],
        'title' => [
            'type' => 'text',
            'title' => 'Заголовок'
        ],
        'describe' => [
            'type' => 'text',
            'title' => 'Описание'
        ],
        'portfolios' =>[
            'type' => 'relationship',
            'title' => 'Картинки',
            'name_field' => 'title', //using the getNameAttribute accessor
            'options_sort_field' => "id",
        ]
    ]
];