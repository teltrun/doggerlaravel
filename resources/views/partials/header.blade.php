<!DOCTYPE html>
<html lang="en" dir="ltr">
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
  <body>
    <!-- Menú Lateral -->
    <?php
      $menuLateralDerecha=[
        "home" => "<i class='fas fa-paw'>",
        "timeline" => "<i class='fas fa-home'>",
        "perfil" => "<i class='fas fa-user'>",
        "FAQ" => "<i class='fas fa-question-circle'>",
      ];
    $usuario = "";

      $menuLateralIzquierda=[
        "Subir una Foto" => "<i class='fas fa-camera'>",
      ];
    $usuario = "";
    ?>

    <!-- Barra Gris Header -->
    <div class="contenedor_header">
      <!-- Lupa y hamburguesa-->
      <div class="header_hamburguesa">
        <i class="material-icons hamburguesa">menu</i>
      </div>
      <div class="header_izquierda">
        <i class="material-icons lupa">search</i>
      </div>
      <!-- Logo -->
      <div class="header_medio">
        <img class="imagen_logo"src="img/logo@2x.png" alt="Logo Dogger">
      </div>
      <!-- Botones de registro y login -->
      <div class="header_derecha">
        <form class="boton_perfil" action="../auth/login" method="post">
          <button class="boton_perfil" type="submit" name="button">
            <i class="boton_perfil">Login</i>
          </button>
        </form>
        <form class="boton_registrarse" action="registrarse.php" method="post">
          <button class="boton_registrarse" type="submit" name="button">Registrarse</button>
        </form>
      </div>
    </div>
    <div class="menu_lateral_derecha">
      <ul>
        <?php
        foreach($menuLateralDerecha as $key => $valor): ?>
          <li><a href="<?= $key?>.php" title="<?=$key?>"><?=$valor?></i></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="menu_lateral_izquierda">
      <ul>
        <?php
        foreach($menuLateralIzquierda as $key => $valor): ?>
          <li><a href="<?= $key?>.php" title="<?=$key?>"><?=$valor?></i></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </body>
</html>
