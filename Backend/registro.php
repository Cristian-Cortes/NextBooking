<?php

  require 'conexion.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (usuario, email, password) VALUES (:usuario, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $mensaje = "Usuario registrado con exito!";
      echo "<script>";
      echo "alert('$mensaje');";  
      echo "window.location = '../Frontend/Log_Ins.html';";
      echo "</script>"; 
    } else {
      $mensaje = "Usuario ya existe!";
      echo "<script>";
      echo "alert('$mensaje');";  
      echo "window.location = '../Frontend/Log_Ins.html';";
      echo "</script>";
    }
  }
?>