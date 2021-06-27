@extends('layouts.app')

@section('content')
<div class="col">
    <form action="{{ route('glaccounts.store') }}" method="POST">
        @include('glaccounts.fields');

        <div class="form-group row">
            <div class="col-sm-10">
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <div class="col-sm-1">
                <a href="{{ route('glaccounts.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection