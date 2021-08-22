<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.topbar')
            
            <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden">
                <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
                    @include('layouts.navigation')
                </aside>

                <div class="flex-1">
                    <header class="bg-white shadow flex">
                        <button class="p-1" @click="sidebarOpen = !sidebarOpen">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div class="py-2 px-4 sm:px-6 lg:px-8 rounded-lg">
                            {{ $header }}
                        </div>
                    </header>

                    <!-- Page Content -->
                    <main>
                        <div class="bg-white flex items-center mt-1">
                            {{ $actions }}
                        </div>

                        {{ $slot }}
                    </main>
                </div>
              </div>
        </div>
    </body>
</html>
