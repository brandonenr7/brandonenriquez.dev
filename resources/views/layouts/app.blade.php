<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Personal website, portfolio, and blog of Brandon Enrqiuez" />

    <title>{{ $title ?? config('app.name') }}</title>

    @googlefonts

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900 font-sans antialiased text-gray-800 dark:text-gray-100">
    <div>
        <main>
            {{ $slot }}
        </main>

        <x-footer />
    </div>

    @livewireScripts
</body>

</html>