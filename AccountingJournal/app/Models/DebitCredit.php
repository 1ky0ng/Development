<?php

namespace App\Models;

class DebitCredit extends VirtualModel
{
    protected const ITEMS = [
        [
            'id' => 0,
            'title' => 'Both',
        ],
        [
            'id' => 1,
            'title' => 'Debit',
        ],
        [
            'id' => 2,
            'title' => 'Credit',
        ]
    ];
}