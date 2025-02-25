<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" data-theme="dark" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-900 text-slate-50 h-full">
    {{$slot}}
</body>

</html>
