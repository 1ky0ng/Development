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
</div>

@csrf