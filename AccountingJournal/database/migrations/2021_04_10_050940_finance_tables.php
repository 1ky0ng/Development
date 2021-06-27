<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FinanceTables extends Migration
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
            $table->tinyInteger('account_category')->nullable()->default(0);
            $table->tinyInteger('account_type')->default(0);
            $table->string('account_subcategory', 20)->default('');
            $table->tinyInteger('income_balance')->default(0);
            $table->tinyInteger('indentation')->default(0);
            $table->text('totaling')->nullable()->default('');
            $table->tinyInteger('debit_credit')->default(0);;
            $table->boolean('direct_posting')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('gen_posting_type')->nullable()->default(0);
            $table->string('gen_buss_posting_type', 20)->default('');
            $table->string('gen_prod_posting_type', 20)->default('');
            $table->string('vat_buss_posting_type', 20)->default('');
            $table->string('vat_prod_posting_type', 20)->default('');
            $table->string('wht_buss_posting_type', 20)->default('');
            $table->string('wht_prod_posting_type', 20)->default('');
            $table->string('dimension_1_code', 20)->default('');
            $table->string('dimension_2_code', 20)->default('');
            $table->decimal('balance', 8, 2)->default(0);
            $table->decimal('net_change', 8, 2)->default(0);
            $table->decimal('debit_amount', 8, 2)->default(0);
            $table->decimal('credit_amount', 8, 2)->default(0);
            $table->timestamps();
        });

        Schema::create('general_journal_templates', function (Blueprint $table) {
            $table->string('name', 10)->primary();
            $table->string('description', 100);
            $table->timestamps();
        });

        Schema::create('general_journal_batches', function (Blueprint $table) {
            $table->string('name', 10)->primary();
            $table->string('journal_template_name', 10);
            $table->string('description', 100);
            $table->timestamps();
        });

        Schema::create('general_journal_lines', function (Blueprint $table) {
            $table->integer('entry_no_')->primary();
            $table->string('journal_template_name', 10);
            $table->string('journal_batch_name', 10);
            $table->date('posting_date');
            $table->string('document_no_', 10);
            $table->enum('document_type', [' ', 'Payment', 'Invoice', 'Credit Memo']);
            $table->string('description', 100);
            $table->enum('account_type', ['GL Account', 'Customer', 'Vendor','Bank Account', 'Fixed Asset', 'Product', 'Employee']);
            $table->decimal('amount', 8, 2);
            $table->decimal('debit_amount', 8, 2);
            $table->decimal('credit_amount', 8, 2);
            $table->timestamps();
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
        Schema::dropIfExists('general_journal_templates');
        Schema::dropIfExists('general_journal_batches');
        Schema::dropIfExists('general_journal_lines');
    }
}