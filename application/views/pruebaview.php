<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title> <!--variable que recibe los datos del controler-->
	<link rel="stylesheet" href="assets/css/prueba.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/popper.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>

<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 5.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /*jssor slider bullet skin 057 css*/
    .jssorb057 .i {position:absolute;cursor:pointer;}
    .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
    .jssorb057 .i:hover .b {stroke-opacity:.7;}
    .jssorb057 .iav .b {stroke-opacity: 1;}
    .jssorb057 .i.idn {opacity:.3;}

    /*jssor slider arrow skin 073 css*/
    .jssora073 {display:block;position:absolute;cursor:pointer;}
    .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
    .jssora073:hover {opacity:.8;}
    .jssora073.jssora073dn {opacity:.4;}
    .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
</style>	

</head>
<body>
	<!--############################# TopNAV ###########################-->
	<div class="topnav">
		<div class="nav-img">
			<a href="">
				<img src="assets/logos/Logo-tours-contorno.png" alt="" style="width: 180px; height: 60px;">
			</a>	
		</div>
		
		<div class="nav-cont">
			<a href="#">Home</a>
			<a href="#">News</a>
			<a href="contacto">Contact</a>
			<a href="about">About</a>
		</div>
	</div>
	<!--############################# TopNAV ###########################-->
	
	<!--################################################################################  Carousel    ###############################################################-->
	<div id="demo" class="carousel slide" data-ride="carousel">

		
	  <!-- Indicators -->
	  <ul class="carousel-indicators">

	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>

	  </ul>

	  
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    
	    <div class="carousel-item active">
	      <img src="assets/img/RivieraMaya-Tulum.jpg" alt="Tulum" width="1100" height="350">
	    </div>
	    <div class="carousel-item">
	      <img src="assets/img/Playa.jpg" alt="Chicago" width="1100" height="350">
	    </div>
	    <div class="carousel-item">
	      <img src="assets/img/xcaret.jpg" alt="New York" width="1100" height="350">
	    </div>
	  </div>

	  
	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>

	<!--################################################################################  Carousel    ###############################################################-->

	<!--######################### pequeño form #######################-->	
	<div class="bg-text">
		<div class="container mt-3">
		  <h3>Reservar</h3>
		  
		  <form>
		    <div class="input-group mb-3">
		      <div class="input-group-prepend">
		        <span class="input-group-text">Person</span>
		      </div>
		      <input type="text" class="form-control" placeholder="First Name">
		      <input type="text" class="form-control" placeholder="Last Name">
		    </div>  
		  </form>
		  
		  <form>
		    <div class="input-group mb-3">
		      <div class="input-group-prepend">
		        <span class="input-group-text">One</span>
		        <span class="input-group-text">Two</span>
		        <span class="input-group-text">Three</span>
		      </div>
		      <input type="text" class="form-control">
		    </div>
		  </form>
		</div>

	</div>

	<!--###############################################################-->
	
	<!--################################################################################  Navbar   #################################################################-->

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
	  <!-- Brand/logo -->
	  <a class="navbar-brand" href="#">
	  	<img src="assets/logos/Logo-tours.png" alt="" style="width: 180px; height: 60px;">
	  </a>
	  
	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#" style="color: white;">Inicio</a>
	      <div class="dropdown-menu">
	      	<a class="dropdown-item" href="#section1">Actividades</a>
	      	<a class="dropdown-item" href="#section2">Tours</a>
	      </div>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#" style="color: white;">Tours</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#" style="color: white;">Paquetes</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#" style="color: white;">Contacto</a>
	    </li>
	  </ul>
	</nav>



	<!--################################################################################  Navbar   #################################################################-->

	<!--################################################################################  Navbar   #################################################################-->

	<h3 style="text-align: center; color: #00AAA6;">Tours All inclusive resorts Cancun, Playa del Carmen and Riviera Maya</h3>
	<hr>
	<br>
	<div class="jumbotron text-center" style="background-color: black;">
		<h1 class="titulo">Actividades/Promociones</h1>
		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1090px;height:250px;overflow:hidden;visibility:hidden;">
	        <!-- Loading Screen -->
	        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
	            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/img/spin.svg" />
	        </div>
	        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1090px;height:250px;overflow:hidden;">
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/restaurantes-xcaret-01.jpg" />
	                <div class="text-block">
	                	<h2>Xcaret</h2>
	                	<p>Desde: $1,800 MXN</p>	
	                </div>
	                
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/restaurante_servicios_xplor_1.jpg" />
	                <div class="text-block">
	                	<h2>Xplore</h2>
	                	<p>Desde: $1,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/rio_nado_xplor_3.jpg" />
	                <div class="text-block">
	                	<h2>Xplore</h2>
	                	<p>Desde: $1,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/rio_nado_xplor_2.jpg" />
	                <div class="text-block">
	                	<h2>Xplore</h2>
	                	<p>Desde: $1,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/rio_nado_xplor_4.jpg" />
	                <div class="text-block">
	                	<h2>Cancun</h2>
	                	<p>Desde: $1,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/restaurante_servicios_xplor_2.jpg" />
	                <div class="text-block">
	                	<h2>Cancun</h2>
	                	<p>Desde: $1,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/riviera_maya.jpg" />
	                <div class="text-block">
	                	<h2>Riviera Maya</h2>
	                	<p>Desde: $2,200 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/subterraneas_xplor_1.jpg" />
	                <div class="text-block">
	                	<h2>Cancun</h2>
	                	<p>Desde: $4,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/subterraneas_xplor_2.jpg" />
	                <div class="text-block">
	                	<h2>Chichen-Itza</h2>
	                	<p>Desde: $3,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/subterraneas_xplor_3.jpg" />
	                <div class="text-block">
	                	<h2>Xplore</h2>
	                	<p>Desde: $2,800 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/balsas_xplor_3.jpg" />
	                <div class="text-block">
	                	<h2>Cancun</h2>
	                	<p>Desde: $1,900 MXN</p>	
	                </div>
	            </div>
	            <div class="slidegall">
	                <img data-u="image" src="assets/img/anfibios_xplor_3.jpg" />
	                <div class="text-block">
	                	<h2>Xplore</h2>
	                	<p>Desde: $1,600 MXN</p>	
	                </div>
	            </div>
	        </div>
	        <!-- Bullet Navigator -->
	        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
	            <div data-u="prototype" class="i" style="width:16px;height:16px;">
	                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
	                </svg>
	            </div>
	        </div>
	        <!-- Arrow Navigator -->
	        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
	            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
	            </svg>
	        </div>
	        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
	            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
	            </svg>
	        </div>
	    </div>
		
	</div>


	<!--############################################################################################################################################################-->
