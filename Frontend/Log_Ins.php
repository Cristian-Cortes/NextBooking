<?php
  require_once "controllerUserData.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script 
     src="https://kit.fontawesome.com/64d58efce2.js"
     crossorigin="anonymous"></script>
  <title>Login NextBooking</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form class="sign-in-form" action="Log_Ins.php" method="POST" autocomplete="off">
          <h2 class="title">Inicio de sesion</h2>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Correo electronico" name="email" value="<?php echo $email ?>" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" name="password">
          </div>
          <p class="social-text">¿Olvidaste tu contraseña? <a href="forgot-password.php"> Recuperar</a></p>
          <input type="submit" value="Ingresar" class="btn solid" name="login" value="Login">
          <p class="social-text">O inicia sesion con tus redes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form class="sign-up-form" action="Log_Ins.php" method="POST" autocomplete="off">
          <h2 class="title">Registrate</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="name" placeholder="Nombre del usuario" required value="<?php echo $name ?>">
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input class="form-control" type="email" name="email" placeholder="Correo electronico" required value="<?php echo $email ?>">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
             <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
              <input class="form-control" type="password" name="cpassword" placeholder="Confirmar Contraseña" required>
          </div>
          <input class="btn" type="submit" name="signup" value="Registrarme">


          <p class="social-text">O registrate con tus redes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>¿No tiened una cuenta?</h3>
          <p>No te preocupes creea un cuenta y forma parte de nuestra comunidad.</p>
          <button class="btn transparent" id="sign-up-btn">Registrate</button>
        </div>
        <img src="img/log.svg" class="image" alt="">
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>No te preocupes inicia sesion aqui y forma parte de nuestra comunidad.</p>
          <button class="btn transparent" id="sign-in-btn">Inicia sesion</button>
        </div>
        <img src="img/register.svg" class="image" alt="">
      </div>
    </div>
  </div>
  <script src="js/app.js"></script>
</body>
</html>