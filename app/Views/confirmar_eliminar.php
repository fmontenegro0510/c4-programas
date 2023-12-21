<!-- app/Views/programas/confirmar_eliminar.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Eliminación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Confirmar Eliminación</h2>

        <p>¿Estás seguro de que deseas eliminar este programa?</p>

        <form action="<?= base_url('programas/eliminar/' . $programa['id']) ?>" method="post">
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a class="btn btn-secondary" href="<?= base_url('programas') ?>">Cancelar</a>
        </form>
    </div>
</body>
</html>
