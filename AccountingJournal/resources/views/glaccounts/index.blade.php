<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('GL Accounts') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <a class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200" 
            href="{{ url('/glaccounts/create') }}">New</a>
        {{-- <a class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200" 
            href="{{ url('/glaccounts/destroy') }}">Delete</a> --}}
    </x-slot>

    <div class="py-1">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        Net Change
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        Balance
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        Account Category
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        Account Type
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        Totaling
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($glaccounts as $glaccount)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs font-bold">
                                        <a href="{{ route('glaccounts.edit', ['glaccount' => $glaccount->no_]) }}" class="text-indigo-600 hover:text-indigo-900">{{ $glaccount->no_ }}</a>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs text-gray-500">
                                        {{ $glaccount->name }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs text-gray-500">
                                        @if ($glaccount->net_change > 0)
                                            <a href="" alt="Net Change" title="NetChange_"{{ $glaccount->no_ }}>
                                                {{ $glaccount->net_change }}
                                            </a>
                                        @else
                                            -  
                                        @endif
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs text-gray-500">
                                        @if ($glaccount->balance > 0)
                                            <a href="" alt="Balance" title="Balance_"{{ $glaccount->no_ }}>
                                                {{ $glaccount->balance }}
                                            </a>
                                        @else
                                            -  
                                        @endif
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs text-gray-500">
                                        {{ $AccountCategories[$glaccount->account_category] }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs text-gray-500">
                                        {{ $AccountTypes[$glaccount->account_type] }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs text-gray-500">
                                        {{ $glaccount->totaling }}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        {{-- <div class="mt-4">
                        {{ $glaccounts->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
