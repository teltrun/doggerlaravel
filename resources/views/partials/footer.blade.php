<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Link para iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Links meta charset y viewport -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Links css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Links Bosstrap y Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  </head>
  <body>
    <!-- Menú Lateral -->
    <?php
      $opciones=["Información","Asitencia","Prensa", "Api", "Empleo", "Privacidad", "Condiciones", "Directorio", "Perfiles", "Hashtags"];
    ?>
    <div class="containerFooter">
      <ul class="listaOpcionesFooter">
        @foreach ($opciones as $opcion)
          <li class="cadaOpcionFooter">{{$opcion}}</li>
        @endforeach
      </ul>
    </div>
  </body>
</html>
