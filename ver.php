<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pelicula = $_SESSION['peliculas'][$id];
    $nombreVer = $pelicula['nombre'];
    $directorVer = $pelicula['director'];
    $paisVer = $pelicula['pais'];
    $fechaVer = $pelicula['fecha'];
    $imagenVer = $pelicula['imagen'];
    $gifVer = $pelicula['gif'];
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
    <LINK REL=StyleSheet HREF="estilo/styleVer.css" TYPE="text/css" MEDIA=screen>
    <title>Ver Datos Película</title>
</head>

<body>
    <div class="fadeOut"><img class="gif" src="img/<?php echo $gifVer ?>" alt=""></div>
    <div class="TITULO">
        <h1>Ver Datos Película</h1>
    </div>
    <a href="index.php" title="Volver" style="font-weight: bolder;">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" width="4%" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
        </svg>
    </a>
    <img src="img/<?php echo $imagenVer ?>" style="float: right;" alt="" class="imagenVER">
    <div class="cuerpoVER">
        <h2>Nombre:</h2>
        <p><?php echo $nombreVer ?></p>
        <h2>Director:</h2>
        <p><?php echo $directorVer ?></p>
        <h2>País:</h2>
        <p><?php echo $paisVer ?></p>
        <h2>Fecha:</h2>
        <p><?php echo $fechaVer->format("Y-m-d") ?></p>
    </div>
</body>

</html>