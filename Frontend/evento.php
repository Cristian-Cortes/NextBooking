<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: Log_Ins.php');
}
?>


<?php
date_default_timezone_set("America/Santiago");
include 'funciones.php';
include 'config.php';
if (isset($_POST['from'])) 
{

    if ($_POST['from']!="" AND $_POST['to']!="") 
    {


        $inicio = _formatear($_POST['from']);

        $final  = _formatear($_POST['to']);

        $inicio_normal = $_POST['from'];

        $final_normal  = $_POST['to'];

        $nombre = evaluar($_POST['nombre']);

        $apellido_pat = evaluar($_POST['apellido_pat']);

        $apellido_mat = evaluar($_POST['apellido_mat']);

        $telefono   = evaluar($_POST['telefono']);

        $clase  = evaluar($_POST['class']);

        $query="INSERT INTO eventos VALUES(null,'$nombre', '$apellido_pat', '$apellido_mat', '$telefono','','$clase','$inicio','$final','$inicio_normal','$final_normal')";

        $conexion->query($query); 

        $im=$conexion->query("SELECT MAX(id) AS id FROM eventos");
        $row = $im->fetch_row();  
        $id = trim($row[0]);


        $link = "$base_url"."descripcion_evento.php?id=$id";

  
        $query="UPDATE eventos SET url = '$link' WHERE id = $id";

   
        $conexion->query($query); 


        header("Location:pago.html"); 
    }
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <title>Reservaciones</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/style_menu2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;1,300&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
        <link rel="stylesheet" href="css/base.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url?>js/es-ES.js"></script>
        <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/moment.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url?>js/bootstrap-datetimepicker.es.js"></script>
    </head>
<style>
body{

    background-image: url(images/fondo.jpg);
    }
</style>
<body >
    <div class="mostrar-nav"></div>
    <header class="header-menu">
        <section class="header-img">
            <img src="img/user01.png" alt="user-picture" class="img-circle">
            <p class="name_user">
               <?php echo $fetch_info['name'] ?>
            </p>
         </section>
    </header>
        <nav>
            <ul class="menu2">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="catalogo.php">Catalogo</a></li>
                <li><a href="#services">Ofertas</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="#ubicacion">Ubicacion</a></li>
                <li><a href="#contact">Contactanos</a></li>
                <li><a href="../Backend/logout.php">Cerrar sesion</a></li>
            </ul>
        </nav>
        <div class="container">
        <center><br><br><br><br><br><br><br><br><br>
        <div class="row">
            <div class="page-header"><h2></h2></div>
        </div>
        <button class="btn btn-success" data-toggle='modal' data-target='#add_evento'>
            <font color="black" face="Tw Cen MT" size="4" >Añadir reservacion</font>
        </button>
        <a href="calendario.php">
        <button class="btn btn-info" data-toggle='modal' data-target='#add_evento'>
        <font color="black" face="Tw Cen MT" size="4" >Disponibilidad</font>
        </button></a>
        </div><hr></center>
                <div class="row">
                        <div id="calendar"></div> <!-- Aqui se mostrara nuestro calendario -->
                        <br><br>
                </div>
                <!--ventana modal para el calendario-->
                <div class="modal fade" id="events-modal">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                    <div class="modal-body" style="height: 400px">
                                        <p>One fine body&hellip;</p>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        </div>

<div class="modal fade" id="add_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Agregar Reservacion</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
                    <label for="from">Inicio <em style="color: red;">*</em></label>
                    <div class='input-group date' id='from'>
                        <input type='text' id="from" name="from" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>

                    <br>

                    <label for="to">Final <em style="color: red;">*</em></label>
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" id="to" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>

                    <br>

                    <label for="tipo">Tipo de Habitación <em style="color: red;">*</em></label>
                    <select class="form-control" name="class" id="tipo" style="height: 35px;">
                        <option value="event-important">Habitación Individual</option>
                        <option value="event-warning">Habitación Doble</option>
                        <option value="event-info">Habitación Triple</option>
                        <option value="event-inverse">Habitación Quad</option>
                        <option value="event-success">Habitación Queen</option>
                        <option value="event-special">Habitación King</option>
                     
                    </select>

                    <br>



                    <label for="nombre">Usuario <em style="color: red;">*</em></label>
                    <input type="text" required autocomplete="off" name="nombre" class="form-control" id="nombre" placeholder="Introduce tu nombre">

                    <br>


                    <label for="apellido_pat">Apellido Paterno <em style="color: red;">*</em></label>
                    <input type="text" required autocomplete="off" name="apellido_pat" class="form-control" id="apellido_pat" placeholder="Introduce tu apellido paterno">

                    <br>


                    <label for="apellido_mat">Apellido Materno <em style="color: red;">*</em></label>
                    <input type="text" required autocomplete="off" name="apellido_mat" class="form-control" id="apellido_mat" placeholder="Introduce tu apellido Materno">

                    <br>


                    <label for="telefono">Telefono <em style="color: red;">*</em></label>
                    <input id="telefono" name="telefono" required class="form-control" autocomplete="off" placeholder="Introduce tu número telefonico"></input>

    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date()
            });

        });
    </script>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>
        </form>
    </div>
  </div>
</div>
</div>
<script src="js/mostra-nav.js"></script>
</body>
</html>
