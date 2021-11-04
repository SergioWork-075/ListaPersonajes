<?php
session_start();
if(isset($_GET['action']) && $_GET['action'] == "Reiniciar"){
  session_destroy();
  session_start();
}
if (!isset($_SESSION['peliculas'])) {
  $_SESSION['peliculas'] = [
    [
      'nombre' => 'La Haine (El Odio)',
      'director' => 'Mathieu Kassovitz',
      'pais' => 'Francia',
      'fecha' => '30 de enero de 1996',
      'imagen' => '1.jpg'
    ],
    [
      'nombre' => 'Irreversible',
      'director' => 'Gaspar Noé',
      'pais' => 'Francia',
      'fecha' => '11 de octubre de 2002',
      'imagen' => '2.jpg'
    ],
    [
      'nombre' => 'Lazzaro Felice',
      'director' => 'Alice Rohrwacher',
      'pais' => 'Italia',
      'fecha' => '13 de septiembre de 2018',
      'imagen' => '3.jpg'
    ],
    [
      'nombre' => 'Mulholland Drive',
      'director' => 'David Lynch',
      'pais' => 'Estados Unidos',
      'fecha' => '8 de marzo de 2002',
      'imagen' => '4.jpg'
    ],
    [
      'nombre' => 'Alien: El Octavo Pasajero',
      'director' => 'Ridley Scott',
      'pais' => 'Estados Unidos',
      'fecha' => '25 de septiembre de 1979',
      'imagen' => '5.jpg'
    ],
    [
      'nombre' => 'Trainspotting',
      'director' => 'Danny Boyle',
      'pais' => 'Inglaterra',
      'fecha' => '23 de septiembre de 1996',
      'imagen' => '6.jpg'
    ],
    [
      'nombre' => 'This is England',
      'director' => 'Shane Meadows',
      'pais' => 'Inglaterra',
      'fecha' => '4 de enero de 2008',
      'imagen' => '7.jpg'
    ],
    [
      'nombre' => 'Volver',
      'director' => 'Pedro Almodóvar',
      'pais' => 'España',
      'fecha' => '10 de marzo de 2006',
      'imagen' => '8.jpg'
    ],
    [
      'nombre' => 'Tristana',
      'director' => 'Luis Buñuel',
      'pais' => 'España',
      'fecha' => '16 de agosto de 1974',
      'imagen' => '9.jpg'
    ],
    [
      'nombre' => 'Who Killed Captain Alex',
      'director' => 'Nabwana I.G.G.',
      'pais' => 'Uganda',
      'fecha' => '30 de enero de 2010',
      'imagen' => '10.jpg'
    ],
    [
      'nombre' => 'Las Noches de Cabiria',
      'director' => 'Federico Fellini',
      'pais' => 'Italia',
      'fecha' => '16 de abril de 1958',
      'imagen' => '11.jpg'
    ],
    [
      'nombre' => 'Casablanca',
      'director' => 'Michael Curtiz',
      'pais' => 'Estados Unidos',
      'fecha' => '19 de diciembre de 1946',
      'imagen' => '12.jpg'
    ],
    [
      'nombre' => 'Dune 1984',
      'director' => 'David Lynch',
      'pais' => 'Estados Unidos',
      'fecha' => '14 de diciembre de 1984',
      'imagen' => '13.jpg'
    ],
    [
      'nombre' => 'Dune: Parte Uno',
      'director' => 'Denis Villeneuve',
      'pais' => 'Estados Unidos',
      'fecha' => '17 de septiembre de 2021',
      'imagen' => '14.jpg'
    ],
    [
      'nombre' => 'La Caza',
      'director' => 'Thomas Vinterberg',
      'pais' => 'Dinamarca',
      'fecha' => '19 de abril de 2013',
      'imagen' => '15.jpg'
    ],
    [
      'nombre' => 'Otra Ronda',
      'director' => 'Thomas Vinterberg',
      'pais' => 'Dinamarca',
      'fecha' => '9 de abril de 2021',
      'imagen' => '16.jpg'
    ],
    [
      'nombre' => 'La Gran Belleza',
      'director' => 'Paolo Sorrentino',
      'pais' => 'Italia',
      'fecha' => '5 de diciembre de 2013',
      'imagen' => '17.jpg'
    ],
    [
      'nombre' => 'Con Faldas y a lo Loco',
      'director' => 'Billy Wilder',
      'pais' => 'Estados Unidos',
      'fecha' => '14 de octubre de 1963',
      'imagen' => '18.jpg'
    ],
    [
      'nombre' => 'Equals',
      'director' => 'Drake Doremus',
      'pais' => 'Estados Unidos',
      'fecha' => '5 de septiembre de 2015',
      'imagen' => '19.jpg'
    ],
    [
      'nombre' => 'Café Society',
      'director' => 'Woody Allen',
      'pais' => 'Estados Unidos',
      'fecha' => '15 de julio de 2016',
      'imagen' => '20.jpg'
    ],
    [
      'nombre' => 'Too Late',
      'director' => 'Dennis Hauck',
      'pais' => 'Estados Unidos',
      'fecha' => '11 de junio de 2015',
      'imagen' => '21.jpg'
    ],
    [
      'nombre' => 'The Love Witch',
      'director' => 'Anna Biller',
      'pais' => 'Estados Unidos',
      'fecha' => '31 de enero de 2016',
      'imagen' => '22.jpg'
    ],
    [
      'nombre' => 'Deseando Amar',
      'director' => 'Wong Kar-wai',
      'pais' => 'Hong Kong',
      'fecha' => '16 de febrero de 2001',
      'imagen' => '23.jpg'
    ],
    [
      'nombre' => 'El Penalti Más Largo',
      'director' => 'Roberto Santiago',
      'pais' => 'España',
      'fecha' => '9 de marzo de 2005',
      'imagen' => '24.jpg'
    ],
    [
      'nombre' => 'Tenet',
      'director' => 'Christopher Nolan',
      'pais' => 'Estados Unidos',
      'fecha' => '3 de septiembre de 2020',
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de personajes</title>
  <LINK REL=StyleSheet HREF="estilo/style.css" TYPE="text/css" MEDIA=screen>
</head>

<body>
  <h1>Listado de personajes</h1>
  <ul class="cabecera">
    <li>Nombre</li>
    <li>Director</li>
    <li>Pais</li>
    <li>Fecha</li>
    <li>Imagen</li>
  </ul>
  <?php $cont = 0;
  foreach ($_SESSION['peliculas'] as $key => $row){
    $cont++;
    ?>
    <ul>
        <li><?php echo $row['nombre']?></li>
        <li><?php echo $row['director']?></li>
        <li><?php echo $row['pais']?></li>
        <li><?php echo $row['fecha']?></li>
        <li>
        <img src="img/<?php echo $cont?>.jpg" alt="<?php echo $row['nombre'] ?>">
        </li>
    </ul>
    <?php } ?>
</body>
</html>
