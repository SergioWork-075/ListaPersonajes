<?php
    session_start();
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $pelicula = $_SESSION['peliculas'][$id];
        $nombreVer = $pelicula['nombre'];
        $directorVer = $pelicula['director'];
        $paisVer = $pelicula['pais'];
        $fechaVer = $pelicula['fecha'];
        $imagenVer = $pelicula['imagen'];
        $gifVer = $pelicula['gif'];
    }
    else{
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
    <title>Ver Datos Película</title>
</head>
<body>
<div class="fadeOut"><img class="gif" src="img/<?php echo $gifVer?>" alt=""></div>
    <h1>Ver Datos Película</h1>
    <a href="personajes.php" title="Volver">Volver</a>
    <h2>Nombre: <?php echo $nombreVer?></h2>
    <p>Director: <?php echo $directorVer?></p>
    <p>País: <?php echo $paisVer?></p>
    <p>Fecha: <?php echo $fechaVer ->format("Y-m-d")?></p>
    <img src="img/<?php echo $imagenVer?>" alt="" class="imagenEditar">
    
</body>
</html>