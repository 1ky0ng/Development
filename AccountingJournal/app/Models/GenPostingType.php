<?php

namespace App\Models;

class GenPostingType extends VirtualModel
{
    protected const ITEMS = [
        [
            'id' => 0,
            'title' => ' ',
        ],
        [
            'id' => 1,
            'title' => 'Purchases',
        ],
        [
            'id' => 2,
            'title' => 'Sales',
        ]
    ];
}