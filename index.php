<?php
    require 'Modelo/Conexion/Conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilos/style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2>Bienvenidos</h2>
        <h5>Por favor seleccione la nave que desea crear</h5>
        <a type="button" class="btn btn-primary" href="Vista/Nave1.php">Nave 1</a>
        <a type="button" class="btn btn-secondary" href="Vista/Nave2.php">Nave 2</a>
        <a type="button" class="btn btn-success" href="Vista/Nave3.php">Nave 3</a>
        <a type="button" class="btn btn-danger" href="Vista/Nave4.php">Nave 4</a>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar por nombre" aria-label="Search" name="nombre"required>
                    <button class="btn btn-outline-success" name="buscar" id="buscar" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Combustible</th>
                    <th scope="col">País</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_POST['buscar'])){
                        $nombre = $_POST['nombre'];
                        if (!empty($_POST['nombre'])){
                            $consultaSQL="SELECT * FROM vehiculos WHERE nombre like '%".$nombre."%'";
                        }
                        $conexionBD=conectarBD();
                        $resultado = $conexionBD->query($consultaSQL);
                        while($filas=$resultado->fetch()){
                            ?>
                            <tr>
                                <td><?php echo($filas["nombre"]);?></td>
                                <td><?php echo($filas["altura"]);?></td>
                                <td><?php echo($filas["peso"]);?></td>
                                <td><?php echo($filas["combustible"]);?></td>
                                <td><?php echo($filas["pais"]);?></td>
                            </tr>
                    <?php
                   } }else{
                        $conexionBD=conectarBD();
                        $consultaSQL = "SELECT * FROM vehiculos";
                        $resultado = $conexionBD->query($consultaSQL);
                        while($filas=$resultado->fetch()){
                            ?>
                            <tr>
                                <td><?php echo($filas["nombre"]);?></td>
                                <td><?php echo($filas["altura"]);?></td>
                                <td><?php echo($filas["peso"]);?></td>
                                <td><?php echo($filas["combustible"]);?></td>
                                <td><?php echo($filas["pais"]);?></td>
                            </tr>
                       <?php
                        }
                    }
                       ?> 
            </tbody>
        </table>
    </div>
    
</body>
</html>