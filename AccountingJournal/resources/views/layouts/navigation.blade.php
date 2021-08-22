<nav x-data="{ open: false }" class="py-4 px-4 border-b border-gray-100">
    <ul>
        <li>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>                    
        </li>
        <li>
            <x-nav-link :href="route('glaccounts.index')" :active="request()->routeIs('glaccounts.index')">
                {{ __('GL Accounts') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('genbusspostinggroups.index')" :active="request()->routeIs('genbusspostinggroups.index')">
                {{ __('Gen. Business Posting Groups') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('genprodpostinggroups.index')" :active="request()->routeIs('genprodpostinggroups.index')">
                {{ __('Gen. Product Posting Groups') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('vatbusspostinggroups.index')" :active="request()->routeIs('vatbusspostinggroups.index')">
                {{ __('VAT Business Posting Groups') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('vatprodpostinggroups.index')" :active="request()->routeIs('vatprodpostinggroups.index')">
                {{ __('VAT Product Posting Groups') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('whtbusspostinggroups.index')" :active="request()->routeIs('whtbusspostinggroups.index')">
                {{ __('WHT Business Posting Groups') }}
            </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('whtprodpostinggroups.index')" :active="request()->routeIs('whtprodpostinggroups.index')">
                {{ __('WHT Product Posting Groups') }}
            </x-nav-link>
        </li>
    </ul>
</nav>