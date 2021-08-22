<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VATProductPostingGroup extends Model
{
    use HasFactory;

    protected $table = 'vat_product_posting_groups';
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $fillable = ['code', 'description'];
}
