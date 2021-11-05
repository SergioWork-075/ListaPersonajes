<?php
session_start();

if (isset($_GET['action']) && $_GET['action'] == "Reiniciar") {
  session_destroy();
  session_start();
}

if (isset($_GET['action']) && $_GET['action'] == "Ordenar"){
  foreach ($_SESSION['peliculas'] as $key => $row){
      $fechas[$key] = $row['fecha'];
  }
  array_multisort($fechas, SORT_ASC, $_SESSION['peliculas']);
}

if (!isset($_SESSION['peliculas'])) {
  $_SESSION['peliculas'] = [
    [
      'nombre' => 'La Haine (El Odio)',
      'director' => 'Mathieu Kassovitz',
      'pais' => 'Francia',
      'fecha' => DateTime::createFromFormat("Y-m-d","1996-1-30", new DateTimeZone("Europe/Madrid")),
      'imagen' => '1.jpg'
    ],
    [
      'nombre' => 'Irreversible',
      'director' => 'Gaspar Noé',
      'pais' => 'Francia',
      'fecha' => DateTime::createFromFormat("Y-m-d","2002-10-11", new DateTimeZone("Europe/Madrid")),
      'imagen' => '2.jpg'
    ],
    [
      'nombre' => 'Lazzaro Felice',
      'director' => 'Alice Rohrwacher',
      'pais' => 'Italia',
      'fecha' => DateTime::createFromFormat("Y-m-d","2018-9-13", new DateTimeZone("Europe/Madrid")),
      'imagen' => '3.jpg'
    ],
    [
      'nombre' => 'Mulholland Drive',
      'director' => 'David Lynch',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","2002-3-8", new DateTimeZone("Europe/Madrid")),
      'imagen' => '4.jpg'
    ],
    [
      'nombre' => 'Alien: El Octavo Pasajero',
      'director' => 'Ridley Scott',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","1979-9-25", new DateTimeZone("Europe/Madrid")),
      'imagen' => '5.jpg'
    ],
    [
      'nombre' => 'Trainspotting',
      'director' => 'Danny Boyle',
      'pais' => 'Inglaterra',
      'fecha' => DateTime::createFromFormat("Y-m-d","1996-9-23", new DateTimeZone("Europe/Madrid")),
      'imagen' => '6.jpg'
    ],
    [
      'nombre' => 'This is England',
      'director' => 'Shane Meadows',
      'pais' => 'Inglaterra',
      'fecha' => DateTime::createFromFormat("Y-m-d","2008-1-4", new DateTimeZone("Europe/Madrid")),
      'imagen' => '7.jpg'
    ],
    [
      'nombre' => 'Volver',
      'director' => 'Pedro Almodóvar',
      'pais' => 'España',
      'fecha' => DateTime::createFromFormat("Y-m-d","2006-3-10", new DateTimeZone("Europe/Madrid")),
      'imagen' => '8.jpg'
    ],
    [
      'nombre' => 'Tristana',
      'director' => 'Luis Buñuel',
      'pais' => 'España',
      'fecha' => DateTime::createFromFormat("Y-m-d","1974-8-16", new DateTimeZone("Europe/Madrid")),
      'imagen' => '9.jpg'
    ],
    [
      'nombre' => 'Who Killed Captain Alex',
      'director' => 'Nabwana I.G.G.',
      'pais' => 'Uganda',
      'fecha' => DateTime::createFromFormat("Y-m-d","2010-1-30", new DateTimeZone("Europe/Madrid")),
      'imagen' => '10.jpg'
    ],
    [
      'nombre' => 'Las Noches de Cabiria',
      'director' => 'Federico Fellini',
      'pais' => 'Italia',
      'fecha' => DateTime::createFromFormat("Y-m-d","1958-4-16", new DateTimeZone("Europe/Madrid")),
      'imagen' => '11.jpg'
    ],
    [
      'nombre' => 'Casablanca',
      'director' => 'Michael Curtiz',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","1946-12-19", new DateTimeZone("Europe/Madrid")),
      'imagen' => '12.jpg'
    ],
    [
      'nombre' => 'Dune 1984',
      'director' => 'David Lynch',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","1984-12-14", new DateTimeZone("Europe/Madrid")),
      'imagen' => '13.jpg'
    ],
    [
      'nombre' => 'Dune: Parte Uno',
      'director' => 'Denis Villeneuve',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","2021-9-17", new DateTimeZone("Europe/Madrid")),
      'imagen' => '14.jpg'
    ],
    [
      'nombre' => 'La Caza',
      'director' => 'Thomas Vinterberg',
      'pais' => 'Dinamarca',
      'fecha' => DateTime::createFromFormat("Y-m-d","2013-4-19", new DateTimeZone("Europe/Madrid")),
      'imagen' => '15.jpg'
    ],
    [
      'nombre' => 'Otra Ronda',
      'director' => 'Thomas Vinterberg',
      'pais' => 'Dinamarca',
      'fecha' => DateTime::createFromFormat("Y-m-d","2021-4-9", new DateTimeZone("Europe/Madrid")),
      'imagen' => '16.jpg'
    ],
    [
      'nombre' => 'La Gran Belleza',
      'director' => 'Paolo Sorrentino',
      'pais' => 'Italia',
      'fecha' => DateTime::createFromFormat("Y-m-d","2013-12-5", new DateTimeZone("Europe/Madrid")),
      'imagen' => '17.jpg'
    ],
    [
      'nombre' => 'Con Faldas y a lo Loco',
      'director' => 'Billy Wilder',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","1963-10-14", new DateTimeZone("Europe/Madrid")),
      'imagen' => '18.jpg'
    ],
    [
      'nombre' => 'Equals',
      'director' => 'Drake Doremus',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","2015-9-5", new DateTimeZone("Europe/Madrid")),
      'imagen' => '19.jpg'
    ],
    [
      'nombre' => 'Café Society',
      'director' => 'Woody Allen',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","2016-7-15", new DateTimeZone("Europe/Madrid")),
      'imagen' => '20.jpg'
    ],
    [
      'nombre' => 'Too Late',
      'director' => 'Dennis Hauck',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","2015-6-11", new DateTimeZone("Europe/Madrid")),
      'imagen' => '21.jpg'
    ],
    [
      'nombre' => 'The Love Witch',
      'director' => 'Anna Biller',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","2016-1-31", new DateTimeZone("Europe/Madrid")),
      'imagen' => '22.jpg'
    ],
    [
      'nombre' => 'Deseando Amar',
      'director' => 'Wong Kar-wai',
      'pais' => 'Hong Kong',
      'fecha' => DateTime::createFromFormat("Y-m-d","2001-2-16", new DateTimeZone("Europe/Madrid")),
      'imagen' => '23.jpg'
    ],
    [
      'nombre' => 'El Penalti Más Largo',
      'director' => 'Roberto Santiago',
      'pais' => 'España',
      'fecha' => DateTime::createFromFormat("Y-m-d","2005-3-9", new DateTimeZone("Europe/Madrid")),
      'imagen' => '24.jpg'
    ],
    [
      'nombre' => 'Tenet',
      'director' => 'Christopher Nolan',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d","2020-9-3", new DateTimeZone("Europe/Madrid")),
      'imagen' => '25.jpg'
    ]
  ];
}
/*
    //Ordena array de personas por nombre ascendente
    foreach ($peliculas as $key => $row){
        $nombres[$key] = $row['nombre']; //Obtengo array de nombres con los índices originales
        $director[$key] = $row['director'];
        $pais[$key] = $row['pais'];
        $fecha[$key] = $row['fecha'];
      }
//array_multisort($nombres, SORT_ASC, $peliculas);
//array_multisort($pais, SORT_ASC, $peliculas);
//array_multisort($fecha, SORT_ASC, $peliculas);

$contador = 0;
foreach ($peliculas as $fila) {
  $contador++;
  echo $contador . " ";
  foreach ($fila as $nome) {
    echo $nome . " ";
  }
  echo "<br/><br/>";
}
      for($i=0;$i<sizeof($nombres);$i++){
        echo "<strong>Nombre: </strong>".$nombres[$i]." <strong>Director: </strong>".$director[$i]." <strong>País: </strong>".$pais[$i].
        " <strong>Fecha: </strong>".$fecha[$i]."<br/><br/>";
      }*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de personajes</title>
  <LINK REL=StyleSheet HREF="estilo/style.css" TYPE="text/css" MEDIA=screen>
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>

<body>
  <h1>Listado de películas</h1>
  <a href="personajes.php?action=Reiniciar" name="reiniciar">Reiniciar</a>
  <ul class="cabecera">
    <li>Nombre</li>
    <a href="personajes.php?action=ordenar&campo=nombre&orden=asc">
      <span class="lnr lnr-arrow-down"></span>
    </a>
    <a href="personajes.php?action=ordenar&campo=nombre&orden=desc">
      <span class="lnr lnr-arrow-up"></span>
    </a>
    <li>Director</li>
    <li>Pais</li>
    <li>Fecha</li>
    <li>Imagen</li>
  </ul>
  <?php $cont = 0;
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $cont++;
  ?>
    <ul>
      <li><?php echo $row['nombre'] ?></li>
      <li><?php echo $row['director'] ?></li>
      <li><?php echo $row['pais'] ?></li>
      <li><?php echo $row['fecha'] ->format("Y-m-d")?></li>
      <li>
        <img src="img/<?php echo $cont ?>.jpg" alt="<?php echo $row['nombre'] ?>">
      </li>
      <li>
        <a href="ver.php?id=<?php echo $key ?>" title="ver"><span class="lnr lnr-eye"></span></a>
        <a href="editar.php?id=<?php echo $key ?>" title="editar"><span class="lnr lnr-pencil"></span></a>
        <a><span class="lnr lnr-trash"></span></a>
      </li>
    </ul>
  <?php } ?>
</body>

</html>