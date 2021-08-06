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
} ?>
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
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
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
<!--Inicio aparatado de habitaciones-->
<section class="news text-center" id="work">
		<div class="container">
			<br><br><br>
			 <h3 class="heading text-capitalize"> Habitaciones Individuales </h3>
		   <p class="subs mt-4">Siempre hay una para ti.</p>
			<div class="row news-grids mt-5">
						<div class="col-lg-4 col-md-6 newsgrid1">
							<div class="newsgrid_tp new_grd">
								<img src="img/I1.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion SOL</h4>
										<p class="mt-4">Cama kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$680/noche</span><br>
										<span id="ReadMore">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_SOL.php">Detalles</a>
									</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  newsgrid2">
							<div class="newsgrid_tp new_grd1">
								<img src="img/I2.jpg" alt="news image" class="img-fluid">
								<div class="news_bt">
									<h4>Habitacion Luna</h4>
									<p class="mt-4">Cama kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$680/noche</span><br>
									<span id="ReadMore2">
										<br>
										<h6 style="text-align: left;">Caracteristicas:</h6>
										<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
										<h6 style="text-align: left;">Servicios incluidos:</h6>
										<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
									</span>
										<button type="button" class="btn btn-link" id="btn-read2">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_LUNA.php">Detalles</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  newsgrid5">
							<div class="newsgrid_tp new_grd1">
								<img src="img/I3.jpg" alt="news image" class="img-fluid">
								<div class="news_bt">
									<h4>Habitacion Tierra</h4>
									<p class="mt-4">Cama kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$680/noche</span><br>
									<span id="ReadMore3">
										<br>
										<h6 style="text-align: left;">Caracteristicas:</h6>
										<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
										<h6 style="text-align: left;">Servicios incluidos:</h6>
										<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
									</span>
										<button type="button" class="btn btn-link" id="btn-read3">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_TIERRA.php">Detalles</a>
								</div>
							</div>
						</div>
				
						<div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid1">
							<div class="newsgrid_tp new_grd">
								<img src="img/I4.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion Estrella</h4>
										<p class="mt-4">Cama kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$680/noche</span><br>
									<span id="ReadMore4">
										<br>
										<h6 style="text-align: left;">Caracteristicas:</h6>
										<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
										<h6 style="text-align: left;">Servicios incluidos:</h6>
										<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
									</span>
										<button type="button" class="btn btn-link" id="btn-read4">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_ESTRELLA.php">Detalles</a>
									</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid2">
							<div class="newsgrid_tp new_grd1">
								<img src="img/I5.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion Marte</h4>
										<p class="mt-4">Cama kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$680/noche</span><br>
										<span id="ReadMore5">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read5">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_MARTE.php">Detalles</a>
									</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid2">
							<div class="newsgrid_tp new_grd1">
								<img src="img/I6.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion venus</h4>
										<p class="mt-4">Cama kingsais, Vista al sol, Baño completo mas tina de baño</p>
										<span>$680/noche</span><br>
										<span id="ReadMore6">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read6">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_VENUS.php">Detalles</a>
									</div>
							</div>
						</div>
					</div>
			</div>
		</section>
		<section class="news text-center" id="work">
		<div class="container">
			<br><br><br>
			 <h3 class="heading text-capitalize"> Habitaciones Dobles</h3>
		   <p class="subs mt-4">Siempre hay una para ti.</p>
			<div class="row news-grids mt-5">
						<div class="col-lg-4 col-md-6 newsgrid1">
							<div class="newsgrid_tp new_grd">
								<img src="img/D1.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion Galaxia</h4>
										<p class="mt-4">Dos camas kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$940/noche</span><br>
										<span id="ReadMore7">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read7">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_GALAXIA.php">Detalles</a>
									</div>

							</div>
						</div>
						<div class="col-lg-4 col-md-6  newsgrid2">
							<div class="newsgrid_tp new_grd1">
								<img src="img/D2.jpg" alt="news image" class="img-fluid">
								<div class="news_bt">
									<h4>Habitacion Universo</h4>
									<p class="mt-4">Dos camas kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$940/noche</span><br>
									<span id="ReadMore8">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read8">Leer Mas</button><br><br>
								    <a class="btn btn-info" href="Habitacion_UNIVERSO.php">Detalles</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  newsgrid5">
							<div class="newsgrid_tp new_grd1">
								<img src="img/D3.jpg" alt="news image" class="img-fluid">
								<div class="news_bt">
									<h4>Habitacion Constelacion</h4>
									<p class="mt-4">Dos camas kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$940/noche</span><br>
									<span id="ReadMore9">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read9">Leer Mas</button><br><br>
									<a class="btn btn-info" href="Habitacion_CONSTELACION.php">Detalles</a>
								</div>
							</div>
						</div>
				
						<div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid1">
							<div class="newsgrid_tp new_grd">
								<img src="img/D4.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion Cometa</h4>
										<p class="mt-4">Dos camas kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$940/noche</span><br>
										<span id="ReadMore10">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read10">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_COMETA.php">Detalles</a>
									</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid2">
							<div class="newsgrid_tp new_grd1">
								<img src="img/D5.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion Metioro</h4>
										<p class="mt-4">Dos camas kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$940/noche</span><br>
										<span id="ReadMore11">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read11">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_METIORO.php">Detalles</a>
									</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid2">
							<div class="newsgrid_tp new_grd1">
								<img src="img/D6.jpg" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Habitacion Espacio</h4>
										<p class="mt-4">Dos camas kingsais, Vista al sol, Baño completo mas tina de baño</p><span>$940/noche</span><br>
										<span id="ReadMore12">
											<br>
											<h6 style="text-align: left;">Caracteristicas:</h6>
											<p class="mt-4" style="text-align: left;">*Habitacion para dos personas<br>*Medidas de Higiene adecuadas<br>*No fumar</p><br>
											<h6 style="text-align: left;">Servicios incluidos:</h6>
											<p class="mt-4" style="text-align: left;">*Aire acondicionado<br>*Wifi gratis<br>*Estacionamiento<br>*Balcon</p>
										</span>
										<button type="button" class="btn btn-link" id="btn-read12">Leer Mas</button><br><br>
										<a class="btn btn-info" href="Habitacion_ESPACIO.php">Detalles</a>
									</div>
							</div>
						</div>
					</div>
			</div>
		</section>
		
<!--Inicio aparatado de contacto-->
	 <section class="wedo" id="contact">
		<div class="container">
			<h3 class="heading text-capitalize text-white text-center"> Contactanos </h3>
		   <p class="subs mt-4 text-center">Sus comentarios atribuyen a nuestro crecimiento.</p>
			<div class="contact_grid_right mt-5 mx-auto text-center">
				<form action="#" method="post">
					<div class="row contact_top">
						<div class="col-sm-6">
							<input type="text" name="Name" placeholder="Nombre" required="">
						</div>
						<div class="col-sm-6">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
					</div>	
						<input type="text" name="Name" placeholder="Nombre" required="">
						<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Mensage...</textarea>
						<input type="submit" value="Enviar Mensage">
						<input type="reset" value="Borrar Formato">
						<div class="clearfix"> </div>
				</form>
			</div>
			<div class="cpy-right text-center">
			<div class="follow">
				<ul class="social_section_1info">
					<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#"><span class="fa fa-google"></span></a></li>
					<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
					
					<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
					<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>
			</div>
				<p>© 2021 Exclusivo. Derechos reservados | Diseñado por <span>NextBooking</span>
				</p>
			</div>
		</div>
	</section>
	<script src="js/mostra-nav.js"></script>
	<script src="js/LeerMas.js"></script>										  
</body>
</html>