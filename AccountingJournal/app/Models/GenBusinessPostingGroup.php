<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenBusinessPostingGroup extends Model
{
    use HasFactory;

    protected $table = 'gen_business_posting_groups';
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $fillable = ['code', 'description'];

    /**
     * Set the code to Upper Case.
     *
     * @param  string  $value
     * @return void
     */
    public function setCodeAttribute($value)
    {
        $this->attributes['code'] = strtoupper($value);
    }
}
