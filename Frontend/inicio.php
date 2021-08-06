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
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>
<body>
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
	<section class="banner-bottom" id="about">
		<div class="container">
            <div class="inner-sec">
                <div class="row middle-grids">
                    <div class="col-lg-4 advantage-grid-info1">
                        <div class="advantage_left1 text-center">
                            <img src="img/5.jpg" class="img-fluid" alt="">
                        </div>
                    </div> 
					 <div class="col-lg-8 advantage-grid-info">
                        <div class="advantage_left">
                             <h1 class="heading text-capitalize mb-sm-5 mb-4">Hola. Nosotros somos <span>Hotel Sol y Luna</span></h1>
							<p class="mt-4">Un hotel <span>Familiar. </span>Comprometido con la satisfaccion del cliente ofreciendo servicios de la mas alta calidad a precios accesibles.</p>
							<a href="#services" class="banner-button btn mt-5 scroll">Conoce nuestros servicios</a>
						</div>
                    </div>
                </div>
            </div>
		</div>
    </section>

<!--Inicio aparatado de servicios-->
    <div class="agileits-services" id="services">
		<div class="container">
		   <h2 class="heading text-capitalize"> Servicios </h2>
		   <p class="subs mt-4">A la orden del cliente.</p>
            <div class="agileits-services-row row pt-md-5 pb-5  text-center">
                <div class="col-lg-4">
                    <div class="agileits-services-grids mt-lg-0 mt-md-0 mt-5">
                    	<img src="img/HF.jpg" alt="news image" class="img-fluid">
                       <span class="fa fa-code"></span>
                        <h4 class="mt-4 mb-4">Hospedaje</h4>
                        <p>Espacio amplio y confortable, privacidad absoluta, servicio a la habitacion, atencion personalizada y disponibilidad de horarios de entrada y salida.</p>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="agileits-services-grids mt-lg-0 mt-5">
                    	<img src="img/EF.jpg" alt="news image" class="img-fluid">
                        <span class="fa fa-copy"></span>
                        <h4 class="mt-4 mb-4">Eventos Familiares</h4>
                        <p>Espacio amplio y confortable para convivir con la familia y amigos, administracion de eventos, alimentos y moviliario a la disposicion del cliente.</p>
                    </div>
                </div>
                <div class="col-lg-4  mt-lg-0 mt-5">
                    <div class="agileits-services-grids">
                    	<img src="img/HE.jpg" alt="news image" class="img-fluid">
                       <span class="fa fa-diamond"></span>
                       <h4 class="mt-4 mb-4">Habitaciones Expres</h4>
                        <p>Renta de habitaciones por lapsos de tiempo establecidos, servicios de alta calidad y privacidad absoluta, servicio a la habitacion personalisado.</p>
                    </div>
                </div>
            </div>
			<p class="subs mb-4">Servicios adaptables a tus necesidades, te esperamos</p>
			<a href="catalogo.php" class="banner-button btn">Catalogo de Habitaciones</a>
    	</div>
	</div>
<!--Inicio aparatado de ubicacion-->
	<div class="agileits-services" id="ubicacion">
		<div class="container">
		   <h2 class="heading text-capitalize"> Nos ubicamos </h2>
		   <p class="subs mt-4">Luis Chávez Orozco, No. 12, Col, El Nith, Ixmiquilpan Hidalgo.</p>
            <div class="agileits-services-row row pt-md-5 pb-5  text-center">
            	<div id="map"></div> 
            </div>
			<p class="subs mb-4">Servicios adaptables a tus necesidades, te esperamos</p>
			<a href="https://goo.gl/maps/vpkrCF5NXWrgmUgU6" class="banner-button btn">Como llegar</a>
    	</div>
	</div>

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
	<script src="js/Map_Ubicacion.js"></script>
	<!--API KEY-->
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>											  
</body>
</html>