<fieldset>
    <div class="form-group">
        {!! Form::label('no_', 'No.:') !!}
        {!! Form::text('no_', $glaccount->no_) !!}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', $glaccount->name) }}
    </div>

    <div class="form-group">
        {{ Form::label('account_category', 'Account Category') }}
        {{ Form::select('account_category', $AccountCategories, $glaccount->account_category) }}
    </div>

    <div class="form-group">
        {{ Form::label('account_type', 'Account Type') }}
        {{ Form::select('account_type', $AccountTypes, $glaccount->account_type) }}
    </div>

    <div class="form-group">
        {{ Form::label('account_subcategory', 'Account Sub-Category') }}
        {{ Form::text('account_subcategory', '') }}
    </div>

    <div class="form-group">
        {{ Form::label('income_balance', 'Income / Balance') }}
        {{ Form::select('income_balance', $IncomeBalance, $glaccount->income_balance) }}
    </div>

    <div class="form-group">
        {{ Form::label('indentation', 'Indentation') }}
        {{ Form::number('indentation', $glaccount->indentation) }}
    </div>

    <div class="form-group">
        {{ Form::label('totaling', 'Totaling') }}
        {{ Form::text('totaling', $glaccount->totaling) }}
    </div>

    <div class="form-group">
        {{ Form::label('debit_credit', 'Debit / Credit') }}
        {{ Form::select('debit_credit', $DebitCredit, $glaccount->account_category) }}
    </div>

    <div class="form-group">
        {{ Form::label('direct_posting', 'Direct Posting') }}
        {{ Form::checkbox('direct_posting', $glaccount->direct_posting) }}
    </div>

    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::select('status', $Statuses, $glaccount->status) }}
    </div>

    <div class="form-group">
        {{ Form::label('gen_posting_type', 'General Posting Type') }}
        {{ Form::select('gen_posting_type', $AccountTypes, $glaccount->gen_posting_type) }}
    </div>
</fieldset>