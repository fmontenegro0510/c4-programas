<!-- app/Views/programas/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Programas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Programas</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Concurso</th>
                    <th>Localidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Mostrar aquí la lista de programas -->
            </tbody>
        </table>

        <a class="btn btn-primary" href="<?= base_url('programas/crear') ?>">Cargar Nuevo Programa</a>
    </div>
</body>
</html>
