<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ../Frontend/inicio.php');
  }
  require 'conexion.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: ../Frontend/inicio.php");
    } else {
      $mensaje = "Contraseña o correo estan mal!";
      echo "<script>";
      echo "alert('$mensaje');";  
      echo "window.location = '../Frontend/Log_Ins.html';";
      echo "</script>";
    }
  }

?>