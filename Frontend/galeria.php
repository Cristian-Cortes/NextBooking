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
	<link rel="stylesheet" href="css/stylegaleria.css">
	<link rel="stylesheet" href="css/styleG.css">
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
<!--Inicio aparatado de galeria-->
<div class="agileits-services" id="galeria">
		<div class="container">
			<br><br><br>
		   <h2 class="heading text-capitalize"> Galeria </h2>
		   <p class="subs mt-4">Las mejores instalaciones, la mayor comodidad y el mejor precio.</p>
            <div class="agileits-services-row row pt-md-5 pb-5  text-center">
                <main class="main">
		<div class="grupo galeria">
			<div class="contenedor contenedor-flexible">
				<div class="column column--50-25">
					<img src="img/galeria/G2.png" alt="" class="galeria_img galeria_img--grande">
					<img src="img/galeria/G1.jpg" alt="" class="galeria_img galeria_img--chica">
				</div>
				<div class="column column--50-25">
					<img src="img/galeria/G3.jpg" alt="" class="galeria_img galeria_img--chica">
					<img src="img/galeria/G4.jpg" alt="" class="galeria_img galeria_img--grande">
				</div>
				<div class="column column--50-25">
					<img src="img/galeria/G5.jpg" alt="" class="galeria_img galeria_img--grande">
					<img src="img/galeria/G6.jpg" alt="" class="galeria_img galeria_img--chica">
				</div>
				<div class="column column--50-25">
					<img src="img/galeria/G7.jpg" alt="" class="galeria_img galeria_img--chica">
					<img src="img/galeria/G8.jpeg" alt="" class="galeria_img galeria_img--grande">
				</div>
				<div class="column column--50-25">
					<img src="img/galeria/G9.jpg" alt="" class="galeria_img galeria_img--grande">
					<img src="img/galeria/G10.jpg" alt="" class="galeria_img galeria_img--chica">
				</div>
				<div class="column column--50-25">
					<img src="img/galeria/G11.jpg" alt="" class="galeria_img galeria_img--chica">
					<img src="img/galeria/G12.jpg" alt="" class="galeria_img galeria_img--grande">
				</div>
				<div class="column column--50-25">
					<img src="img/galeria/G13.jpg" alt="" class="galeria_img galeria_img--grande">
					<img src="img/galeria/G14.jpg" alt="" class="galeria_img galeria_img--chica">
				</div>
				<div class="column column--50-25">
					<img src="img/galeria/G15.jpg" alt="" class="galeria_img galeria_img--chica">
					<img src="img/galeria/G16.jpg" alt="" class="galeria_img galeria_img--grande">
				</div>
			</div>
		</div>
	</main>
            </div>
			
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/Gmain.js"></script>
	<script type="text/javascript" src="js/Gmenu.js"></script>											  
</body>
</html>