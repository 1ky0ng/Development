<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gl_accounts', function (Blueprint $table) {
            $table->string('no_', 20)->primary();
            $table->string('name', 100);
            $table->unsignedTinyInteger('account_category')->default(0);
            $table->unsignedTinyInteger('account_type')->default(0);
            $table->string('account_subcategory', 20)->nullable()->default('');
            $table->unsignedTinyInteger('income_balance')->default(0);
            $table->unsignedTinyInteger('indentation')->default(0);
            $table->text('totaling')->nullable()->default('');
            $table->unsignedTinyInteger('debit_credit')->default(0);;
            $table->boolean('direct_posting')->default(0);
            $table->unsignedTinyInteger('status')->default(1);
            $table->unsignedTinyInteger('gen_posting_type')->nullable()->default(0);
            $table->string('gen_buss_posting_group', 20)->nullable()->default('');
            $table->string('gen_prod_posting_group', 20)->nullable()->default('');
            $table->string('vat_buss_posting_group', 20)->nullable()->default('');
            $table->string('vat_prod_posting_group', 20)->nullable()->default('');
            $table->string('wht_buss_posting_group', 20)->nullable()->default('');
            $table->string('wht_prod_posting_group', 20)->nullable()->default('');
            $table->string('dimension_1_code', 20)->nullable()->default('');
            $table->string('dimension_2_code', 20)->nullable()->default('');
            $table->decimal('balance', 8, 2)->default(0);
            $table->decimal('net_change', 8, 2)->default(0);
            $table->decimal('debit_amount', 8, 2)->default(0);
            $table->decimal('credit_amount', 8, 2)->default(0);
            $table->timestamps();

            //$table->foreign('account_subcategory')->nullable()->references('code')->on('account_subcategories');
            $table->foreign('gen_buss_posting_group')->nullable()->references('code')->on('gen_business_posting_groups');
            $table->foreign('gen_prod_posting_group')->nullable()->references('code')->on('gen_product_posting_groups');
            $table->foreign('vat_buss_posting_group')->nullable()->references('code')->on('vat_business_posting_groups');
            $table->foreign('vat_prod_posting_group')->nullable()->references('code')->on('vat_product_posting_groups');
            $table->foreign('wht_buss_posting_group')->nullable()->references('code')->on('wht_business_posting_groups');
            $table->foreign('wht_prod_posting_group')->nullable()->references('code')->on('wht_product_posting_groups');
            // $table->foreign('dimension_1_code')->nullable()->references('code')->on('dimensions');
            // $table->foreign('dimension_2_code')->nullable()->references('code')->on('dimensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gl_accounts');
    }
}
