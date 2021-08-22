<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenProductPostingGroup extends Model
{
    use HasFactory;

    protected $table = 'gen_product_posting_groups';
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $fillable = ['code', 'description'];
}
