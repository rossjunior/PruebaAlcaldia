<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios creados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Agrega un contenedor para la tabla -->
                    <div class="table-responsive">
                        <table id="users-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Municipio</th>
                                    <th>Creado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ optional($user->department)->name }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function () {
            // Inicializa el DataTable con opciones personalizadas
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
    @endpush
</x-app-layout>