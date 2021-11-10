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

if (!empty($_GET["editado"]) && is_array($_GET["editado"])) {
    foreach ($_GET["editado"] as $editado) {
        echo $editado;
    }
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
        <h2>Nombre: <input name="editado[]" id="editado1" type="text" value="<?php echo $nombreEdi ?>"></h2>
        <p>Director: <input name="editado[]" id="editado1" type="text" value="<?php echo $directorEdi ?>"></p>
        <p>País: <input name="editado[]" id="editado1" type="text" value="<?php echo $paisEdi ?>"></p>
        <p>Fecha: <input name="editado[]" id="editado1" type="date" value="<?php echo $fechaEdi->format("Y-m-d") ?>"></p>
        <button type="submit" title="editar"><span class="lnr lnr-pencil"></span></button>
    </form>
</body>

</html>