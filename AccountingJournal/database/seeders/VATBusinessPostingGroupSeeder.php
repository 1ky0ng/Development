<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VATBusinessPostingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vat_business_posting_groups')->insert([
            'code' => 'IMPORT',
            'description' => 'Foreign Customer and Vendor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_business_posting_groups')->insert([
            'code' => 'NT-LOCAL',
            'description' => 'Non-Trade Local Customer and Vendor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_business_posting_groups')->insert([
            'code' => 'T-LOCAL',
            'description' => 'Local Trade Customer and Vendor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_business_posting_groups')->insert([
            'code' => 'VAT',
            'description' => 'Manual VAT',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
