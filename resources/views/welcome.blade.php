<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/validaciones.js')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- HEADER MENU -->
	<header class="top-navbar">
    <span class="position-absolute trigger">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="mynav">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="images/foto1.jpg" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="#section2">Conócenos!</a> </li>
						<li class="nav-item"> <a class="nav-link" href="#section3">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="#section4">Reservar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#section5">Horarios de Apertura</a></li>
						<li class="nav-item"><a class="nav-link" href="#section7">Galería</a></li>
						<li class="nav-item"> <a class="nav-link" href="#section8">Servicios</a></li>
						<li class="nav-item"><a class="nav-link" href="#section9">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <script>
            (new IntersectionObserver(function(e,o){
                if (e[0].intersectionRatio > 0){
                    document.documentElement.removeAttribute('class');
                } else {
                    document.documentElement.setAttribute('class','stuck');
                };
            })).observe(document.querySelector('.trigger'));
            
        </script>
        <style>
            .fixed-top {
                transition: all 0.25s ease-in;
            }
            .stuck nav#mynav {
                background-color: black !important;
                padding-top: 5px !important;
                padding-bottom: 5px !important;
            }
            .stuck a.nav-link {
                color: white!important;
            }
            .stuck .navbar-nav a.nav-link:hover{
                color: black !important;
            }

        </style>
	<!-- FIN HEADER MENU -->

    <!-- INICIO CAROUSEL -->
<section id=#section1>
<div id="section1">
    <div class="container-fluid px-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner bg-info" role="listbox">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center min-vh-100" style="background: url('../storage/app/public/uploads/img_header.jpg');">
                        <h1 class="display-1">CAFETERIA DIEGO</h1>
                        <p class="p-boton-reserva"><a class="btn-reserva-header" href="#">Reserva</a></p>
                    </div>
                </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div id="section2">
</section>
<!-- FIN CAROUSEL -->


<!-- CONOZCANOS -->
<section id=#section2>
    <div class="div-conozcanos">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="../storage/app/public/uploads/conozcanos.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1 class="h1-conozcanos">Conózcanos</h1>
						<h4>¿Buscas un lugar en el que quedar con tus amigos o con tu familia para pasar un rato juntos tomando algo?</h4><br>
						<p>Nuestra cafetería es el punto de encuentro ideal para quien busque un lugar con buen ambiente. Nuestra  cafetería  está bien situada y  bien decorada para que puedas venir a tomar un café o a comer algo a mediodía y sentirte a gusto.</p>
						<p>Tenemos una gran terraza para poder compartir buenos momentos</p>
                        <p>- cafetería con WiFi - Disfruta de una buena cerveza para acompañar nuestras platos o nuestras tapas. Nuestras tartas caseras te van a sorprender  ¡Ven a visitarnos a la hora del desayuno o del almuerzo! Gracias a nuestro WiFi gratuito, los blogueros podrán compartir sus fotos en Instagram en tiempo real.</p>
                        <p>- ¡Déjate convencer por ti mismo! - A través de nuestra central de reservas online podrás pedir mesa muy fácilmente. Paga cómodamente en efectivo, con cheque, con VISA o con MasterCard. Si prefieres disfrutar de nuestros platos en casa o en la oficina, también puedes encargarlos para llevar. Abrimos todos los días.Solo zona Gornal o gran via sud</p>
					</div>
				</div>
			</div>
            <div class="social-media-icons">
                    <a href="https://www.facebook.com/Cafetería-Diego-104730237893730/" class="fa fa-facebook"></a>
                    <a href="https://www.google.com/search?q=CAFETERIA%20DIEGO%20L%27Hospitalet%20de%20Llobregat%20Avinguda%20Carmen%20Amaya%2C%201" class="fa fa-google"></a>
                    <a href="https://www.instagram.com/cafeteria_diego/?hl=es" class="fa fa-instagram"></a>
                </div>
		</div>
	</div>
