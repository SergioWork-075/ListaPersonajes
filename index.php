<?php
session_start();
if (isset($_GET['action']) && $_GET['action'] == "Reiniciar") {
  session_destroy();
  session_start();
}
//POR NOMBRE
if (isset($_GET['action']) && $_GET['action'] == "OrdenarDescNome") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $nombre[$key] = $row['nombre'];
  }
  array_multisort($nombre, SORT_DESC, $_SESSION['peliculas']);
}

if (isset($_GET['action']) && $_GET['action'] == "OrdenarAscNome") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $nombre[$key] = $row['nombre'];
  }
  array_multisort($nombre, SORT_ASC, $_SESSION['peliculas']);
}

//POR DIRECTOR
if (isset($_GET['action']) && $_GET['action'] == "OrdenarDescDir") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $director[$key] = $row['director'];
  }
  array_multisort($director, SORT_DESC, $_SESSION['peliculas']);
}

if (isset($_GET['action']) && $_GET['action'] == "OrdenarAscDir") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $nombre[$key] = $row['director'];
  }
  array_multisort($nombre, SORT_ASC, $_SESSION['peliculas']);
}

//POR PAIS
if (isset($_GET['action']) && $_GET['action'] == "OrdenarDescPais") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $pais[$key] = $row['pais'];
  }
  array_multisort($pais, SORT_DESC, $_SESSION['peliculas']);
}

if (isset($_GET['action']) && $_GET['action'] == "OrdenarAscPais") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $pais[$key] = $row['pais'];
  }
  array_multisort($pais, SORT_ASC, $_SESSION['peliculas']);
}

//POR FECHA
if (isset($_GET['action']) && $_GET['action'] == "OrdenarDescFecha") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $fechas[$key] = $row['fecha'];
  }
  array_multisort($fechas, SORT_DESC, $_SESSION['peliculas']);
}

if (isset($_GET['action']) && $_GET['action'] == "OrdenarAscFecha") {
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $fechas[$key] = $row['fecha'];
  }
  array_multisort($fechas, SORT_ASC, $_SESSION['peliculas']);
}

//PARA BORRAR
if (isset($_GET['action']) && $_GET['action'] == "borrar") {
  $id = $_GET['id'];
  unset($_SESSION['peliculas'][$id]);
}

