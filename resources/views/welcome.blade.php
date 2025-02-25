<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" data-theme="dark" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-red-900 text-slate-50 h-full">
    <h1 class="font-bold text-6xl">Hello World</h1>
</body>

</html>
