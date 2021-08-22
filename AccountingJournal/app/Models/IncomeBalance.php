<?php

namespace App\Models;

class IncomeBalance extends VirtualModel
{
    protected const ITEMS = [
        [
            'id' => 0,
            'title' => 'Income Statement',
        ],
        [
            'id' => 1,
            'title' => 'Balance Sheet',
        ]
    ];
}