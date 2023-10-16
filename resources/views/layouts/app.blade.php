<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, viewport-fit=cover"
        />
        <meta name="description" content="{{ $description ?? '' }}" />

        <meta name="og:title" content="{{ $title ?? config('app.name') }}" />
        <meta name="og:description" content="{{ $description ?? '' }}" />
        <meta name="og:url" content="{{ url()->current() }}" />
        <meta name="og:type" content="website" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:creator" content="@brandonenr7" />
        <meta
            name="twitter:title"
            content="{{ $title ?? config('app.name') }}"
        />
        <meta name="twitter:description" content="{{ $description ?? '' }}" />

        @if ($image)
            <meta name="og:image" content="{{ $image }}" />
            <meta name="twitter:image" content="{{ $image }}" />
        @endif

        @if (app()->environment('production'))
            <script
                src="https://cdn.usefathom.com/script.js"
                data-spa="auto"
                data-site="HUQHWHBM"
                defer
            ></script>
        @endif

        <title>
            {{ ! empty($title) ? $title.' - '.config('app.name') : config('app.name') }}
            
        </title>

        @googlefonts

        @livewireStyles

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
        <div>
            <main>
                {{ $slot }}
            </main>

            <x-footer />
        </div>

        @livewireScripts
    </body>
</html>
