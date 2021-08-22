<?php

namespace App\Models;

class Status extends VirtualModel
{
    protected const ITEMS = [
        [
            'id' => 0,
            'title' => 'Draft',
        ],
        [
            'id' => 1,
            'title' => 'Active',
        ],
        [
            'id' => 2,
            'title' => 'Inactive',
        ],
        [
            'id' => 3,
            'title' => 'Blocked',
        ]
    ];
}