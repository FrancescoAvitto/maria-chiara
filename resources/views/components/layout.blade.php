<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ $meta ?? "" }}

        @livewireStyles
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="./media/Logo/Pittogramma/Export_150x150.png" type="image/x-icon">
        <title>{{ $title ?? "Unaltropaiodimaniche" }}</title>
    </head>
    <body>
        <x-navbar/>
        {{ $slot }}
        <x-footer/>
        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>