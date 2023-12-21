<!-- app/Views/programas/crear.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Nuevo Programa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Cargar Nuevo Programa</h2>

        <form action="<?= base_url('programas/crear') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" name="cargo" required>
            </div>

            <div class="form-group">
                <label for="concurso">Concurso Rendido:</label>
                <input type="text" class="form-control" name="concurso" required>
            </div>

            <div class="form-group">
                <label for="localidad">Localidad:</label>
                <input type="text" class="form-control" name="localidad" required>
            </div>

            <div class="form-group">
                <label for="programa_pdf">Programa (PDF):</label>
                <input type="file" class="form-control-file" name="programa_pdf" accept=".pdf" required>
            </div>

            <button type="submit" class="btn btn-primary">Cargar Programa</button>
        </form>

        <a class="btn btn-secondary mt-3" href="<?= base_url('programas') ?>">Volver a la Lista de Programas</a>
    </div>
</body>
</html>
