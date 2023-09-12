<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <!-- Agrega enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo personalizado para el footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item">Jordy José Orantes Castañeda </li>
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Características</a></li>
            <li class="nav-item"><a href="{{ route('estudiantes.index') }}" class="nav-link">Listado de estudiantes</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Tipos de sangre</a></li>
        </ul>
    </header>
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevo</button>
        <h2>Tabla de Estudiantes</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Carnet</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Tipo de Sangre</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultado as $estudiante)
                <tr>
                    <td>{{ $estudiante->id_estudiante }}</td>
                    <td>{{ $estudiante->carne }}</td>
                    <td>{{ $estudiante->nombres }}</td>
                    <td>{{ $estudiante->apellidos }}</td>
                    <td>{{ $estudiante->direccion }}</td>
                    <td>{{ $estudiante->telefono }}</td>
                    <td>{{ $estudiante->correo_electronico }}</td>
                    <td>{{ $estudiante->id_tipo_sangre }}</td>
                    <td>{{ $estudiante->fecha_nacimiento }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Ventana Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos del estudiante</h5>
                </div>
                <div class="modal-body">
                    <div class="container mt-5">
                        <form action="/crud_c" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="txt_id" name="txt_id" placeholder="Id estudiante">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="txt_carne" name="txt_carne" placeholder="Ingresa tu carnet">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="txt_nombres" name="txt_nombres" placeholder="Ingresa tus nombres">
                            </div>
                            <!-- ... Agrega aquí los demás campos del formulario -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info" id="btn_crear" name="btn_crear" value="crear">Agregar</button>
                                <button type="submit" class="btn btn-primary" id="btn_actualizar" name="btn_actualizar" value="actualizar">Modificar</button>
                                <button type="submit" class="btn btn-danger" id="btn_borrar" name="btn_borrar" value="borrar" onclick="confirmarEliminacion()">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agrega enlaces a los archivos JavaScript de Bootstrap (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p>Desarrollo web: Augusto Armando Cardona Paiz</p>
        <p>Derechos Reservados &copy; 2023</p>
    </div>
</footer>
</html>