if (!isset($_SESSION['peliculas'])) {
  $_SESSION['peliculas'] = [
    [
      'nombre' => 'La Haine (El Odio)',
      'director' => 'Mathieu Kassovitz',
      'pais' => 'Francia',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1996-1-30", new DateTimeZone("Europe/Madrid")),
      'imagen' => '1.jpg',
      'gif' => '1g.gif'
    ],
    [
      'nombre' => 'Irreversible',
      'director' => 'Gaspar Noé',
      'pais' => 'Francia',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2002-10-11", new DateTimeZone("Europe/Madrid")),
      'imagen' => '2.jpg',
      'gif' => '2g.gif'
    ],
    [
      'nombre' => 'Lazzaro Felice',
      'director' => 'Alice Rohrwacher',
      'pais' => 'Italia',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2018-9-13", new DateTimeZone("Europe/Madrid")),
      'imagen' => '3.jpg',
      'gif' => '3g.gif'
    ],
    [
      'nombre' => 'Mulholland Drive',
      'director' => 'David Lynch',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2002-3-8", new DateTimeZone("Europe/Madrid")),
      'imagen' => '4.jpg',
      'gif' => '4g.gif'
    ],
    [
      'nombre' => 'Alien: El Octavo Pasajero',
      'director' => 'Ridley Scott',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1979-9-25", new DateTimeZone("Europe/Madrid")),
      'imagen' => '5.jpg',
      'gif' => '5g.gif'
    ],
    [
      'nombre' => 'Trainspotting',
      'director' => 'Danny Boyle',
      'pais' => 'Inglaterra',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1996-9-23", new DateTimeZone("Europe/Madrid")),
      'imagen' => '6.jpg',
      'gif' => '6g.gif'
    ],
    [
      'nombre' => 'This is England',
      'director' => 'Shane Meadows',
      'pais' => 'Inglaterra',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2008-1-4", new DateTimeZone("Europe/Madrid")),
      'imagen' => '7.jpg',
      'gif' => '7g.gif'
    ],
    [
      'nombre' => 'Volver',
      'director' => 'Pedro Almodóvar',
      'pais' => 'España',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2006-3-10", new DateTimeZone("Europe/Madrid")),
      'imagen' => '8.jpg',
      'gif' => '8g.gif'
    ],
    [
      'nombre' => 'Tristana',
      'director' => 'Luis Buñuel',
      'pais' => 'España',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1974-8-16", new DateTimeZone("Europe/Madrid")),
      'imagen' => '9.jpg',
      'gif' => '9g.gif'
    ],
    [
      'nombre' => 'Who Killed Captain Alex',
      'director' => 'Nabwana I.G.G.',
      'pais' => 'Uganda',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2010-1-30", new DateTimeZone("Europe/Madrid")),
      'imagen' => '10.jpg',
      'gif' => '10g.gif'
    ],
    [
      'nombre' => 'Las Noches de Cabiria',
      'director' => 'Federico Fellini',
      'pais' => 'Italia',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1958-4-16", new DateTimeZone("Europe/Madrid")),
      'imagen' => '11.jpg',
      'gif' => '11g.gif'
    ],
    [
      'nombre' => 'Casablanca',
      'director' => 'Michael Curtiz',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1946-12-19", new DateTimeZone("Europe/Madrid")),
      'imagen' => '12.jpg',
      'gif' => '12g.gif'
    ],
    [
      'nombre' => 'Dune 1984',
      'director' => 'David Lynch',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1984-12-14", new DateTimeZone("Europe/Madrid")),
      'imagen' => '13.jpg',
      'gif' => '13g.gif'
    ],
    [
      'nombre' => 'Dune: Parte Uno',
      'director' => 'Denis Villeneuve',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2021-9-17", new DateTimeZone("Europe/Madrid")),
      'imagen' => '14.jpg',
      'gif' => '14g.gif'
    ],
    [
      'nombre' => 'La Caza',
      'director' => 'Thomas Vinterberg',
      'pais' => 'Dinamarca',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2013-4-19", new DateTimeZone("Europe/Madrid")),
      'imagen' => '15.jpg',
      'gif' => '15g.gif'
    ],
    [
      'nombre' => 'Otra Ronda',
      'director' => 'Thomas Vinterberg',
      'pais' => 'Dinamarca',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2021-4-9", new DateTimeZone("Europe/Madrid")),
      'imagen' => '16.jpg',
      'gif' => '16g.gif'
    ],
    [
      'nombre' => 'La Gran Belleza',
      'director' => 'Paolo Sorrentino',
      'pais' => 'Italia',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2013-12-5", new DateTimeZone("Europe/Madrid")),
      'imagen' => '17.jpg',
      'gif' => '17g.gif'
    ],
    [
      'nombre' => 'Con Faldas y a lo Loco',
      'director' => 'Billy Wilder',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1963-10-14", new DateTimeZone("Europe/Madrid")),
      'imagen' => '18.jpg',
      'gif' => '18g.gif'
    ],
    [
      'nombre' => 'Equals',
      'director' => 'Drake Doremus',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2015-9-5", new DateTimeZone("Europe/Madrid")),
      'imagen' => '19.jpg',
      'gif' => '19g.gif'
    ],
    [
      'nombre' => 'Café Society',
      'director' => 'Woody Allen',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2016-7-15", new DateTimeZone("Europe/Madrid")),
      'imagen' => '20.jpg',
      'gif' => '20g.gif'
    ],
    [
      'nombre' => 'Belladonna of Saddness',
      'director' => 'Eiichi Yamamoto',
      'pais' => 'Japón',
      'fecha' => DateTime::createFromFormat("Y-m-d", "1973-6-28", new DateTimeZone("Europe/Madrid")),
      'imagen' => '21.jpg',
      'gif' => '21g.gif'
    ],
    [
      'nombre' => 'The Love Witch',
      'director' => 'Anna Biller',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2016-1-31", new DateTimeZone("Europe/Madrid")),
      'imagen' => '22.jpg',
      'gif' => '22g.gif'
    ],
    [
      'nombre' => 'Deseando Amar',
      'director' => 'Wong Kar-wai',
      'pais' => 'Hong Kong',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2001-2-16", new DateTimeZone("Europe/Madrid")),
      'imagen' => '23.jpg',
      'gif' => '23g.gif'
    ],
    [
      'nombre' => 'Chicken Run',
      'director' => 'Nick Park',
      'pais' => 'Inglaterra',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2000-8-14", new DateTimeZone("Europe/Madrid")),
      'imagen' => '24.jpg',
      'gif' => '24g.gif'
    ],
    [
      'nombre' => 'Tenet',
      'director' => 'Christopher Nolan',
      'pais' => 'Estados Unidos',
      'fecha' => DateTime::createFromFormat("Y-m-d", "2020-9-3", new DateTimeZone("Europe/Madrid")),
      'imagen' => '25.jpg',
      'gif' => '25g.gif'
    ]
  ];
} ?>

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
  <a href="index.php?action=Reiniciar" name="reiniciar" style="font-weight: bolder;">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" width="3%" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
    </svg>
  </a>
  <br />
  <br />
  <ul class="cabecera">
    <li>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="15%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
      </svg>
    </li>
    <li>Nombre
      <a href="index.php?action=OrdenarDescNome">
        <span class="lnr lnr-arrow-down"></span>
      </a>
      <a href="index.php?action=OrdenarAscNome">
        <span class="lnr lnr-arrow-up"></span>
      </a>
    </li>

    <li>Director
      <a href="index.php?action=OrdenarDescDir">
        <span class="lnr lnr-arrow-down"></span>
      </a>
      <a href="index.php?action=OrdenarAscDir">
        <span class="lnr lnr-arrow-up"></span>
      </a>
    </li>
    <li>Pais
      <a href="index.php?action=OrdenarDescPais">
        <span class="lnr lnr-arrow-down"></span>
      </a>
      <a href="index.php?action=OrdenarAscPais">
        <span class="lnr lnr-arrow-up"></span>
      </a>
    </li>
    <li>Fecha
      <a href="index.php?action=OrdenarAscFecha">
        <span class="lnr lnr-arrow-down"></span>
      </a>
      <a href="index.php?action=OrdenarDescFecha">
        <span class="lnr lnr-arrow-up"></span>
      </a>
    </li>
    <li style="margin-left: 70px;">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="14%" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
      </svg>
    </li>
  </ul>
  <?php $cont = 0;
  foreach ($_SESSION['peliculas'] as $key => $row) {
    $cont++;
  ?>
    <ul>
      <li class="cuerpo">
        <?php echo $cont . "." ?>
        <a href="ver.php?id=<?php echo $key ?>" title="ver"><span class="lnr lnr-eye"></span></a>
        <a href="editar.php?id=<?php echo $key ?>" title="editar"><span class="lnr lnr-pencil"></span></a>
        <a href="index.php?action=borrar&id=<?php echo $key ?>" style="width: 30%;" title="borrar"> <span class="lnr lnr-trash"></span></a>
      </li>
      <li class="cuerpo"><?php echo $row['nombre'] ?></li>
      <li class="cuerpo"><?php echo $row['director'] ?></li>
      <li class="cuerpo"><?php echo $row['pais'] ?></li>
      <li class="cuerpo"><?php echo $row['fecha']->format("Y-m-d") ?></li>
      <li>
        <img src="img/<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre'] ?>">
      </li>
    </ul>
  <?php } ?>
</body>

</html>