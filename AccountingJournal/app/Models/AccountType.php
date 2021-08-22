<?php

namespace App\Models;

class AccountType extends VirtualModel
{
    protected const ITEMS = [
        [
            'id' => 0,
            'title' => 'Posting',
        ],
        [
            'id' => 1,
            'title' => 'Heading',
        ],
        [
            'id' => 2,
            'title' => 'Total',
        ],
        [
            'id' => 3,
            'title' => 'Begin-Total',
        ],
        [
            'id' => 4,
            'title' => 'End-Total',
        ]
    ];
}