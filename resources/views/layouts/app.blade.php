<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- Livewire styles -->
    <livewire:styles />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app-admin.css') }}">
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
</head>

<body class="overflow-x-hidden bg-body dark:bg-dark-bg">
    @include('admin.partials.loader')

    <div>
        @include('layouts.admin.sidebar')
        <main class="flex flex-col justify-between h-screen main-content" x-data="{ data: true }">
            <div class="relative">
                @include('layouts.admin.navbar')
            </div>
            <div class="p-6 py-0 mt-4 mb-auto lg:p-10 lg:py-0 container-fluid">
                <div class="flex flex-wrap">
                    {{ $slot }}
                </div>
            </div>
            @include('layouts.admin.footer')
        </main>
    </div>
    <!-- Scripts -->
    @livewireScripts
    <script src="{{ asset('js/theme/libs.min.js') }}"></script>
    <script src="{{ asset('js/theme/external.min.js') }}"></script>
    <script src="{{ asset('js/theme/hope-ui.js') }}"></script>
    <script src="{{ mix('js/app-admin.js') }}"></script>
    @stack('scripts')
</body>

</html>
