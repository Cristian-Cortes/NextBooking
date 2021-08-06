<?php
  session_start();
  require '../Backend/conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/font-awesome.css">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  </head>
  <body>

    <div class="main-top">
     <header>
      <div class="container-fluid px-lg-5 ">
        <nav class="mnu mx-auto">
              <label for="drop" class="toggle">Menu</label>
              <input type="checkbox" id="drop">
              <ul class="menu">
                <li class="mr-lg-4 mr-3"><a href="#" class="scroll">   

                    <?php if(!empty($user)): ?>
                    <br> Bienvenido <b><?= $user['email']; ?></b>
                </a></li>
                <li class="mr-lg-4 mr-3"><a href="catalogo.html" class="scroll">Catalogo</a></li>
                <li class="mr-lg-4 mr-3"><a href="index.html" class="scroll" style="">Inicio</a></li>
                <li class="mr-lg-4 mr-3"><a href="#work" class="scroll" style="">Galeria</a></li>
                <li class="mr-lg-4 mr-3"><a href="../Backend/logout.php" class="scroll">Cerrar Sesión</a></li>
              </ul>
            </nav>
      </div>
    </header>
    </div>

    <?php else: ?>
      <h1>Upss! Necesitas Iniciar sesión</h1>

      <a href="Frontend/Log_Ins.html">Iniciar sesión</a>
    <?php endif; ?>

  </body>
</html>