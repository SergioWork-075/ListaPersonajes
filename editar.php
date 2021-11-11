<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pelicula = $_SESSION['peliculas'][$id];
    $nombre = $pelicula['nombre'];
    $director = $pelicula['director'];
    $pais = $pelicula['pais'];
    $fecha = $pelicula['fecha'];
    if(isset($_GET['editar'])){
        $_SESSION['peliculas']['nombre'] = $_GET['editadoNom'];
        $_SESSION['peliculas']['director'] = $_GET['editadoDir'];
        $_SESSION['peliculas']['pais'] = $_GET['editadoPai'];
        $_SESSION['peliculas']['fecha'] = $_GET['editadoFec'];
    
        echo $_SESSION['peliculas'][$id];
    }
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
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <title>Editar Película</title>
</head>

<body>
    <form action="editar.php" method="get">
        <h1>Editar Película</h1>
        <a href="index.php" title="Volver" style="font-weight: bolder;">Volver</a>
        <h2>Nombre: <input name="editadoNom" type="text" value="<?php echo $nombre ?>"></h2>
        <p>Director: <input name="editadoDir" type="text" value="<?php echo $director ?>"></p>
        <p>País: <input name="editadoPai" type="text" value="<?php echo $pais ?>"></p>
        <p>Fecha: <input name="editadoFec" type="date" value="<?php echo $fecha->format("Y-m-d") ?>"></p>
        <button type="submit" title="editar"><span class="lnr lnr-pencil"></span></button>
    </form>
</body>

</html>