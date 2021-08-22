<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('VAT Business Posting Group') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200">
                <x-validation-errors />
                <x-success-message />

                <form method="POST" action="{{ route('vatbusspostinggroups.update', ['vatbusspostinggroup' => $vatbusspostinggroup]) }}">
                    @method('PUT')
                    @csrf
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-label-xs for="code" :value="__('Code')" />
                            <x-input id="code" disabled=true class="block mt-1 w-full text-xs" type="text" name="code" value="{{ $vatbusspostinggroup->code }}" autofocus />
                        </div>
                        
                        <div>
                            <x-label-xs for="description" :value="__('Description')" />
                            <x-input id="description" class="block mt-1 w-full text-xs" type="text" name="description" value="{{ $vatbusspostinggroup->description }}" autofocus />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
