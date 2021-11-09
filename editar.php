<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pelicula = $_SESSION['peliculas'][$id];
    $nombreEdi = $pelicula['nombre'];
    $directorEdi = $pelicula['director'];
    $paisEdi = $pelicula['pais'];
    $fechaEdi = $pelicula['fecha'];
    $imagenEdi = $pelicula['imagen'];
} else {
    echo "No encuentro el personaje";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK REL=StyleSheet HREF="estilo/style.css" TYPE="text/css" MEDIA=screen>
    <title>Editar Película</title>
</head>

<body>
    <h1>Editar Película</h1>
    <a href="personajes.php" title="Volver" style="font-weight: bolder;">Volver</a>
    <h2>Nombre: <?php echo $nombreEdi ?></h2>
    <p>Director: <?php echo $directorEdi ?></p>
    <p>País: <?php echo $paisEdi ?></p>
    <p>Fecha: <?php echo $fechaEdi->format("Y-m-d") ?></p>
    <img src="img/<?php echo $imagenEdi ?>" alt="" class="imagenEditar">
</body>

</html>