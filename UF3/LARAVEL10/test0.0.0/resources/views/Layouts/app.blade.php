<html>
<!-- Incluimos la vista navigation donde esta el menu -->
@include('Menu.header')

<body>
    {{-- <x-navigation> --}}

    <!-- Header de la paguina -->
    <header>
        <h1>Laravel</h1>
    </header>

    <!-- Incluimos la vista navigation donde esta el menu -->
    @include('Menu.navigation')

    <!-- Contenido de la pagina -->
    @yield('content')

</body>
