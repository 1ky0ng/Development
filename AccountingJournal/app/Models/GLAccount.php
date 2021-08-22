<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GLAccount extends Model
{
    use HasFactory;

    protected $table = 'gl_accounts';
    protected $primaryKey = 'no_';
    public $incrementing = false;
    protected $fillable = [
        'no_',
        'name',
        'account_category',
        'account_type',
        'account_subcategory',
        'income_balance',
        'indentation',
        'totaling',
        'debit_credit',
        'direct_posting',
        'status',
        'gen_posting_type',
        'gen_buss_posting_group',
        'gen_prod_posting_group',
        'vat_buss_posting_group',
        'vat_prod_posting_group',
        'wht_buss_posting_group',
        'wht_prod_posting_group',
        'dimension_1_code',
        'dimension_2_code'
    ];

    protected $attributes = [
        'indentation' => 0,
        'status' => 1,
    ];


    // public function getNext()
    // {  
    //     $glAcctNo = Model::all()->last()->no_;
    //     return ((int)$glAcctNo + 1);
    // }
}
