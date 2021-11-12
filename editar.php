<?php
session_start();
if (isset($_GET['id'])) { //obtenemos el id de la pelicula
    $id = $_GET['id']; //lo pasamos como un parametro
    $pelicula = $_SESSION['peliculas'][$id]; //pelicula es id
    $nombreEdi = $pelicula['nombre']; //obtenemos todos los elementos
    $directorEdi = $pelicula['director']; 
    $paisEdi = $pelicula['pais'];
    $fechaEdi = $pelicula['fecha'];
    $imagenEdi = $pelicula['imagen'];
} else {
    echo "No encuentro el personaje"; //si no lo encuentra avisa al usuario
}
//PRUEBA EN EDITAR. Mismo codigo que en index
if (!empty($_GET["editado"]) && is_array($_GET["editado"])) {
    foreach ($_GET["editado"] as $_SESSION['editado']) {
        echo $_SESSION['editado'];
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
    <form action="index.php" method="get"> <!--envio los datos del formulario al index-->
        <h1>Editar Película</h1>
        <a href="index.php" title="Volver" style="font-weight: bolder;">Volver</a> <!--para volver a index-->
        <p>Id:<input name="editado[]" id="editado1" type="" value="<?php echo $id ?>"></p> <!--obtengo  todos los datos. Pongo editado[] para que lo coga en get editado-->
        <h2>Nombre: <input name="editado[]" id="editado2" type="text" value="<?php echo $nombreEdi ?>"></h2>
        <p>Director: <input name="editado[]" id="editado3" type="text" value="<?php echo $directorEdi ?>"></p>
        <p>País: <input name="editado[]" id="editado4" type="text" value="<?php echo $paisEdi ?>"></p>
        <p>Fecha: <input name="editado[]" id="editado5" type="date" value="<?php echo $fechaEdi->format("Y-m-d") ?>"></p>
        <button type="submit" title="editar"><span class="lnr lnr-pencil"></span></button> <!--submit para enviar los datos-->
    </form>
</body>

</html>