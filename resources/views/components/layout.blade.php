{{-- THIS IS THE MAIN PAGE, HERE WE ADD COMPONENTS AND OTHER THINGS --}}

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900 flex flex-col min-h-screen">

    <header class="bg-slate-800 shadow-lg">

        {{-- THIS IS THE NAVIGATION BAR --}}
        <x-partials.navigation />

    </header>

    <main class="py-4">
        {{ $slot }}
    </main>

    <footer class="bg-gray-900 text-gray-300 mt-auto">

        {{-- THIS IS THE FOOTER SECTION --}}
        <x-partials.footer />

    </footer>

</body>
</html>
