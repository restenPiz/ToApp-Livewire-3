<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Início dos links do bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
    {{-- Fim dos links do bootstrap --}}

</head>
<body class="antialiased">
    
    {{-- Início do corpo da minha website --}}
    @livewire('task-controller')
    {{-- Fim do corpo do meu website --}}

    @include('sweetalert::alert')

    {{-- Início do link de javascript --}}
    
    {{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>    

    @livewireScripts

</body>
</html>
