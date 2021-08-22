<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('General Business Posting Group') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <button type="submit" name= "action" value="save" form={{$formIdSave}} class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200">
            Save</button>
        <button type="submit" name= "action" value="saveclose" form={{$formIdSave}} class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200">
            Save & Close</button>

        @isset($genbusspostinggroup->code)
            <a class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200" 
                href="{{ route('genbusspostinggroups.edit', ['genbusspostinggroup' => $genbusspostinggroup]) }}">Refresh</a>
            
            <form action="{{ route('genbusspostinggroups.destroy',$genbusspostinggroup->code) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200">Delete</button>
            </form>
        @endisset
        
        <a class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200" 
            href="{{ route('genbusspostinggroups.index') }}">Close</a>
    </x-slot>

    <div class="py-1">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200">
                <x-validation-errors />
                <x-success-message />

                <form method="POST" id={{$formIdSave}} action={{$actionTypeSave}}>
                    @isset($genbusspostinggroup->code)
                        @method('PUT')
                    @endisset

                    @csrf
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-label-xs for="code" :value="__('Code')" />

                            <x-input id="code" class="block mt-1 w-full text-xs readonly" type="text" name="code" value="{{ $genbusspostinggroup->code }}" autofocus />
                            {{-- disabled={{ $genbusspostinggroup->code == '' ? '' : 'disabled' }}  --}}
                        </div>
                        
                        <div>
                            <x-label-xs for="description" :value="__('Description')" />
                            <x-input id="description" class="block mt-1 w-full text-xs" type="text" name="description" value="{{ $genbusspostinggroup->description }}" autofocus />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
