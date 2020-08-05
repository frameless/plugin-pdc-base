<?php

return [

    'posttypes_info' => [
        'pdc-item'        =>
        [
            'id'    => 'pdc-item',
            'title' => _x('PDC item', 'P2P titel', 'pdc-base'),
        ],
        'pdc-category'    =>
        [
            'id'    => 'pdc-category',
            'title' => _x('PDC theme', 'P2P titel', 'pdc-base'),
        ],
        'pdc-subcategory' =>
        [
            'id'    => 'pdc-subcategory',
            'title' => _x('PDC subtheme', 'P2P titel', 'pdc-base'),
        ],
        'pdc-owner'       =>
        [
            'id'    => 'pdc-owner',
            'title' => _x('PDC owner', 'P2P titel', 'pdc-base'),
        ],
        'pdc-maincategory'    =>
        [
            'id'    => 'pdc-maincategory',
            'title' => _x('PDC maintheme', 'P2P titel', 'pdc-base'),
        ],
    ],
    'connections'    => [
        [
            'from'       => 'pdc-item',
            'to'         => 'pdc-maincategory',
            'reciprocal' => true,
        ],
        [
            'from'       => 'pdc-item',
            'to'         => 'pdc-category',
            'reciprocal' => true,
        ],
        [
            'from'       => 'pdc-item',
            'to'         => 'pdc-subcategory',
            'reciprocal' => true,
        ],
        [
            'from'       => 'pdc-maincategory',
            'to'         => 'pdc-category',
            'reciprocal' => true,
        ],
        [
            'from'       => 'pdc-category',
            'to'         => 'pdc-subcategory',
            'reciprocal' => true,
        ],
        [
            'from'       => 'pdc-item',
            'to'         => 'pdc-item',
            'reciprocal' => false,
        ],
    ],
    'connections_exclude_in_active' => [
        'pdc-item_to_pdc-subcategory',
    ],

];
