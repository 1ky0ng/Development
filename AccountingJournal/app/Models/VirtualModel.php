<?php

namespace App\Models;

abstract class VirtualModel
{
    protected const ITEMS = [];
    
    public static function all()
    {
        return collect(static::ITEMS)->all();
    }

    public static function pluck($cols)
    {
        return collect(static::ITEMS)->pluck($cols);
    }
}