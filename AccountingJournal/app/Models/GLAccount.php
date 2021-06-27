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

    public const IncomeBalance = [
        'Income Statement',
        'Balance Sheet'
    ];

    public const DebitCredit = [
        'Both',
        'Debit',
        'Credit'
    ];

    public const Statuses = [
        'Inactive',
        'Active',
        'Blocked'
    ];

    public const GenPostingTypes = [
        ' ',
        'Purchase',
        'Sales'
    ];

    protected $table = 'gl_accounts';
    protected $primaryKey = 'no_';
    public $incrementing = false;
    protected $fillable = ['no_', 'name', 'account_category', 'account_type', 'account_subcategory', 'income_balance', 'indentation', 'totaling', 'debit_credit', 'direct_posting', 'status', 'gen_posting_type', 'gen_buss_posting_type', 'gen_prod_posting_type', 'vat_buss_posting_type', 'vat_prod_posting_type', 'wht_buss_posting_type', 'wht_prod_posting_type', 'dimension_1_code', 'dimension_2_code'];
    protected static $enums = [
        'AccountCategories' => 'account_category',
        'AccountTypes' => 'account_type',
        'IncomeBalance' => 'income_balance',
        'DebitCredit' => 'debit_credit',
        'Statuses' => 'status',
        'GenPostingTypes' => 'gen_posting_type'
    ];
}
