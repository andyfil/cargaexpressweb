<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'classes/PHPMailer/src/Exception.php';
require 'classes/PHPMailer/src/PHPMailer.php';
require 'classes/PHPMailer/src/SMTP.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CargaExpress terminales de carga para dispositivos m&oacute;viles ubicado en establecimientos de alto tr&aacute;nsito, quedarse sin bater&iacute;a ya no es un problema</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet"> 
    <link href="css/animate.css" rel="stylesheet"> 
	<link href="css/presets/preset1.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link id="preset" rel="stylesheet" type="text/css" href="css/presets/preset1.css">
	
	
				<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	
	
	
	<!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <style type="text/css">
	    	@font-face {
    font-family: 'Gotham-Bold';
    src: url('fonts/Gotham-Bold.eot');
    src: url('fonts/Gotham-Bold.eot?#iefix') format('embedded-opentype'),
         url('fonts/Gotham-Bold.woff') format('woff'),
         url('fonts/Gotham-Bold.ttf') format('truetype'),
         url('fonts/Gotham-Bold.svg#Gotham-Bold') format('svg');
    font-weight: normal;
    font-style: normal;
	}
	@font-face {
		font-family: 'Gotham-Light';
		src: url('fonts/Gotham-Light.eot');
		src: url('fonts/Gotham-Light.eot?#iefix') format('embedded-opentype'),
		 url('fonts/Gotham-Light.woff') format('woff'),
		 url('fonts/Gotham-Light.ttf') format('truetype'),
		 url('fonts/Gotham-Light.svg#Gotham-Light') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	@font-face {
		font-family: 'helvetica-93-extended-black';
		src: url('fonts/helvetica-93-extended-black.eot');
		src: url('fonts/helvetica-93-extended-black.eot?#iefix') format('embedded-opentype'),
		 url('fonts/helvetica-93-extended-black.woff') format('woff'),
		 url('fonts/helvetica-93-extended-black.ttf') format('truetype'),
		 url('fonts/helvetica-93-extended-black.svg#helvetica-93-extended-black') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	@font-face {
		font-family: 'HelveticaLt';
		src: url('fonts/HelveticaLt.eot');
		src: url('fonts/HelveticaLt.eot?#iefix') format('embedded-opentype'),
		 url('fonts/HelveticaLt.woff') format('woff'),
		 url('fonts/HelveticaLt.ttf') format('truetype'),
		 url('fonts/HelveticaLt.svg#HelveticaLt') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	
	</style>
      
	  
	  <meta name="theme-color" content="#111111">
	  
</head><!--/head-->

<body>
	
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner">
			</div>
		</div>
	</div>
	<!--/.preloader-->

	<header id="header">      
        <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/">
                    	<h1><img src="images/presets/preset1/logo.png" alt="logo"></h1>
                    </a>
                    <a class="navbar-brand" title="CargaExpress Ecuador" href="http://www.cargaexpress.com.ec">
						<img src="images/ec-flag.jpg" />
					</a>
                    
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#header">Inicio</a></li>
                        <li class="scroll"><a href="#about-us">Servicios</a></li>                         
                        <li class="scroll"><a href="#services">Beneficios</a></li>
                        <li class="scroll"><a href="#portfolio">Fotos</a></li>                     
                        <li class="scroll"><a href="#testimonial">Testimonios</a></li>
                        <li class="scroll"><a href="#franquicia">Franquicia</a></li>
                        <li class="scroll"><a href="#blog">Prensa</a></li>
                        <li class="scroll"><a href="#contact">Contacto</a></li>                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home" class= "hidden-xs">	   
    	<div id="home-carousel" class="carousel slide" data-interval="false">
		  	<ol class="carousel-indicators">
				<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home-carousel" data-slide-to="1"></li>
				<li data-target="#home-carousel" data-slide-to="2"></li>
                <li data-target="#home-carousel" data-slide-to="3"></li>
				<li data-target="#home-carousel" data-slide-to="4"></li>
                <li data-target="#home-carousel" data-slide-to="5"></li>
			</ol>
			<!--/.carousel-indicators-->
			<div id="claim" class="hidden-xs" style="width: 100%">
        	Servicio cargador de baterías para dispositivos móviles.
        </div> 
		  	<div class="carousel-inner">

				<!--<div class="item active">
					<video autoplay loop muted>
						<source src="http://demo.themeum.com/html/enter/video/video.webm" type="video/webm">
						<source src="http://demo.themeum.com/html/enter/video/video.mp4" type="video/mp4">
					</video>
					<div class="carousel-caption">
						<div>
							<h2 class="heading animated bounceInRight">WELCOME TO ENTER</h2>
							<p class="animated bounceInLeft">Enjoy Enter Premium HTML Theme</p>
							<a class="btn btn-default btn-transparent animated bounceInUp" href="#">Get Started</a>
						</div>
					</div>
			    </div>		  		
-->
				
				
				
                <div class="item active" style="background-image: url(images/slider/2018/cargaexpress-wtc-parque-de-las-ciencias-aguada-park-zonamerica.jpg)"></div>
                <div class="item" style="background-image: url(images/slider/2018/evento-pimod.jpg)"></div>
				<div class="item" style="background-image: url(images/slider/2018/cargaexpress-zonamerica-cargador-bateria-celulares.jpg)"></div>
                <div class="item" style="background-image: url(images/slider/2018/cargaexpress-genexus.jpg)"></div>
                <div class="item" style="background-image: url(images/slider/2018/cargaexpress-antel-latu.jpg)"></div>		    
                <div class="item" style="background-image: url(images/slider/2018/cargaexpress-enjoy-conrad-movistar.jpg)"></div>		    
                <div class="item" style="background-image: url(images/slider/2018/cargaexpress-locker-cargando-celular.jpg)"></div>		    
                   <!--  <div class="carousel-caption">
					    <div>
					    	<h2 class="heading animated bounceInRight">Fully Responsive</h2>
					       	<p class="animated bounceInLeft">Fully Responsive HTML theme</p>
					       	<a class="btn btn-default btn-transparent animated bounceInUp" href="#">Get Started</a>
					    </div>
				    </div>
                    -->
			    
			</div>
			<!--/.carousel-inner-->

			<a class="carousel-left member-carousel-control hidden-xs" href="#home-carousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-right member-carousel-control hidden-xs" href="#home-carousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
    </section>
	
	<section id="home" class="visible-xs">
				<img id="mobile-slider1" src="images/slider/2018/cargaexpress-wtc-parque-de-las-ciencias-aguada-park-zonamerica.jpg" style="height: 100vh; /*-webkit-filter: brightness(50%); -moz-filter: brightness(50%); -ms-filter: brightness(50%); -o-filter: brightness(50%);*/" />
				
				
	</section>
	
	<!--/#home-->

	<section id="about-us" class="container-fluid" style="background-color:#353938">
		<div class="row">
			<div class="features">
				<div class="col-sm-5 col-md-6" style="padding:20px; padding-left:40px; padding-top:40px;">
                	<img src="images/services/service-branding-carga-plus.png" width="800" style="width:100%; height:auto"/>
                
                </div>
                <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0" style="padding:40px; margin:0 auto" >
                	<h3 class="media-heading" style="padding-top:120px;color:#ffffff; font-size:2.5em; font-family:helvetica-93-extended-black">Carga Plus</h3>
											<p style="color:#ffffff; font-size:1.3em;font-family:Gotham-Light; padding:15px">Pensado principalmente como un servicio esencial en eventos y establecimientos donde prime el servicio y atención al cliente, <b style="font-family:Gotham-bold">Carga Plus es gratuito para el usuario</b>; generalmente utilizado como <b style="font-family:Gotham-bold">acción publicitaria de marcas por ser más efectivo</b> que otras formas tradicionales. Funciona bajo <b style="font-family:Gotham-bold">modelo de arrendamiento</b> en dos modalidades, arrendamiento para brindar servicio al público de un establecimiento o al servicio de una marca que desee utilizarlo como campaña publicitaria en un establecimiento de terceros.<br /><br /><span style="text-align:right; float:right; padding-right:60px; font-weight:bold; font-family:Gotham-Bold; text-decoration:underline"><a href="#contact">conocer m&aacute;s</a></span></p>
                                            <div class="clearfix" style="height:20px;"></div>
                                          
                    <h3 class="media-heading" style="padding-top:40px;color:#ffffff; font-size:2.5em; font-family:helvetica-93-extended-black">Carga Monedero</h3>
											<p style="color:#ffffff; font-family:Gotham-Light; font-size:1.3em;padding:15px">Pensado principalmente como un servicio para <b style="font-family:Gotham-bold">establecimientos de alto tránsito</b>, <b style="font-family:Gotham-bold">Carga Monedero es pago por el usuario</b>; generalmente instalado en <b style="font-family:Gotham-bold">terminales, universidades, hospitales, gimnasios y otros.</b> También contempla la posibilidad de <b style="font-family:Gotham-bold">vender la publicidad a diferentes marcas</b> tanto en videos reproducidos en la pantalla como fotos y ploteos.<br /><span style="text-align:right; float:right; padding-right:60px; font-family:Gotham-Bold; text-decoration:underline"><a href="#contact">conocer m&aacute;s</a></span></p>
                
                </div>
					<!--<div class="tab-content">
						<div class="tab-pane active" id="creative">
							<div id="community-carousel" class="carousel slide" data-ride="carousel">
							  <ul class="carousel-indicators">
								<li data-target="#community-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#community-carousel" data-slide-to="1"></li>
								<li data-target="#community-carousel" data-slide-to="2"></li>
							  </ul>

								<div class="carousel-inner">
									<div class="item active" style="background-image: url(images/about-us/carga.jpg)"></div>
									<div class="item" style="background-image: url(images/about-us/cargamonedero.jpg)"></div>
									<div class="item" style="background-image: url(images/about-us/publicarga.jpg)"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<ul class="nav features-nav">
						<li class="active" data-target="#community-carousel" data-slide-to="0">
							<div class="vertical-middle">
								<div>
									<div class="media">
																 
										<div class="media-body media-content">
											<h3 class="media-heading">Carga</h3>
											<p>Pensado principalmente como un <b>servicio esencial en eventos</b>, Carga es gratuito para el usuario; generalmente utilizado como <b>acción BTL y es m&aacute;s efectivo</b> que otras formas tradicionales.</p>
										</div>
									</div>	
								</div>
							</div>				
						</li>
					  	<li data-target="#community-carousel" data-slide-to="1">
					  		<div class="vertical-middle">
					  			<div>					  		
					  				<div class="media">
					  										
					  					<div class="media-body media-content">
					  						<h3 class="media-heading">Carga<span>monedero</span></h3>
					  						<p>Pensado principalmente como una solución para establecimientos de <b>muy alto tránsito</b> como terminales, hospitales y otros similares; el <b>usuario paga por el servicio</b> y el establecimiento adem&aacute;s de cubrir la necesidad no resuelta <b>participa de los ingresos</b> que se generan.
					  					</div>
					  				</div>					  		
					  			</div>					  		
					  		</div>					  		
						</li>
						<li data-target="#community-carousel" data-slide-to="2">
							<div class="vertical-middle">
								<div>						  	
									<div class="media">
										
										<div class="media-body media-content">
											<h3 class="media-heading"><span class="spn2">PUBLI</span>Carga</h3>
											<p>Manejando el mismo concepto que Carga pero duplicados sus beneficios y su atractivo. Agrega nuevos conceptos, por ejemplo puede ser utilizado para realizar <b>campa&ntilde;as de donaci&oacute;n</b> por empresas y lograr que las personas donen tambi&eacute;n; estas campa&ntilde;as generan un <b>impacto doblemente positivo</b> en la sociedad y los consumidores de la marca.</p>
										</div>
									</div>						 	
								</div>						 	
							</div>						 	
						</li>
					</ul>-->
                    
                    
                    
                    
                    
                    
				
                
			</div>
		</div>
	</section>
	<!--/#about-us-->
	
	<section id="services" class="parallax-section">
		
		<div class="container" style="height:607px;"> 
			<div class="row">
				
			</div>
		</div>
	</section>
	<!--/#service-->

	<section id="portfolio">
		<div class="container">
			<h2 class="title" style="font-size:31px;">Fotos</h2>
		<!--	<ul class="portfolio-filter text-center">
				<li><a class="btn btn-default active" href="#" data-filter="*">Todas</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".eventos">Eventos</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".hospitales">Hospitales</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".shoppings">Shoppings</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".universidades">Universidades</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".terminal">Terminal Tres Cruces</a></li>
			</ul><!--/#portfolio-filter-->
			
			<!--<div class="portfolio-items">-->
			
				<ul class="grid effect-1" id="grid">
					
				<li><a href="images/slider/2018/resized/1.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/slider/2018/resized/1.jpg" alt=""></li>
				<li><a href="images/slider/2018/resized/2.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/slider/2018/resized/2.jpg" alt=""></li>
				<li><a href="images/slider/2018/resized/3.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/slider/2018/resized/3.jpg" alt=""></li>
				<li><a href="images/slider/2018/resized/4.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/slider/2018/resized/4.jpg" alt=""></li>
				<li><a href="images/slider/2018/resized/5.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/slider/2018/resized/5.jpg" alt=""></li>
				<li><a href="images/slider/2018/resized/6.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/slider/2018/resized/6.jpg" alt=""></li>
				
				<!--<li><div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/29.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/29.jpg" alt=""></a>
						</div>	
				</div></li>
                <li><div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/40.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/40.JPG" alt=""></a>
						</div>	
				</div></li>
			  </ul>
               <!-- <div class="col-sm-3 portfolio-item shoppings">
						<div class="portfolio-image" >
							<a href="images/portfolio/32.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/32.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item shoppings">
						<div class="portfolio-image" >
							<a href="images/portfolio/37.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/37.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/34.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/34.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/42.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/42.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/36.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/36.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/35.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/35.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/38.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/38.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/33.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/33.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/30.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/30.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/31.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/31.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item shoppings">
						<div class="portfolio-image" >
							<a href="images/portfolio/41.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/41.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/39.JPG" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/39.JPG" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/1.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/1.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/2.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/2.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image" >
							<a href="images/portfolio/3.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:190px;" src="images/portfolio/3.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item hospitales">
						<div class="portfolio-image" >
							<a href="images/portfolio/4.jpg" data-rel="prettyPhoto"><img style="height:190px;" class="img-responsive" src="images/portfolio/4.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item shoppings">
						<div class="portfolio-image">
							<a href="images/portfolio/5.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/5.jpg" alt=""></a>
						</div>	
				</div>                				
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/6.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/7.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item hospitales">
						<div class="portfolio-image">
							<a href="images/portfolio/8.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/8.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/9.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/9.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item shoppings">
						<div class="portfolio-image">
							<a href="images/portfolio/10.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/10.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/11.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/11.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item shoppings">
						<div class="portfolio-image">
							<a href="images/portfolio/12.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/12.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/13.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/13.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/14.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/14.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item terminal">
						<div class="portfolio-image">
							<a href="images/portfolio/15.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/15.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/16.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/16.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/17.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/17.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/18.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/18.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/19.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/19.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/20.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/20.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/21.jpg" data-rel="prettyPhoto"><img class="img-responsive"style="height:380px;"  src="images/portfolio/21.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/22.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/22.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item eventos">
						<div class="portfolio-image">
							<a href="images/portfolio/23.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/23.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item universidades">
						<div class="portfolio-image">
							<a href="images/portfolio/24.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;" src="images/portfolio/24.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item terminal">
						<div class="portfolio-image">
							<a href="images/portfolio/25.jpg" data-rel="prettyPhoto"><img class="img-responsive" style="height:380px;"  src="images/portfolio/25.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item universidades">
						<div class="portfolio-image">
							<a href="images/portfolio/26.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/26.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item hospitales">
						<div class="portfolio-image">
							<a href="images/portfolio/27.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/27.jpg" alt=""></a>
						</div>	
				</div>
                <div class="col-sm-3 portfolio-item universidades">
						<div class="portfolio-image">
							<a href="images/portfolio/28.jpg" data-rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/28.jpg" alt=""></a>
						</div>	
				</div> -->
			<!--</div>-->
		</div>
		
		
				<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/AnimOnScroll.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
		
		
		<div id="portfolio-single-wrap">
			<div id="portfolio-single">
	    		
	    	</div>
    	</div><!-- /# portfolio-single-wrap -->
    </section>
    <!--/#portfolio-->
	
	
	<section id="testimonial" class="parallax-section">
		<div class="container">
			<div class="testimonial-wrapper">
				<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#testimonial-carousel" data-slide-to="1"></li>
						<li data-target="#testimonial-carousel" data-slide-to="2"></li>
					</ol>

				  <!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="testimonial">
								<h2>CargaExpress es un muy buen servicio y que realmente aporta su grano de arena a la marca CASMU.</h2>
								<p>Dr. Osvaldo Barrios&nbsp;-&nbsp;Gerente Comercial, CASMU</p>
							</div>
						</div>
						<div class="item">
							<div class="testimonial">
								<h2>CargaExpress caus&oacute; un impacto fenomenal entre los presentes al evento IAB FORUM. Los presentes pod&iacute;an pasar por el stand de PIMOD y cargar su celular. El funcionamiento fue &oacute;ptimo y verdaderamente es un servicio a los usuarios. Recomiendo plenamente su uso.</h2>
								<p>Lic. Pablo Buela&nbsp;-&nbsp;Director, PIMOD</p>
							</div>
						</div>
						
						<div class="item">
							<div class="testimonial">
								<h2>100% positivo. De verdad a la gente le encant&oacute; y fue dentro todo lo novedoso que hab&iacute;a, otro punto m&aacute;s que resalt&oacute;!! Un &eacute;xito!!</h2>
								<p>Lic. Rodrigo Del Campo&nbsp;-&nbsp;Director, St. Clemente</p>
							</div>
						</div>						
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!--/#testimonial-->

	<section id="franquicia" class="container-fluid">
        <div class="container">
            <div class="row">
				<h2 class="title" style="width:280px">Franquicia</h2>
                
                
                	<img src="images/services/franquicia.jpg" style="width:100%; height:auto" />
                	 
                       <div class="col-xs-12 col-md-6" style="padding:40px; margin:0 auto"> <!-- font-size:2.3em -->
                           <h3 class="media-heading" style="padding-top:40px;color:#000000; font-size:2.3em; font-family:helvetica-93-extended-black">Modelo de Franquicia</h3>
                                      <p style="color:#000000; font-family:Gotham-Light; font-size:1.2em;padding:15px">
                                      El modelo de franquicia de Carga Express apunta al mercado internacional, ya que a nivel local está presente en los principales establecimientos y por el tipo de servicio y donde van instaladas las terminales de carga, países o zonas con alta densidad demográca se presentan como los ideales.<br /><br />
<b>Incluye:</b><br /></p>
<ul style="font-family:Gotham-Light; font-weight:bold;font-size:1.1em;padding:15px">
<li>15 terminales (envío desde Uruguay o a fábricar en país destino).</li>
<li>Regalías equivalentes al primer año.</li>
<li>Licencia del software estadístico de control del servicio.</li>
<li>Instalación de servidor en País destino.</li>
<li>Entrenamiento de 1 semana en la ciudad del franquiciado.</li>
<li>Diseños de papelería/materiales de presentación/documentos para gestión comercial.</li>
<li>Manuales operativos de la franquicia.</li>
<li>Kit básico de herramientas para mantenimiento.</li>
<li>Asistencia constante.</li>
<li>Búsqueda de proveedores locales para insumos de mantenimiento.</li>
<li>Actualizaciones periódicas de materiales de marketing y tecnología descargables con usuario dentro del sitio web CargaExpress.com.uy</li>
</ul>
                          
   						</div>
                        
                        <div class="col-xs-12 col-md-6" style="padding:40px; margin:0 auto" >
                        	 <h3 class="media-heading" style="padding-top:40px;color:#000000; font-size:1.8em; font-family:helvetica-93-extended-black">¿Dónde instalar CargaExpress?</h3>
                              
<ul style="font-family:Gotham-Light; font-size:1.2em;padding:15px">
<li>Terminales de ómnibus/trenes/puerto/aeropuerto.</li>
<li>Hospitales.</li>
<li>Consultorios médicos.</li>
<li>Centros Comerciales.</li>
<li>Centros de enseñanza: facultades/colegios/escuelas.</li>
<li>Oficinas públicas.</li>
<li>Otros comercios: Centros estéticos/peluquerías/spa.</li>

</ul>
<div class="clearfix" style="height:20px;"></div>
                              
                            <h3 class="media-heading" style="padding-top:40px;color:#000000; font-size:1.8em; font-family:helvetica-93-extended-black">Perfil del Franquiciado</h3>  
                              
<ul style="font-family:Gotham-Light; font-size:1.2em;padding:15px">
<li>Experiencia en desarrollo comercial, ventas, gerencia y estar preparado para ser jefe.</li>
<li>Ser organizado y tomar riesgos controlados.</li>
<li>Poseer al menos 10 horas semanales para desarrollar el negocio.</li>
<li>Estar dispuesto a desarrollar la marca en su región siempre respetando las políticas de la central.</li>
<li>Listo para invertir dinero en un negocio propio y de rápido desarrollo.</li>
<li>No requiere conocimientos técnicos para el desarrollo del negocio.</li>
                              
                        </div>
                        
                              <div style="clear:both;height:20px;"></div>
                              
                       </div> <!-- cierro row-->
                       </div>
                       <div class="container-fluid" style="background-color:#333">
                       <div class="container">       
                     	 <div class="row" >
                     		 <div class="col-xs-12 col-md-6" style="padding:30px; margin:0 auto" >              
                <!-- Master franquicia -->
              
                     
                            <h3 class="media-heading" style="padding-top:5px;color:#ffffff; font-size:2.5em; font-family:helvetica-93-extended-black">Franquicia Master</h3>
                                                    <p style="color:#ffffff; font-size:1.3em;font-family:Gotham-Light; padding:15px; padding-top:15px">La Franquicia Master brinda al franquiciado <b style="font-family:Gotham-bold">exclusividad en un País de su elección</b>, <b style="font-family:Gotham-bold">asistencia</b> en su País cada año durante 2 años <b style="font-family:Gotham-bold">por dos semanas</b>. Asistencia telefónica, skype y otras plataformas de comunicación de forma semanal. A su vez la Franquicia Master <b style="font-family:Gotham-bold">permite vender franquicias en otros territorios dentro del País elegido y beneficiarse con las regalías</b> de la Franquicia.<br /><br /><span style="text-align:right; float:right; padding-right:60px; font-weight:bold; font-family:Gotham-Bold; text-decoration:underline"><a href="#contact">conocer m&aacute;s</a></span></p>
                        
                        
                	</div>
                    <div class="col-xs-12 col-md-6" style="padding:30px; margin:0 auto" >
             <!-- franquicia Individual-->
                          		                       
                                                  
                            <h3 class="media-heading" style="padding-top:5px;color:#ffffff; font-size:2.5em; font-family:helvetica-93-extended-black">Franquicia individual</h3>
                                                    <p style="color:#ffffff; font-size:1.3em;font-family:Gotham-Light; padding:15px; padding-top:15px">La Franquicia Individual brinda al franquiciado <b style="font-family:Gotham-bold">exclusividad en una Ciudad determinada</b>, <b style="font-family:Gotham-bold">asistencia</b> en su País primer año <b style="font-family:Gotham-bold">por una semana</b>. Asistencia telefónica, skype y otras plataformas de comunicación de forma semanal.<br /><br /><br /><span style="text-align:right; float:right; padding-right:60px; font-family:Gotham-Bold; text-decoration:underline"><a href="#contact">conocer m&aacute;s</a></span></p>
                     
                  	 </div>
                    </div>  
                    </div>  
                    </div>
			
            
            </div>
        </div>
    </section>	
                
                


	<section id="blog">
        <div class="container">
            <div class="row">
				<h2 class="title">Prensa</h2>
				
                 <div class="col-sm-6">
					<div class="media single-blog">
						<div class="pull-left">
							<img class="img-responsive" src="images/blog/6.jpg" alt="" />
							<span class="date">feb/15<span>13</span></span>
						</div>
						<div class="media-body blog-content">
							<h2><a href="http://www.elobservador.com.uy/cargaexpress-se-diversifica-n298096">CargaExpress se diversifica</a></h2>
							<p>El servicio para reponer las baterías de celulares agrega un dispositivo para restaurantes y la máquina SnackExpress...</p>
							
						</div>
					</div>
				</div>
                
                <div class="col-sm-6">
					<div class="media single-blog">
						<div class="pull-left">
							<img class="img-responsive" src="images/blog/1.jpg" alt="" />
							<span class="date">ago/14<span>22</span></span>
						</div>
						<div class="media-body blog-content">
							<h2><a href="http://www.elpais.com.uy/economia/gente-negocios/firmas-uruguayas-preparan-expansion-franquicias.html">Empresas uruguayas proyectan expansión con franquicias</a></h2>
							<p>Como ganadores del Premio Nacional de las Franquicias, CargaExpress...</p>
							
						</div>
					</div>
				</div>
                
                <div class="col-sm-6">
					<div class="media single-blog">
						<div class="pull-left">
							<img class="img-responsive" src="images/blog/2.jpg" alt="" />
							<span class="date">ago/14<span>14</span></span>
						</div>
						<div class="media-body blog-content">
							<h2><a href="http://www.infonegocios.biz/Nota.asp?nrc=35022">Carga Express gan&oacute; el premio nacional de franquicias y le apunta a nuevos mercados</a></h2>
							<p>CargaExpress es un servicio de carga de baterías para dispositivos móviles que se instala en...</p>
							
						</div>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="media single-blog">
						<div class="pull-left">
							<img class="img-responsive" src="images/blog/3.jpg" alt="" />
							<span class="date">jun/14<span>23</span></span>
						</div>
						<div class="media-body blog-content">
							<h2><a href="http://www.infonegocios.biz/nota.asp?nrc=34376">Carga Express mira con cari&ntilde;o el nicho de las vending. ¿Se viene el snack custom “yorugua”?</a></h2>
							<p>La recarga “p&uacute;blica” para dispositivos m&oacute;viles es, en tiempos de consumo fren&eacute;tico de bater&iacute;as, una bendici&oacute;n...</p>
							
						</div>
					</div>
				</div>
				
                <div class="col-sm-6">
					<div class="media single-blog">
						<div class="pull-left">
							<img class="img-responsive" src="images/blog/4.jpg" alt="" />
							<span class="date">ago/13<span>26</span></span>
						</div>
						<div class="media-body blog-content">
							<h2><a href="http://www.coloniashopping.com.uy/noticias/20/%E2%80%9CCarga-Express%E2%80%9D-nuevo-servicio-de-vanguardia-en-Colonia-Shopping">“CARGA EXPRESS” NUEVO SERVICIO DE VANGUARDIA EN COLONIA SHOPPING</a></h2>
							<p>Colonia Shopping incorpora el novedoso servicio “carga express”. Es una m&aacute;quina que brinda a los usuarios la posibilidad de cargar la bater&iacute;a de sus celulares, iPods, mp3, mp4 y c&aacute;maras...</p>
							
						</div>
					</div>
				</div>
                
                <div class="col-sm-6">
					<div class="media single-blog">
						<div class="pull-left">
							<img class="img-responsive" src="images/blog/5.jpg" alt="" />
							<span class="date">feb/13<span>03</span></span>
						</div>
						<div class="media-body blog-content">
							<h2><a href="http://www.elobservador.com.uy/noticia/242708/con-baterias-recargadas-la-startup-cargaexpress-busca-consolidarse/">Con baterías recargadas la startup CargaExpress busca consolidarse</a></h2>
							<p>No te respondí porque me quedé sin batería en el teléfono”, es una frase que puede no correr más en el futuro de los montevideanos, ya que el emprendimiento CargaExpress, de Hernán Filgueiras(21) y Brian Reveles(22)...</p>
							<a name="contacto"></a>
						</div>
					</div>
				</div>
                
				
            </div>
        </div>
    </section>
    <!--/#blog-->
	
    <section id="contact-area" class="clearfix">
		<?php
		require_once 'classes/mail.php';
		require_once 'classes/class.phpmailer.php';
		require_once 'classes/class.smtp.php';
		
		$json['msg']='';
		$json['success']='';
		$showForm = 'block';
		if($_GET!=NULL){
			
			if($_GET['name']=='' or $_GET['name']=='Nombre') { $json['msg'] = "Por favor ingresa tu nombre"; }
			elseif($_GET['email']=='' or $_GET['email']=='Email') { $json['msg'] = "No has ingresado tu dirección de email"; }
			elseif($_GET['subject']=='' or $_GET['subject']=='Asunto') {$json['msg'] = "Por favor ingresa el asunto";}
			elseif($_GET['message']=='' or $_GET['message']=='Mensaje') {$json['msg'] = "No has ingresado tu consulta"; }

		
			if($json['msg']!='') {
				
			}
			else{
				$destino = "info@cargaexpress.com.uy";
				
				$mensaje = "<b>".$_GET['name']."</b> escribio: <br /><br />".$_GET['message']." <br> <br>Desde: ".$_GET['email'];
				$asunto  = $_GET['subject'];

				// $mail= New Mail;
				// $mail->setDestinatario($destino);
				// $mail->setSubject($asunto);
				// $mail->setNombre($_GET['name']);
				// $mail->setCuenta($_GET['email']);
				// $mail->setHtml(str_replace('\n',"<br />",$mensaje));
				// if($mail->sendMail()){ 
				// 	$json['success']=1;
				// 	$json['msg']="Gracias por comunicarse con nosotros, nos pondremos en contacto con usted a la brevedad.";
				// 	echo $json['msg'];
				// 	$showForm = 'none';
				// }
				// else{
				// 	$json['success']=0;
				// 	$json['msg']="Ha ocurrido un error intentelo de nuevo por favor";
                // }
                
                // php mailer last version
                // Replace sender@example.com with your "From" address.
                // This address must be verified with Amazon SES.
                $sender = $destino;
                //$senderName = 'WEB CARGAEXPRESS';
		$senderName = $_GET['name'];

                // Replace recipient@example.com with a "To" address. If your account
                // is still in the sandbox, this address must be verified.
                $recipient = 'info@cargaexpress.com.uy';
		$replyToName = $_GET['name'];
		$replyToEmail = $_GET['email']; 
		

                // Replace smtp_username with your Amazon SES SMTP user name.
                $usernameSmtp = 'AKIA5DC55FYN4CSLNN6G';

                // Replace smtp_password with your Amazon SES SMTP password.
                $passwordSmtp = 'BCKLn065TCA6CjmEi77OCho2uWwH9TGDxAWNl/BMNhGJ';

                // Specify a configuration set. If you do not want to use a configuration
                // set, comment or remove the next line.
                //$configurationSet = 'ConfigSet';

                // If you're using Amazon SES in a region other than US West (Oregon),
                // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
                // endpoint in the appropriate region.
                $host = 'email-smtp.us-east-1.amazonaws.com';
                $port = 587;

                // The subject line of the email
                $subject = $asunto;
                //
				// The plain-text body of the email
                $bodyText =  $mensaje;

                // The HTML-formatted body of the email
                $bodyHtml = str_replace('\n',"<br />",$mensaje);

                $mail = new PHPMailer(true);

                try {
                    // Specify the SMTP settings.
                    $mail->isSMTP();
                    $mail->setFrom($sender, $senderName);
                    $mail->Username   = $usernameSmtp;
                    $mail->Password   = $passwordSmtp;
                    $mail->Host       = $host;
                    $mail->Port       = $port;
                    $mail->SMTPAuth   = true;
                    $mail->SMTPSecure = 'tls';
                    //$mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);
                    //$mail->SMTPDebug = 4;

                    // Specify the message recipients.
                    $mail->addAddress($recipient);
                    // You can also add CC, BCC, and additional To recipients here.
		    $mail->addReplyTo($replyToEmail, $replyToName);
		
                    // Specify the content of the message.
                    $mail->isHTML(true);
                    $mail->Subject    = $subject;
                    $mail->Body       = $bodyHtml;
                    $mail->AltBody    = $bodyText;
                    $mail->Send();
                    $json['success']=1;
					$json['msg']="Gracias por comunicarse con nosotros, nos pondremos en contacto con usted a la brevedad.";
					echo $json['msg'];
					$showForm = 'none';
                } catch (phpmailerException $e) {
                    $json['success']=0;
					$json['msg']= $e->errorMessage();
                } catch (Exception $e) {
                    $json['success']=0;
					$json['msg']= $mail->ErrorInfo;
                }


            }
			
		}	
		?>
	    <div id="contact" style="display:<?php echo $showForm;?>;">
	    	<div class="status alert alert-success" style="display: none"></div>
	    	<?php
	    	echo '<center>'.$json['msg'].'</center>'; // error
	    	?>
	    	<form id="main-contact-form" class="contact-form" name="contact-form" method="get" action="index.php?#contacto">
	            <div class="form-group">
	                <input type="text" class="form-control" name="name" required placeholder="Nombre">
	            </div>
	            <div class="form-group">
	                <input type="email" class="form-control" name="email"  required placeholder="Email">
	            </div>
	            <div class="form-group">
	                <input type="text" class="form-control" name="subject"  required placeholder="Asunto">
	            </div>
	            <div class="form-group">
	                <textarea name="message" id="message" name="message"  required class="form-control" rows="8" placeholder="Mensaje"></textarea>
	            </div>                        
	            <div class="form-group">
	                <button type="submit" class="btn btn-primary">Enviar</button>
	            </div>
	        </form>
            
            <div style="width:300px; height:120px;margin:0 auto; font-family:Gotham-Bold; font-size:15px;">
            Técnico<br />
            Tel:+598 93 310 444<br />
            Email:soporte@cargaexpress.com.uy<br />
            <br />Comercial<br />
            Tel:+598 95 567 423<br />
            Email:info@cargaexpress.com.uy<br />

			
            </div>
            
	        <div class="social-icons">
	            <a href="https://es-es.facebook.com/cargaexpressUY"><i class="fa fa-facebook"></i></a>
	            <a href="https://twitter.com/CargaExpress"><i class="fa fa-twitter"></i></a>
	            <a href="https://www.flickr.com/photos/93322272@N05"><i class="fa fa-flickr"></i></a>
	        </div>
	    </div>
 		<div id="gmap-wrap">
 			<div id="gmap">
 				
 			</div>
 			<div class="infowindow">
 				<h3>CargaExpress</h3>
 				<address>
 					<strong>Acuña de Figueroa 1771</strong><br />Esquina Av. Libertador<br />Montevideo, Uruguay
 				</address>
 			</div>
    	</div>
     </section>	
    <!--/#contact-area-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   <p>CargaExpress ©2013</p>
                </div>
                <div class="col-sm-6">
                    <p class="pull-right">Desarrollo por <a target="_blank" href="">WOLF</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
   
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.ba-dotimeout.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>

</html>
