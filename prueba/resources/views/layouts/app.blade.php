<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">-->


       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <link href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- DataTables JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable({
                searching: true, // Habilita la funcionalidad de búsqueda
                paging: true, // Habilita la paginación
                ordering: true, // Habilita la ordenación
                lengthChange: false, // Oculta el control para cambiar el número de filas por página
                info: true, // Muestra la información de paginación
                responsive: true, // Habilita la funcionalidad de tabla receptiva
                language: {
                    search: "_INPUT_", // Personaliza el texto del cuadro de búsqueda
                    searchPlaceholder: "Buscar...", // Personaliza el marcador de posición del cuadro de búsqueda
                    paginate: {
                        first: "Primero", // Personaliza el botón "Primero" de paginación
                        previous: "Anterior", // Personaliza el botón "Anterior" de paginación
                        next: "Siguiente", // Personaliza el botón "Siguiente" de paginación
                        last: "Último" // Personaliza el botón "Último" de paginación
                    },
                    info: "Mostrando _START_ a _END_ de _TOTAL_ registros", // Personaliza el texto de información de paginación
                    infoEmpty: "Mostrando 0 a 0 de 0 registros", // Personaliza el texto de información cuando no hay registros
                    infoFiltered: "(filtrado de _MAX_ registros totales)" // Personaliza el texto de información cuando se aplica filtrado
                }
            });
        });
    </script>
</html>
