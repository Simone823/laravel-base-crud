<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('headeTilte')</title>
</head>
<body>

    {{-- Include header --}}
    @include('components.header')
    
    {{-- Main --}}
    <main>
        @yield('mainContent')
    </main>

</body>
</html>