</div>
</section>
	<!-- FIN CONOZCANOS-->

<section id=#section3>
<div id="section3">
	<!-- INICIO MENU -->
	<div class="div-menu" id=#section3>
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="p1-menu">Nuestro<span class="p2-menu">menú</span></p>
				</div>
            </div>
        </div>

    <!-- OPCIONES MENU -->
    <div class="menu-box">
		<div class="container">
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="../storage/app/public/uploads/menu1.jpg" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Carta de Bocadillos</h4>
							<p>Selección de Bocadillos de la casa</p>
							<h5 class="p-boton-carta"><a class="btn-carta" href="./storage/CAFETERIA-DIEGO-CARTA-BOCADILLOS.pdf">Descargar Carta</a></h5>
						</div>
					</div>
                    <div class="figura1"></div>
                    <div class="figura2"></div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="../storage/app/public/uploads/menu2.jpg" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Carta de Platos Combinados</h4>
							<p>Selección de Platos Combinados de la casa</p>
							<h5 class="p-boton-carta"><a class="btn-carta" href="./storage/CAFETERIA-DIEGO-PLATOS-COMBINADOS.pdf">Descargar Carta</a></h5>
						</div>
					</div>
                    <div class="figura1"></div>
                    <div class="figura2"></div>
				</div>
                    
                    <div class="col-lg-4 col-md-6 special-grid drinks">
                        <div class="gallery-single fix">
                            <img src="../storage/app/public/uploads/menu3.jpg" class="img-fluid2" alt="Image">
                            <div class="why-text">
                                <h4>Carta de Tapas</h4>
                                <p>Selección de Tapas de la casa</p>
                                <h5 class="p-boton-carta"><a class="btn-carta" href="./storage/CAFETERIA-DIEGO-TAPAS.pdf">Descargar Carta</a></h5>
                            </div>
                        </div>
                        <div class="figura1"></div>
                        <div class="figura2"></div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
</section>
 <!-- FIN MENU -->

 <!-- INICIO MAPA -->
 <div class="div-mapa">
    <h1 class="h1-mapa">Dónde Estamos</h1>
    <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11980.187326132025!2d2.1164257!3d41.3513358!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4448b0c6f6edbcda!2sBar%20Diego!5e0!3m2!1sca!2ses!4v1618235846368!5m2!1sca!2ses"></iframe>
</div>
 <!-- FIN MAPA -->

 <!-- INICIO RESERVAS -->
<section id=#section4>
<div id="section4">
    <div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
                    <p class="p1-reserva">Haz tu<span class="p2-reserva">Reserva</span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm" action="{{url('/crearReserva/send')}}"  method="get" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<h3>Reserva una mesa</h3>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="personas_reserva" name="personas_reserva" required data-error="Please select Person">
											  <option disabled selected>Número de personas</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
                                              <option value="8">8</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<input id="fecha_reserva" class="datepicker picker__input form-control" onclick="return fecha()" name="fecha_reserva" type="date" value=""  equired data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="hora_reserva" name="hora_reserva" required data-error="Please select Person">
											  <option disabled selected>Hora de la Reserva</option>
											  <option value="12:30">12:30</option>
											  <option value="13:30">13:00</option>
											  <option value="13:30">13:30</option>
											  <option value="14:00">14:00</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Datos de Contacto</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="nombre_reserva" name="nombre_reserva" placeholder="Tu nombre" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="apellido_reserva" name="apellido_reserva" placeholder="Tu apellido" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
                                    </div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Dirección de Correo Electrónico" id="email_reserva" class="form-control" name="email_reserva" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Número de Teléfono" id="telefono_reserva" class="form-control" name="telefono_reserva" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
                                    </div>
                                    
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Motivo de la reserva" id="motivo_reserva" class="form-control" name="motivo_reserva" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>

                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Mensaje (Opcional)" id="mensaje_reserva" class="form-control" name="mensaje_reserva" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
                                    <input type="submit" name="Enviar" value="Enviar">

                                    <!-- <p class="p-boton-reserva"><a class="btn-reserva-header" href="#">Reserva</a></p> -->
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
                        <a href="tel:+34647723382" class="phone-link">
                            <i class="fa fa-phone"></i><br>
                            <span class="telefono">+34647723382</span>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div id="section5">
