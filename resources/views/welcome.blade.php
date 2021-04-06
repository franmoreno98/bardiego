<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    



</head>

<body>
	<!-- HEADER MENU -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="images/foto1.jpg" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="#">Menú</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Dónde Estamos</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Horarios De Apertura</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Opciones De Pago</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Galería</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Reserva</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- FIN HEADER MENU -->

    <!-- INICIO CAROUSEL -->
    <div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner bg-info" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">CAFETERIA DIEGO</h1>
                    <p class="p-boton-reserva"><a class="btn-reserva-header" href="#">Reserva</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                </div>
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
<!-- FIN CAROUSEL -->

<!-- CONOZCANOS -->
<div class="div-conozcanos">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="./storage/conozcanos.jpg" alt="" class="img-fluid">
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
	<!-- FIN CONOZCANOS-->

    	
	<!-- INICIO MENU -->
	<div class="div-menu">
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
						<img src="./storage/bocadillo-menu.jpg" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Carta de Bocadillos</h4>
							<p>Selección de Bocadillos de la casa</p>
							<h5 class="p-boton-carta"><a class="btn-carta" href="./storage/CAFETERIA-DIEGO-CARTA-BOCADILLOS.pdf">Descargar Carta</a></h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="./storage/plato-combinado-menu.jpg" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Carta de Platos Combinados</h4>
							<p>Selección de Platos Combinados de la casa</p>
							<h5 class="p-boton-carta"><a class="btn-carta" href="./storage/CAFETERIA-DIEGO-PLATOS-COMBINADOS.pdf">Descargar Carta</a></h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="./storage/foto-tapas.jpg" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Carta de Tapas</h4>
							<p>Selección de Tapas de la casa</p>
							<h5 class="p-boton-carta"><a class="btn-carta" href="./storage/CAFETERIA-DIEGO-TAPAS.pdf">Descargar Carta</a></h5>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>  
</div>
 <!-- FIN MENU -->

  <!-- INICIO RESERVAS -->
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
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<h3>Reserva una mesa</h3>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>Número de personas</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
                                              <option value="7">7</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<input id="input_date" class="datepicker picker__input form-control" name="date" type="date" value="" equired data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>Hora de la Reserva</option>
											  <option value="1">12:30</option>
											  <option value="2">13:00</option>
											  <option value="3">13:30</option>
											  <option value="4">14:00</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Datos de Contacto</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Tu apellido" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
                                    </div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Dirección de Correo Electrónico" id="email" class="form-control" name="email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Número de Teléfono" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>Motivo de la visita (opcional)</option>
											  <option value="1">12:30</option>
											  <option value="2">13:00</option>
											  <option value="3">13:30</option>
											  <option value="4">14:00</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Mensaje (Opcional)" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
                                        <p class="p-boton-reserva"><a class="btn-reserva-header" href="#">Reserva</a></p>
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
   <!-- FIN RESERVAS -->


    <!-- HORARIO -->
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

    <!-- FIN HORARIO -->

    
    <!-- FORMAS DE PAGO -->

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

     <!-- FIN FORMAS DE PAGO -->

      <!-- GALERIA IMAGENES -->
      
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
						<a class="lightbox" href="./storage/gallery-img-04.jpg">
							<img class="img-fluid3" src="./storage/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="./storage/gallery-img-01.jpg">
							<img class="img-fluid3" src="./storage/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="./storage/gallery-img-04.jpg">
							<img class="img-fluid3" src="./storage/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="./storage/gallery-img-01.jpg">
							<img class="img-fluid3" src="./storage/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="./storage/gallery-img-04.jpg">
							<img class="img-fluid3" src="./storage/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="./storage/gallery-img-01.jpg">
							<img class="img-fluid3" src="./storage/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

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
    </div>

    <!--FIN NUESTROS SERVICIOS -->

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

     <!--FIN CONTACTO -->
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
    <script src="{{ mix('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/app.js')}}"></script> 
</body>
</html>