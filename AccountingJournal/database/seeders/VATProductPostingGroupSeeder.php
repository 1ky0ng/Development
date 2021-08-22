<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VATProductPostingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vat_product_posting_groups')->insert([
            'code' => 'EXEMPT',
            'description' => 'VAT Exempt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_product_posting_groups')->insert([
            'code' => 'GOODS',
            'description' => 'Goods 12%',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_product_posting_groups')->insert([
            'code' => 'NONVAT',
            'description' => 'Non-VAT',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_product_posting_groups')->insert([
            'code' => 'SERVICES',
            'description' => 'Services 12%',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_product_posting_groups')->insert([
            'code' => 'VAT',
            'description' => 'Manual VAT 12%',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('vat_product_posting_groups')->insert([
            'code' => 'ZERO',
            'description' => 'Zero-Rated',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