</div>
</section>
   <!-- FIN RESERVAS -->

     <!-- HORARIO -->
<section id=#section5>

<div class="horario">
    <a id="times" class="anchor"></a>
    <h2>
    <span class="title brand-color brand-titleFont">Nuestros</span><br>
    <span class="subtitle brand-subtitleFont">horarios de apertura</span>
    </h2>
    <div class="divider-mark brand-bg"></div>
        <div class="times-list-holder ">
            <table>
                <tbody class="regular-times ">
                    <tr class="regular">
                        <th>Lunes</th>
                        <td>
                            <div class="time brand-color"></div>
                            <div class="time brand-color">
                                08:00 &ndash; 22:00<span class="kitchen-time"><br>
                                Cocina&nbsp;
                                08:00 &ndash; 22:00</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="regular">
                        <th>Martes</th>
                        <td>
                            <div class="time brand-color"></div><div class="time brand-color">
                                08:00 &ndash; 22:00<span class="kitchen-time"><br>
                                Cocina&nbsp;
                                08:00 &ndash; 22:00</span>
                            </div>
                        </td>
                        </tr>
                    <tr class="regular">
                        <th>Miércoles</th>
                        <td>
                        <div class="time brand-color"></div><div class="time brand-color">
                            08:00 &ndash; 22:00<span class="kitchen-time"><br>
                            Cocina&nbsp;
                            08:00 &ndash; 22:00</span>
                        </div>
                        </td>
                    </tr>
                    <tr class="regular">
                        <th>Jueves</th>
                        <td>
                            <div class="time brand-color"></div><div class="time brand-color">
                                08:00 &ndash; 22:00<span class="kitchen-time"><br>
                                Cocina&nbsp;
                                08:00 &ndash; 22:00</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="regular">
                        <th>Viernes</th>
                        <td>
                            <div class="time brand-color"></div><div class="time brand-color">
                                08:00 &ndash; 22:00<span class="kitchen-time"><br>
                                Cocina&nbsp;
                                08:00 &ndash; 22:00</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="regular">
                    <th>Sábado</th>
                        <td>
                            <div class="time brand-color"></div><div class="time brand-color">
                                08:00 &ndash; 22:00<span class="kitchen-time"><br>
                                Cocina&nbsp;
                                08:00 &ndash; 22:00</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="regular">
                    <th>Domingo</th>
                        <td>
                            <div class="time brand-color">cerrado</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</section>

<!-- FIN HORARIO -->

  
    <!-- FORMAS DE PAGO -->
    <section id=#section6>
<div id="section6">
    <div class="formas-pago">
        <a id="payment" class="anchor"></a>
        <h2>
            <span class="title brand-color brand-titleFont">Disponible</span>
            <span class="subtitle brand-subtitleFont">opciones de pago</span>
        </h2>
        <div class="divider-mark brand-bg"></div>
        <ul class="payment-list">
            <li>
                <i class="icon icon_amex"></i>
                <span>American Express</span>
            </li>
            <li>
                <i class="icon icon_cash"></i>
                <span>En efectivo</span>
            </li>
            <li>
                <i class="icon icon_contactless"></i>
                <span>Contactless</span>
            </li>
            <li>
                <i class="icon icon_mastercard"></i>
                <span>Mastercard</span>
            </li>
            <li>
                <i class="icon icon_ticket"></i>
                <span>Ticket Restaurant®</span>
            </li>
            <li>
                <i class="icon icon_visa"></i>
                <span>VISA</span>
            </li>
            <li>
                <i class="icon icon_dinersClub"></i>
                <span>Diners Club</span>
            </li>
        </ul>
    </div>
    <div id="section7">
    </div>
