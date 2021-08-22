<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VATBusinessPostingGroup extends Model
{
    use HasFactory;

    protected $table = 'vat_business_posting_groups';
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $fillable = ['code', 'description'];
}
