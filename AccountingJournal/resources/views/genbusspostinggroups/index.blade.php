<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('General Business Posting Group') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <a class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200" 
            href="{{ url('/genbusspostinggroups/create') }}">New</a>
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
                                        Code
                                    </th>
                                    <th scope="col" class="px-6 py-2 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($genbusspostinggroups as $genbusspostinggroup)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs font-bold">
                                        <a href="{{ route('genbusspostinggroups.edit', ['genbusspostinggroup' => $genbusspostinggroup->code]) }}" class="text-indigo-600 hover:text-indigo-900">{{ $genbusspostinggroup->code }}</a>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs text-gray-500">
                                        {{ $genbusspostinggroup->description }}
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