</section>
     <!-- FIN FORMAS DE PAGO -->

      <!-- GALERIA IMAGENES -->
<section id=#section7>
 
 <div class="gallery-box">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               <div class="heading-title text-center">
               <h2>
                   <span class="subtitle brand-subtitleFont">Galería</span>
               </h2>
               <div class="divider-mark brand-bg"></div>
               </div>
           </div>
       </div>
       <div class="tz-gallery">
           <div class="row">
               <div class="col-sm-12 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria1.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria1.jpg" alt="Gallery Images">
                   </a>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria2.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria2.jpg" alt="Gallery Images">
                   </a>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria3.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria3.jpg" alt="Gallery Images">
                   </a>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria4.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria4.jpg" alt="Gallery Images">
                   </a>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria5.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria5.jpg" alt="Gallery Images">
                   </a>
               </div> 
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria6.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria6.jpg" alt="Gallery Images">
                   </a>
               </div>
           </div>
       </div>
   </div>
   <div id="section8">
</div>
</div>
</section>
<!-- FIN GALERIA IMAGENES -->

<!-- NUESTROS SERVICIOS -->
<div class="nuestros-servicios">
       <a id="services" class="anchor"></a>
        <h2>
            <span class="title brand-color brand-titleFont">Nuestros</span>
            <span class="subtitle brand-subtitleFont">servicios</span>
        </h2>
        <div class="divider-mark brand-bg"></div>
        <ul class="services-list brand-color">
        <li>
            <i class="fa fa-coffee"></i>
            <span>Terraza</span>
        </li>
        <li>
            <i class="fa fa-shopping-bag"></i>
            <span>Para llevar</span>
        </li>
        <li>
            <i class="fa fa-wifi"></i>
            <span>Wifi gratis</span>
        </li>
        </ul>
        <div id="section9">
    </div>
    
</div>
</section>
    <!--FIN NUESTROS SERVICIOS -->

    <section id=#section9>
    <!--CONTACTO -->
    <div class="contacto">
        <a id="contact" class="anchor"></a>
        <h2>
            <span class="title brand-color brand-titleFont">Todo</span>
            <span class="subtitle brand-subtitleFont">de un vistazo</span>
        </h2>
        <div class="divider-mark brand-bg"></div>
            <div class="contact-block-holder">
                <div class="contact-block2">
                    <a href="#map" class="brand-color click-tracker" data-track-event="Contacts - Find us clicks">
                    <i class="fa fa-map-marker"></i>
                        <h3>Encuéntrenos</h3>
                        CARMEN AMAYA 1<br/>
                        Instagram: @cafeteria_diego/Facebook: Cafetería Diego<br/>
                        08902 HOSPITALET DE LLOBREGAT<br/>
                        España</a>
                </div>
                <div class="contact-block2">
                        <a href="mailto:aliciarolom@gmail.com" class="brand-color email">
                        <i class="fa fa-envelope"></i>
                        <h3>Envíenos un correo electrónico</h3>
                        aliciarolom@gmail.com</a>
                </div>
                <div class="contact-block2">
                        <a href="tel:+34647723382" class="brand-color">
                        <i class="fa fa-phone-square"></i>
                        <h3>Llámenos</h3>
                        +34647723382</a>
                </div>
                </div>
            </div>
        </div>

        <form class="formulario-contacto2">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Nombre</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Nombre">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Correo Electrónico</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Correo Electrónico">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Teléfono</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Teléfono">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Asunto</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</section>
     <!--FIN CONTACTO -->

          <!--FIN CONTACTO -->
<section id=#section10>
<div id="section10">
     <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fa fa-facebook-f"></i
            ></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fa fa-google"></i
            ></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fa fa-instagram"></i
            ></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Samue muñoz</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>
</section>
    <script src="{{ mix('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/app.js')}}"></script> 
</body>
</html>