<!DOCTYPE html>

<!-- Gonzalez Gutierrez Julieta Maiara
    Legajo: VINF014900
    Fecha de entrega: 05/05/2025
    Descripcion: Script HTML para la consulta de usuarios de la API de Harry Potter

    El codigo HTML incluye un formulario para ingresar el ID del usuario y un area de texto para mostrar el resultado en formato JSON.
    Se utiliza Bootstrap para el diseño y jQuery para realizar la solicitud AJAX al servidor.
    El servidor PHP (servidor.php) se encarga de procesar la solicitud y devolver los datos correspondientes. -->

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Harry Potter - Consulta de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Consulta de Usuarios - API Harry Potter 🧙‍♂️</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="id" class="form-label"><strong>Ingrese el ID del Usuario:</strong></label>
                        <input type="number" class="form-control" id="id" name="id" placeholder="Ejemplo: 1" required>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary" onclick="buscarID($('#id').val()); return false;">
                            Obtener JSON
                        </button>
                    </div>
                </form>
                <hr>
                <label for="textAreaMostrarJSON"><strong>Resultado:</strong></label>
                <textarea class="form-control" id="textAreaMostrarJSON" rows="6" readonly placeholder="Aquí aparecerá el JSON..."></textarea>
            </div>
        </div>
    </div>

    <script>
        function buscarID(Id) {
            if (!Id) {
                $("#textAreaMostrarJSON").val("Por favor ingrese un ID.");
                return;
            }

            $.ajax({
                url: 'servidor.php',
                type: 'GET',
                data: { id: Id },
                beforeSend: function () {
                    $("#textAreaMostrarJSON").val("Procesando, espere por favor...");
                },
                success: function (data) {
                    if (Object.keys(data).length === 0) {
                        $("#textAreaMostrarJSON").val("No se encontró ningun usuario con ese ID.");
                    } else {
                        $("#textAreaMostrarJSON").val(JSON.stringify(data, null, 4));
                    }
                },
                error: function (xhr, status, error) {
                    $("#textAreaMostrarJSON").val("Error al obtener los datos: no se encontro el usuario.");
                }
            });
        }
    </script>

<footer class="text-center mt-5 mb-3 text-muted" style="font-size: 0.9rem;">
    Desarrollado por Gonzalez Julieta
</footer>

</body>
</html>
