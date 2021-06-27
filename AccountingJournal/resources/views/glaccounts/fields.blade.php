<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="no_">No.</label>
            <div class="col-sm-8">
                <input name="no_" type="text" class="form-control" placeholder="No." value="{{ $glaccount->no_}}"/>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="name">Name</label>
            <div class="col-sm-8">
                <input name="name" type="text" class="form-control" placeholder="Name" value="{{ $glaccount->name}}"/>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="account_category">Account Category</label>
            <div class="col-sm-8">
                <select name="account_category" class="form-control" id="account_category" required>
                    @foreach ($AccountCategories as $acctCategory)
                        <option value="{{ $acctCategory }}" {{ (isset($glaccount->account_category) && $acctCategory === $glaccount->account_category) ? 'selected' : '' }}>{{ $acctCategory }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="account_type">Account Type</label>
            <div class="col-sm-8">
                <select name="account_type" class="form-control" id="account_type" required>
                    @foreach ($AccountTypes as $acctType)
                        <option value="{{ $acctType }}" {{ (isset($glaccount->account_type) && $acctType === $glaccount->account_type) ? 'selected' : '' }}>{{ $acctType }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="account_subcategory">Account Sub-Category</label>
            <div class="col-sm-8">
                {{-- <select name="account_subcategory" class="form-control" id="account_subcategory" required>
                    Lookup to Account SubCategory Table
                </select> --}}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="income_balance">Income/Balance</label>
            <div class="col-sm-8">
                <select name="income_balance" class="form-control" id="income_balance" required>
                    @foreach ($IncomeBalance as $incomeBalance)
                        <option value="{{ $incomeBalance }}" {{ (isset($glaccount->income_balance) && $incomeBalance === $glaccount->income_balance) ? 'selected' : '' }}>{{ $incomeBalance }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="no_">Indentation</label>
            <div class="col-sm-8">
                <input name="indentation" type="number" class="form-control" placeholder="Indentation" value="{{ $glaccount->indentation}}"/>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="name">Totaling</label>
            <div class="col-sm-8">
                <input name="totaling" type="text" class="form-control" placeholder="Totaling" value="{{ $glaccount->totaling}}"/>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="debit_credit">Income/Balance</label>
            <div class="col-sm-8">
                <select name="debit_credit" class="form-control" id="debit_credit" required>
                    @foreach ($DebitCredit as $debitCredit)
                        <option value="{{ $debitCredit }}" {{ (isset($glaccount->debit_credit) && $debitCredit === $glaccount->debit_credit) ? 'selected' : '' }}>{{ $debitCredit }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <div class="col-sm-4" for="direct_posting">Direct Posting</div>
            <div class="col-sm-8">
                <div class="form-check">
                    <input name="direct_posting" type="checkbox" class="form-check-input" value="1" {{ $glaccount->direct_posting ? 'checked' : '' }}/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="status">Status</label>
            <div class="col-sm-8">
                <select name="status" class="form-control" id="status" required>
                    @foreach ($Statuses as $status)
                        <option value="{{ $status }}" {{ (isset($glaccount->status) && $status === $glaccount->status) ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="gen_posting_type">General Posting Type</label>
            <div class="col-sm-8">
                <select name="gen_posting_type" class="form-control" id="gen_posting_type" required>
                    @foreach ($GenPostingTypes as $genPostingType)
                        <option value="{{ $genPostingType }}" {{ (isset($glaccount->gen_posting_type) && $genPostingType === $glaccount->gen_posting_type) ? 'selected' : '' }}>{{ $genPostingType }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="gen_buss_posting_type">Gen. Business Posting Type</label>
            <div class="col-sm-8">
                {{-- <select name="gen_buss_posting_type" class="form-control" id="gen_buss_posting_type" required>
                    Lookup to Gen. Business Posting Type Table
                </select> --}}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="gen_prod_posting_type">Gen. Product Posting Type</label>
            <div class="col-sm-8">
                {{-- <select name="gen_prod_posting_type" class="form-control" id="gen_prod_posting_type" required>
                    Lookup to Gen. Product Posting Type Table
                </select> --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="vat_buss_posting_type">VAT Business Posting Type</label>
            <div class="col-sm-8">
                {{-- <select name="vat_buss_posting_type" class="form-control" id="vat_buss_posting_type" required>
                    Lookup to VAT Business Posting Type Table
                </select> --}}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="vat_prod_posting_type">VAT Product Posting Type</label>
            <div class="col-sm-8">
                {{-- <select name="vat_prod_posting_type" class="form-control" id="vat_prod_posting_type" required>
                    Lookup to VAT Product Posting Type Table
                </select> --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="wht_buss_posting_type">WHT Business Posting Type</label>
            <div class="col-sm-8">
                {{-- <select name="wht_buss_posting_type" class="form-control" id="wht_buss_posting_type" required>
                    Lookup to WHT Business Posting Type Table
                </select> --}}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="wht_prod_posting_type">WHT Product Posting Type</label>
            <div class="col-sm-8">
                {{-- <select name="wht_prod_posting_type" class="form-control" id="wht_prod_posting_type" required>
                    Lookup to WHT Product Posting Type Table
                </select> --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="dimension_1_code">Dimension 1 Code</label>
            <div class="col-sm-8">
                {{-- <select name="dimension_1_code" class="form-control" id="dimension_1_code" required>
                    Lookup to Dimension Table filter dimension_no=1
                </select> --}}
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="dimension_2_code">Dimension 2 Code</label>
            <div class="col-sm-8">
                {{-- <select name="dimension_2_code" class="form-control" id="dimension_2_code" required>
                    Lookup to Dimension Table filter dimension_no=2
                </select> --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="balance">Balance</label>
            <div class="col-sm-8">
                @if ($glaccount->balance > 0)
                    <a href="" alt="Balance" title="Balance_"{{ $glaccount->no_ }}>
                        {{ $glaccount->balance }}
                    </a>
                @else
                    -    
                @endif
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="net_change">Net Change</label>
            <div class="col-sm-8">
                @if ($glaccount->net_change > 0)
                    <a href="" alt="Net Change" title="NetChange_"{{ $glaccount->no_ }}>
                        {{ $glaccount->net_change }}
                    </a>
                @else
                    -    
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="debit_amount">Debit Amount</label>
            <div class="col-sm-8">
                @if ($glaccount->debit_amount > 0)
                    <a href="" alt="Debit Amount" title="DebitAmount_"{{ $glaccount->no_ }}>
                        {{ $glaccount->debit_amount }}
                    </a>
                @else
                    -    
                @endif
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"for="credit_amount">Credit Amount</label>
            <div class="col-sm-8">
                @if ($glaccount->credit_amount > 0)
                    <a href="" alt="Credit Amount" title="CreditAmount_"{{ $glaccount->no_ }}>
                        {{ $glaccount->credit_amount }}
                    </a>
                @else
                    -    
                @endif
            </div>
        </div>
    </div>
</div>

@csrf