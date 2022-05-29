<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>notas de ciclo</title>
</head>
<body>
    <form name="formulario" method="post" action="calculoslab.php">
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="laboratorio1" class="form-label">Laboratorio 1:</label>
            <input type="float" class="form-control" name="laboratorio1" id="laboratorio1">
        </div>
        <div class="mb-3">
            <label for="laboratorio2" class="form-label">Laboratorio 2:</label>
            <input type="float" class="form-control" name="laboratorio2" id="laboratorio2">
        </div>
        <div class="mb-3">
            <label for="parcial" class="form-label">Parcial:</label>
            <input type="float" class="form-control" name="parcial" id="parcial">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
    </form>
</body>
</html>
