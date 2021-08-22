<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WHTProductPostingGroup extends Model
{
    use HasFactory;

    protected $table = 'wht_product_posting_groups';
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $fillable = ['code', 'description'];
}
