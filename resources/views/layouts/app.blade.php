<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BP Monitor</title>
    <link href="/css/app.css" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @livewireStyles
</head>
<body class=" bg-blue-100">
    <div class="flex flex-col items-center w-full mb-10">
        <div class="my-10">
            <a href="/" class="text-3xl">
                Patients Records
            </a>
            <div class="mt-3">
                <a href="{{route('index')}}" class="underline">Home</a> |
                <a href="{{route('patients.add')}}" class="underline">Add patient</a> |
                <a href="#" class="underline">Export CSV</a>
            </div>
            @if(Session::has('message'))
                <p class="bg-green-200 p-4 mt-4">{{ Session::get('message') }}</p>
            @endif
        </div>
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>
