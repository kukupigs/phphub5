<?php

use App\Models\Topic;

return [
    'title'   => '话题',
    'heading' => '话题',
    'single'  => '话题',
    'model'   => Topic::class,

    'columns' => [

        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title'    => '标题',
            'sortable' => false,
        ],
        'order' => [
            'title'    => '排序',
        ],
        'user' => [
            'title'    => '用户',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return admin_link(
                    $model->user->name,
                    'users',
                    $model->user_id
                );
            },
        ],
        'category' => [
            'title'    => '分类',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return admin_link(
                    $model->category->name,
                    'categories',
                    $model->category_id
                );
            },
        ],
        'is_excellent' => [
            'title'    => '是否是推荐',
        ],
        'is_blocked' => [
            'title'    => '是否被屏蔽',
        ],
        'reply_count' => [
            'title'    => '批量数量',
        ],
        'view_count' => [
            'title'    => '查看数量',
        ],
        'vote_count' => [
            'title'    => '投票数量',
        ],

        'operation' => [
            'title'  => '管理',
            'output' => function ($value, $model) {

            },
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'title' => [
            'title'    => '标题',
            'sortable' => false,
        ],
        'user' => [
            'title'              => '用户',
            'type'               => 'relationship',
            'name_field'         => 'name',
            'autocomplete'       => true,
            'search_fields'      => array("CONCAT(id, ' ', name)"),
            'options_sort_field' => 'id',
        ],
        'category' => [
            'title'              => '分类',
            'type'               => 'relationship',
            'name_field'         => 'name',
            'search_fields'      => array("CONCAT(id, ' ', name)"),
            'options_sort_field' => 'id',
        ],
        'body_original' => [
            'title'    => 'Markdown 原始内容',
            'hint'     => '请使用 Markdown 格式填写',
            'type'     => 'textarea',
        ],
        'order' => [
            'title'    => '排序',
        ],
        'is_excellent' => [
            'title'    => '是否是推荐',
            'type'     => 'enum',
            'options'  => [
                'yes' => '是',
                'no'  => '否',
            ],
            'value' => 'no',
        ],
        'is_blocked' => [
            'title'    => '是否被屏蔽',
            'type'     => 'enum',
            'options'  => [
                'yes' => '是',
                'no'  => '否',
            ],
            'value' => 'no',
        ],
        'reply_count' => [
            'title'    => '批量数量',
        ],
        'view_count' => [
            'title'    => '查看数量',
        ],
        'vote_count' => [
            'title'    => '投票数量',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '内容 ID',
        ],
        'user' => [
            'title'              => '用户',
            'type'               => 'relationship',
            'name_field'         => 'name',
            'autocomplete'       => true,
            'search_fields'      => array("CONCAT(id, ' ', name)"),
            'options_sort_field' => 'id',
        ],
        'category' => [
            'title'              => '分类',
            'type'               => 'relationship',
            'name_field'         => 'name',
            'search_fields'      => array("CONCAT(id, ' ', screen_name)"),
            'options_sort_field' => 'id',
        ],
        'body_original' => [
            'title'    => 'Markdown 原始内容',
        ],
        'order' => [
            'title'    => '排序',
        ],
        'is_excellent' => [
            'title'    => '是否是推荐',
            'type'     => 'enum',
            'options'  => [
                'yes' => '是',
                'no'  => '否',
            ],
            'value' => 'no',
        ],
        'is_blocked' => [
            'title'    => '是否被屏蔽',
            'type'     => 'enum',
            'options'  => [
                'yes' => '是',
                'no'  => '否',
            ],
            'value' => 'no',
        ],
        'view_count' => [
            'type'                => 'number',
            'title'               => '查看次数',
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator'   => '.',   //optional, defaults to '.'
        ],
    ],
    'rules'   => [
        'title' => 'required'
    ],
    'messages' => [
        'title.required' => '请填写标题',
    ],
];
