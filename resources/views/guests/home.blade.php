<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- csfr token --}}
    <meta name="csrf_token" content="{{csrf_token()}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script src="{{ asset('js/front.js')}}" defer></script>

    <title>{{ config('app.name', 'Boolpress') }}</title>
</head>
<body> 
    <div id="root">
    </div>
</body>
</html>