<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Http\Traits\EnumTraits;

class GLAccount extends Model
{
    use HasFactory;
    use EnumTraits;
    
    public const AccountCategories = [
        ' ',
        'Assets',
        'Liablities',
        'Equityies',
        'Incomes',
        'Cost of Goods Sold',
        'Expenses' 
    ];

    public const AccountTypes = [
        'Posting',
        'Heading',
        'Total',
        'Begin-Total',
        'End-Total'
    ];

    public const Statuses = [
        'Inactive',
        'Active',
        'Blocked'
    ];

    protected $table = 'gl_accounts';
    protected $primaryKey = 'no_';
    public $incrementing = false;
    protected $fillable = ['no_', 'name', 'account_category', 'account_type', 'status'];
    protected static $enums = [
        'AccountCategories' => 'account_category',
        'AccountTypes' => 'account_type',
        'Statuses' => 'status'
    ];
}
