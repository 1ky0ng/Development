<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WHTBusinessPostingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wht_business_posting_groups')->insert([
            'code' => 'CORP',
            'description' => 'Corporation',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('wht_business_posting_groups')->insert([
            'code' => 'IND',
            'description' => 'Individual',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('wht_business_posting_groups')->insert([
            'code' => 'NWHT',
            'description' => 'No Withholding',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
    }
}
