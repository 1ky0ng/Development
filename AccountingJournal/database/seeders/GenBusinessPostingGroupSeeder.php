<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenBusinessPostingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gen_business_posting_groups')->insert([
            'code' => 'T-LOCAL',
            'description' => 'Local Trade customers and vendors',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('gen_business_posting_groups')->insert([
            'code' => 'NT-LOCAL',
            'description' => 'Local Non-Trade customers and vendors',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('gen_business_posting_groups')->insert([
            'code' => 'IMPORT',
            'description' => 'Foreign Customer and Vendor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
