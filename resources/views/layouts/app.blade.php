<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')
    @include('layouts.partials.style')

    @livewireStyles

    @stack('styles')

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
</head>

<body @stack('body-atribute')>
    @include('layouts.partials.navbar')

    @include('layouts.partials.sidebar')

    @yield('content')

    @include('layouts.partials.scripts') 
    
    @livewireScripts

    @stack('scripts')

   

</body>

</html>