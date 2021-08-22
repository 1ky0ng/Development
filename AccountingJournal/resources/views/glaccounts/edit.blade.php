<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('GL Accounts') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <button type="submit" name= "action" value="save" form="glaccounts.update" class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200">
            Save</button>
        <button type="submit" name= "action" value="saveclose" form="glaccounts.update" class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200">
            Save & Close</button>
        <a class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200" 
            href="{{ route('glaccounts.edit', ['glaccount' => $glaccount->no_]) }}">Refresh</a>
        <a class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200" 
            href="{{ route('glaccounts.index') }}">Close</a>
        <form action="{{ route('glaccounts.destroy',$glaccount->no_) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="inline-flex items-center h-6 px-4 m-px text-sm transition-colors duration-150 rounded-sm focus:shadow-outline hover:bg-gray-200">Delete</button>
        </form>
    </x-slot>

    <div class="py-1">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200">
                <x-validation-errors />
                <x-success-message />

                <form method="POST" id="glaccounts.update" action="{{ route('glaccounts.update', ['glaccount' => $glaccount]) }}"> 
                    @method('PUT')
                    @csrf
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-label-xs for="no_" :value="__('No.')" />
                            <x-input id="no_" disabled=true class="block mt-1 w-full text-xs" type="text" name="no_" value="{{ $glaccount->no_ }}" autofocus />
                        </div>
                        
                        <div>
                            <x-label-xs for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full text-xs" type="text" name="name" value="{{ $glaccount->name }}" autofocus />
                        </div>
                        
                        <div>
                            <x-label-xs for="account_category" :value="__('Account Category')" />
                            <select id="account_category" name="account_category" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                @foreach ($AccountCategories as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->account_category) && $id === $glaccount->account_category) ? 'selected' : '' }} class="bg-white">
                                        {{ $display }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <x-label-xs for="account_type" :value="__('Account Type')" />
                            <select id="account_type" name="account_type" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                @foreach ($AccountTypes as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->account_type) && $id === $glaccount->account_type) ? 'selected' : '' }} class="bg-white">
                                        {{ $display }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>
                        
                        {{-- account_subcategory --}}
                        
                        <div>
                            <x-label-xs for="income_balance" :value="__('Income / Balance')" />
                            <select id="income_balance" name="income_balance" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                @foreach ($IncomeBalance as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->income_balance) && $id === $glaccount->income_balance) ? 'selected' : '' }} class="bg-white">
                                        {{ $display }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <x-label-xs for="indentation" :value="__('Indentation')" />
                            <x-input id="indentation" class="block mt-1 w-full text-xs" type="number" min="0" name="indentation" value="{{ $glaccount->indentation }}" autofocus />
                        </div>
                        
                        <div>
                            <x-label-xs for="totaling" :value="__('Totaling')" />
                            <x-input id="totaling" class="block mt-1 w-full text-xs" type="text" name="totaling" value="{{ $glaccount->totaling }}" autofocus />
                        </div>
                        
                        <div>
                            <x-label-xs for="debit_credit" :value="__('Debit / Credit')" />
                            <select id="debit_credit" name="debit_credit" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                @foreach ($DebitCredit as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->debit_credit) && $id === $glaccount->debit_credit) ? 'selected' : '' }} class="bg-white">
                                        {{ $display }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-label-xs for="direct_posting" :value="__('Direct Posting')" />
                            <x-input id="direct_posting" class="block mt-1 toggle-checkbox w-5 h-5 rounded-full bg-white border-4 appearance-none cursor-pointer" type="checkbox" name="direct_posting" value="{{ $glaccount->direct_posting }}" autofocus />
                        </div>

                        {{-- <div>
                            <x-toggle label="Direct Posting" name="direct_posting" value={{ $glaccount->direct_posting }} />
                        </div> --}}
                        
                        <div>
                            <x-label-xs for="status" :value="__('Status')" />
                            <select id="status" name="status" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                @foreach ($Statuses as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->status) && $id === $glaccount->status) ? 'selected' : '' }} class="bg-white">
                                        {{ $display }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <x-label-xs for="gen_posting_type" :value="__('General Posting Type')" />
                            <select id="gen_posting_type" name="gen_posting_type" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                @foreach ($GenPostingTypes as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->gen_posting_type) && $id === $glaccount->gen_posting_type) ? 'selected' : '' }} class="bg-white">
                                        {{ $display }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                        </div>

                        <div>
                            <x-label-xs for="gen_buss_posting_group" :value="__('General Business Posting Group')" />
                            <select id="gen_buss_posting_group" name="gen_buss_posting_group" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                <option value="" class="bg-white"></option> 
                                @foreach ($GenBussPostingGroups as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->gen_buss_posting_group) && $id === $glaccount->gen_buss_posting_group) ? 'selected' : '' }} class="bg-white">
                                        {{ $id }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-label-xs for="gen_prod_posting_group" :value="__('General Product Posting Group')" />
                            <select id="gen_prod_posting_group" name="gen_prod_posting_group" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                <option value="" class="bg-white"></option> 
                                @foreach ($GenProdPostingGroups as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->gen_prod_posting_group) && $id === $glaccount->gen_prod_posting_group) ? 'selected' : '' }} class="bg-white">
                                        {{ $id }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-label-xs for="vat_buss_posting_group" :value="__('VAT Business Posting Group')" />
                            <select id="vat_buss_posting_group" name="vat_buss_posting_group" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                <option value="" class="bg-white"></option> 
                                @foreach ($VATBussPostingGroups as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->vat_buss_posting_group) && $id === $glaccount->vat_buss_posting_group) ? 'selected' : '' }} class="bg-white">
                                        {{ $id }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-label-xs for="vat_prod_posting_group" :value="__('VAT Product Posting Group')" />
                            <select id="vat_prod_posting_group" name="vat_prod_posting_group" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                <option value="" class="bg-white"></option> 
                                @foreach ($VATProdPostingGroups as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->vat_prod_posting_group) && $id === $glaccount->vat_prod_posting_group) ? 'selected' : '' }} class="bg-white">
                                        {{ $id }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-label-xs for="wht_buss_posting_group" :value="__('WHT Business Posting Group')" />
                            <select id="wht_buss_posting_group" name="wht_buss_posting_group" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                <option value="" class="bg-white"></option> 
                                @foreach ($WHTBussPostingGroups as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->wht_buss_posting_group) && $id === $glaccount->wht_buss_posting_group) ? 'selected' : '' }} class="bg-white">
                                        {{ $id }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-label-xs for="wht_prod_posting_group" :value="__('WHT Product Posting Group')" />
                            <select id="wht_prod_posting_group" name="wht_prod_posting_group" class="block mt-1 w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" autofocus>
                                <option value="" class="bg-white"></option> 
                                @foreach ($WHTProdPostingGroups as $id => $display)
                                    <option value="{{ $id }}" {{ (isset($glaccount->wht_prod_posting_group) && $id === $glaccount->wht_prod_posting_group) ? 'selected' : '' }} class="bg-white">
                                        {{ $id }}
                                    </option> 
                                @endforeach
                            </select>
                        </div>

                        {{-- 
                        dimension_1_code
                        dimension_2_code
                        balance
                        net_change
                        debit_amount
                        credit_amount
                        --}}
                    </div>

                    {{-- <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Update') }}
                        </x-button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
