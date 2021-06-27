@extends('layouts.app');

@section('buttons')
    <a class="btn-primary" href="{{ route('glaccounts.create') }}" role="button">New GL Account</a>
@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <td><input type="checkbox" name="select-all"></td>
            <th>NO.</th>
            <th>NAME</th>
            <th>STATUS</th>
            <th>ACCOUNT CATEGORY</th>
            <th>ACCOUNT TYPE</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($glaccounts as $glaccount)
            <tr>
                <td><input type="checkbox" name={{ $glaccount->no_ }}></td>
                <td> 
                    <a href="{{ action('\App\Http\Controllers\GLAccountController@edit', ['glaccount' => $glaccount->no_]) }}" 
                        alt="Edit" title={{ $glaccount->no_ }}>
                        {{ $glaccount->no_ }}
                    </a>
                </td>
                <td>
                    @if ($glaccount->account_type !== 'Posting')
                        <b>{{ $glaccount->name }}</b>
                    @else
                        {{ $glaccount->name }}    
                    @endif
                </td>
                <td>{{ $glaccount->status }}</td>   
                <td>{{ $glaccount->account_category }}</td>
                <td>{{ $glaccount->account_type }}</td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
@endsection