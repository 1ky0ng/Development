<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WHTProductPostingGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wht_product_posting_groups')->insert([
            'code' => 'NOWHT',
            'description' => 'No Withholding Tax Transaction',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('wht_product_posting_groups')->insert([
            'code' => 'WC158',
            'description' => '1% - Goods',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('wht_product_posting_groups')->insert([
            'code' => 'WC160',
            'description' => '2% - Services',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('wht_product_posting_groups')->insert([
            'code' => 'WI158',
            'description' => '1% - Goods',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('wht_product_posting_groups')->insert([
            'code' => 'WI160',
            'description' => '2% - Services',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
