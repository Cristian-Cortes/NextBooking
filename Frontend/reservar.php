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
<!DOCTYPE html>
<html lang="es">
<head>
	<title>NextBooking | Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/style_menu2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;1,300&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/styleslider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="mostrar-nav"></div>
	<header>
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
				<li><a href="inicio.php#services">Ofertas</a></li>
				<li><a href="galeria.php">Galeria</a></li>
				<li><a href="inicio.php#ubicacion">Ubicacion</a></li>
				<li><a href="#contact">Contactanos</a></li>
				<li><a href="../Backend/logout.php">Cerrar sesion</a></li>
			</ul>
		</nav>
<!--Inicio aparatado de imegenes-->

<!--Inicio aparatado de formulario-->
		<br><br>
	 <section class="agileits-services" id="datos">
		<div class="container">
			<h2 class="heading text-capitalize">Ingrese sus datos</h2>
		   <p class="subs mt-4">Para continuar con la reservacion</p>
			<div class="contact_grid_right mt-5 mx-auto text-center"></div>
				<form action="../Backend/reservar.php" method="post">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" name="Name" placeholder="Nombre">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" name="Apell_paterno" placeholder="Apellido parterno">
				    </div>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="Apell_materno" placeholder="Apellido materno">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="telefono" placeholder="Telefono">
				  </div>
				  <div class="form-row">
				  	<div class="form-group col-md-4">
				      <select name="habitaciones" class="form-control">
				        <option selected>Elija su habitacion...</option>
				        <option value="Habitacion_SOL">Habitacion Sol</option>
						<option value="Habitacion_LUNA">Habitacion Luna</option>
						<option value="Habitacion_TIERRA">Habitacion Tierra</option>
						<option value="Habitacion_ESTRELLA">Habitacion Estrella</option>
						<option value="Habitacion_MARTE">Habitacion Marte</option>
						<option value="Habitacion_VENUS">Habitacion Venus</option>
				      </select>
				    </div>
				    <div class="form-group col-md-6">
				    	<label for="inputState">Fecha de entrada</label>
				      <input type="date" class="form-control" name="fech_entrada">
				    </div>
				    <div class="form-group col-md-2">
				    	<label for="inputState">Fecha de entrada</label>
				      <input type="date" class="form-control" name="fech_salida">
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary btn-lg">Guardar datos</button>
				</form>
			</div>
		</div>
	</section>
	<div class="agileits-services" id="pago">
		<div class="container">
			<h2 class="heading text-capitalize">Metodos de pago</h2>
<!--===============================Metodo de pago=======================================-->
			<form id="card-form">
	            <input type="hidden" name="conektaTokenId" id="conektaTokenId" value="">
	            <div class="card">
	                <div class="card-header">
	                    <div class="row display-tr">
	                        <h3>Pago en línea</h3>
	                    </div>
	                </div>
	                <img src="img/metodos.png" alt="user-picture" class="img-metodos">
	                <div class="card-body">
	                    <div class="row">
	                        <div class="col-md-6">
	                            <label>Nombre del tarjetahabiente</label>
	                            <input value="Juan Ramirez Ledesma" data-conekta="card[name]" class="form-control" name="name" id="name"  type="text" >
	                        </div>
	                        <div class="col-md-6">
	                            <label>Número de tarjeta</label>
	                            <input value="4242424242424242" name="card" id="card" data-conekta="card[number]" class="form-control"   type="text" maxlength="16" >
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-6">
	                            <label>CVC</label>
	                            <input value="399" data-conekta="card[cvc]" class="form-control"  type="text" maxlength="4" >
	                        </div>
	                        <div class="col-md-6">
	                            <label>Fecha de expiración (MM/AA)</label>
	                            <div>
	                                <input style="width:50px; display:inline-block" value="11" data-conekta="card[exp_month]" class="form-control"  type="text" maxlength="2" >
	                                <input style="width:50px; display:inline-block" value="20" data-conekta="card[exp_year]" class="form-control"  type="text" maxlength="2" >
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-4">
	                            <label><span>Email</span></label>
	                            <input class="form-control" type="text" name="email" id="email" maxlength="200" value="pepepecaspicapapasconunpico666@gmail.com">
	                        </div>
	                        <div class="col-md-4">
	                            <label>Concepto</label>
	                            <input class="form-control" type="text" name="description" id="description" maxlength="100" value="papitas">
	                        </div>
	                        <div class="col-md-4">
	                            <label>Monto</label>
	                            <input class="form-control" type="number" name="total" id="total" value="30">
	                        </div>
	                    </div>
	                    <br>
	                    <div class="row">
	                        <div class="col-md-12" style="text-align:center;">
	                            <button class="btn btn-success btn-lg btn-block">
	                                <i class="fa fa-check-square"></i> RESERVAR
	                            </button>
	                        </div>   
	                    </div>
	                </div>
	            </div>
	        </form>
		</div>
	</div>
	<script src="js/pago.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/mostra-nav.js"></script>									  
</body>
</html>