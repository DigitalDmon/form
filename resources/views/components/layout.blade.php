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
<body class="bg-slate-100 text-slate-900">

<header class="bg-slate-800 shadow-lg">

    {{-- THIS IS THE NAVIGATION BAR --}}
    <x-partials.navigation />

</header>

<main class="py-2 px-4 h-full">
    {{ $slot }}
</main>

</body>
</html>
