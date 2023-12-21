<!-- app/Views/programas/editar.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Programa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Programa</h2>

        <form action="<?= base_url('programas/editar/' . $programa['id']) ?>" method="post" enctype="multipart/form-data">
            <!-- Campos de edición aquí -->

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

        <a class="btn btn-secondary mt-3" href="<?= base_url('programas') ?>">Volver a la Lista de Programas</a>
    </div>
</body>
</html>
