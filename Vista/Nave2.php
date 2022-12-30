<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/style.css">
    <title>Nave 2</title>
</head>
<body>
    <div class="container">
        <div class="form-princ">
            <form action="../Controlador/Nave2.php" method="POST">
                <div class="pagina">
                    <div class="titulo">Crear nave 2</div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <div class="label">Nombre</div>
                            <input type="text" class="form-control" type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="col-6">
                            <div class="label">Altura</div>
                            <input type="text" class="form-control" type="text" id="altura" name="altura" required>
                        </div>
                        <div class="col-6">
                            <div class="label">Peso</div>
                            <input type="text" class="form-control" type="text" id="peso" name="peso" required>
                        </div>
                        <div class="col-6">
                            <div class="label">Combustible</div>
                            <input type="text" class="form-control" type="text" id="combustible" name="combustible" required>
                        </div>
                        <div class="col-6">
                            <div class="label">Pais</div>
                            <input type="text" class="form-control" type="text" id="pais" name="pais" required>
                        </div>
                        <div class="col-6">
                            <div class="label">Velocidad</div>
                            <input type="text" class="form-control" type="text" id="velocidad" name="velocidad" required >
                        </div>
                        <div class="campo btns">
                            <input type="button" onclick="history.back()" name="volver atrás" value="Regresar">
                        </div>
                        <div class="campo btns">
                            <input type="submit" id="Aceptar" name="guardar" value="Guardar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </div>
</body>
</html>