<div class="container-fluid" style="padding-top: 20px; background: #F7F7F7; margin: 10px;">
	<div class="asis">
		<h2 style="text-align: center;">Nuestros Servicios</h2>
	</div>
		
	 	<br>
	  	
		<div class="tour">
		  	<div class="asistencia">
		  		<div class="icon-container">
		  			<img src="assets/iconos/011-support1.png" alt="Avatar">


		  		</div>
		  		<h1>Asistencia</h1>
		  		<p>Estamos presentes antes Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo neque, possimus in adipisci suscipit laborum officiis dolorum enim nostrum magni voluptatem fugiat earum ducimus, repellat iusto eveniet velit optio?</p>	
		  	</div>
		  	
		  	<div class="asistencia">
		  		<div class="icon-container">
		  			<img src="assets/iconos/010-bus1.png" alt="Avatar">
	
		  		</div>
		  		<h1>Transporte</h1>
		  		<p>Estamos presentes antes Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo neque, possimus in adipisci suscipit laborum officiis dolorum enim nostrum magni voluptatem fugiat earum ducimus, repellat iusto eveniet velit optio?</p>
		  	</div>
		  	<div class="asistencia">
		  		<div class="icon-container">
		  			<img src="assets/iconos/003-maya-pyramid1.png" alt="Avatar">
	
		  		</div>
		  		<h1>Excursiones</h1>
		  		<p>Estamos presentes antes Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo neque, possimus in adipisci suscipit laborum officiis dolorum enim nostrum magni voluptatem fugiat earum ducimus, repellat iusto eveniet velit optio?</p>
		  	</div>
		  	<div class="asistencia">
		  		<div class="icon-container">
		  			<img src="assets/iconos/014-bed1.png" alt="Avatar">
	
		  		</div>
		  		<h1>Hoteleria</h1>
		  		<p>Estamos presentes antes Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo neque, possimus in adipisci suscipit laborum officiis dolorum enim nostrum magni voluptatem fugiat earum ducimus, repellat iusto eveniet velit optio?</p>
		  	</div>
		  	
		  	<!--<div>
		  		<img src="../iconos/010-bus.png" alt="Avatar" style="width:5%; height: 5%;">		
		  	</div>-->
		  	
		</div>  	
	  	
	  	
</div>

<script type="text/javascript">jssor_1_slider_init();</script>
	
</body>

<br>

<div class="jumbotron text-center" style="margin-bottom:0; background-color: #00AAA6;">
	<h1 style="text-align: center; color: white;">MayanDreamsTours</h1>

	<h3 style="color: yellow; margin: 5px;">Atencion al Cliente/Ventas:</h3>
	<p style="margin: 5px;">Lunes a viernes de 7:00 a.m. a 12:00 a.m. | Sábados y domingos de 7:00 a.m. a 10:00 p.m. Hora local</p>
	<br>
	<div class="info">
		<h3 style="color: yellow; margin: 5px;">Telefonos de Contacto:</h3>
		<p>Cancun: 99884122</p>
		<p>Playa del Carmen: 9988223</p>
		<p>Tulum: 989388383</p>	
	</div>
	<div class="logof">
		<img src="assets/logos/Logo-ngm.jpg" alt="">
	</div>
	<p style="margin: 5px;">© 2019 MayanDreamsTours. Todos los derechos reservados</p>

</div>
</html>