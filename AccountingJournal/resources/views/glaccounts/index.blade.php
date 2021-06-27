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
            <th>NET CHANGE</th>
            <th>BALANCE</th>
            <th>STATUS</th>
            <th>ACCOUNT CATEGORY</th>
            <th>INCOME/BALANCE</th>
            <th>ACCOUNT TYPE</th>
            <th>TOTALING</th>
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
                <td>
                    @if ($glaccount->net_change > 0)
                        <a href="" alt="Net Change" title="NetChange_"{{ $glaccount->no_ }}>
                            {{ $glaccount->net_change }}
                        </a>
                    @else
                        -  
                    @endif
                </td>
                <td>
                    @if ($glaccount->balance > 0)
                        <a href="" alt="Balance" title="Balance_"{{ $glaccount->no_ }}>
                            {{ $glaccount->balance }}
                        </a>
                    @else
                        -  
                    @endif
                </td>
                <td>{{ $glaccount->status }}</td>   
                <td>{{ $glaccount->account_category }}</td>
                <td>{{ $glaccount->income_balance }}</td>
                <td>{{ $glaccount->account_type }}</td>
                <td>{{ $glaccount->totaling }}</td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
@endsection