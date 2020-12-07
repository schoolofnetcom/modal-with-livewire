<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
    </head>

    <body>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1>Trabalhando com modal no Livewire</h1>

            @livewire('modal')
        </div>
        @livewireScripts
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
