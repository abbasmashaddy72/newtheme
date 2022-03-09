<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('styles')
    @livewireStyles

    <!-- Switch -->
    <script>
        if (localStorage.getItem('dark-mode') == 'true' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }
    </script>
</head>

<body class="antialiased tracking-tight text-gray-900 bg-white font-inter dark:bg-gray-900 dark:text-gray-100">

    <!-- Page wrapper -->
    <div class="flex flex-col min-h-screen overflow-hidden">

        <!-- Site header -->
        @include('frontend.partials.header')

        <!-- Page content -->
        <main class="grow">
            @stack('main')
        </main>

        <!-- Site footer -->
        @include('frontend.partials.footer')
    </div>

    <!-- Main Scripts -->
    @livewireScripts
    @stack('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
    @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">
            //<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>"
                .replace("HOST", location.hostname));
            //]]>
        </script>
    @endif
</body>

</html>
