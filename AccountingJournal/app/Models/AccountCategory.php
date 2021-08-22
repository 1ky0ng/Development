<?php

namespace App\Models;

class AccountCategory extends VirtualModel
{
    protected const ITEMS = [
        [
            'id' => 0,
            'title' => ' ',
        ],
        [
            'id' => 1,
            'title' => 'Assets',
        ],
        [
            'id' => 2,
            'title' => 'Liablities',
        ],
        [
            'id' => 3,
            'title' => 'Equities',
        ],
        [
            'id' => 4,
            'title' => 'Incomes',
        ],
        [
            'id' => 5,
            'title' => 'Cost of Goods Sold',
        ],
        [
            'id' => 6,
            'title' => 'Expenses',
        ]
    ];
}
