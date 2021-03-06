<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('../storage/app/public/uploads/logo.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('../storage/app/public/uploads/logo.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/validaciones.js')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
	<!-- HEADER admin -->
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
                        <li class="nav-item"><a class="nav-link" href="{{url('admin')}}">Volver a la zona administrador</a></li>
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
            .stuck .fixed-top {
                background-color: #222 !important;
                padding-top: 5px !important;
                padding-bottom: 5px !important;
            } 
        </style>
	<!-- FIN HEADER admin -->

    <!-- INICIO CAROUSEL -->
<section id=#section1>
<div id="section1" >
    <div class="container-fluid px-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner bg-info" role="listbox">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center min-vh-100" style="background: url('../storage/app/public/uploads/img_header.jpg');">
                    <h1 class="h1-header"><strong>Bienvenidos a<br> CAFETERIA DIEGO </strong></h1>
                        <p class="p-boton-reserva"><a class="btn-reserva-header" href="#section4">Reserva</a></p>
                    </div>
                </div>
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
                    
                    <!-- <h5 class="p-boton-conozcanos"><a class="btn-conozcanos" href="./storage/CAFETERIA-DIEGO-TAPAS.pdf">Modificar</a></h5> -->
                    <form  action="{{url('conozcanos')}}"  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <label>Foto</label>
                <input type="file" name="foto" id="foto" value="">
                    <input type="submit" name="submit" value="enviar">
                    </form>
                   
                </div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1 class="h1-conozcanos">Con??zcanos</h1>
						<h4>??Buscas un lugar en el que quedar con tus amigos o con tu familia para pasar un rato juntos tomando algo?</h4><br>
						<p>Nuestra cafeter??a es el punto de encuentro ideal para quien busque un lugar con buen ambiente. Nuestra  cafeter??a  est?? bien situada y  bien decorada para que puedas venir a tomar un caf?? o a comer algo a mediod??a y sentirte a gusto.</p>
						<p>Tenemos una gran terraza para poder compartir buenos momentos</p>
                        <p>- cafeter??a con WiFi - Disfruta de una buena cerveza para acompa??ar nuestras platos o nuestras tapas. Nuestras tartas caseras te van a sorprender  ??Ven a visitarnos a la hora del desayuno o del almuerzo! Gracias a nuestro WiFi gratuito, los blogueros podr??n compartir sus fotos en Instagram en tiempo real.</p>
                        <p>- ??D??jate convencer por ti mismo! - A trav??s de nuestra central de reservas online podr??s pedir mesa muy f??cilmente. Paga c??modamente en efectivo, con cheque, con VISA o con MasterCard. Si prefieres disfrutar de nuestros platos en casa o en la oficina, tambi??n puedes encargarlos para llevar. Abrimos todos los d??as.Solo zona Gornal o gran via sud</p>
					</div>
				</div>
			</div>
            <div class="social-media-icons">
                    <a href="https://www.facebook.com/Cafeter??a-Diego-104730237893730/" class="fa fa-facebook"></a>
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
					<p class="p1-menu">Nuestro<span class="p2-menu">men??</span></p>
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
							<p>Selecci??n de Bocadillos de la casa</p>
							        <form  action="{{url('carta1')}}"  method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label>Carta</label>
                                    <input type="file" name="carta" id="carta" value="">
                                    <input type="submit" name="submit" value="enviar">
                                    </form>
						</div>
                        
					</div>
                    <form  action="{{url('menu1')}}"  method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label>Foto</label>
                                    <input type="file" name="foto" id="foto" value="">
                                    <input type="submit" name="submit" value="enviar">
                                    </form>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="../storage/app/public/uploads/menu2.jpg" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Carta de Platos Combinados</h4>
							<p>Selecci??n de Platos Combinados de la casa</p>
							<form  action="{{url('carta2')}}"  method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label>Carta</label>
                                    <input type="file" name="carta" id="carta" value="">
                                    <input type="submit" name="submit" value="enviar">
                                    </form>
                </div>
					</div>
                    <form  action="{{url('menu2')}}"  method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label>Foto</label>
                                    <input type="file" name="foto" id="foto" value="">
                                    <input type="submit" name="submit" value="enviar">
                                    </form>
				</div>
                    
                    <div class="col-lg-4 col-md-6 special-grid drinks">
                        <div class="gallery-single fix">
                            <img src="../storage/app/public/uploads/menu3.jpg" class="img-fluid2" alt="Image">
                            <div class="why-text">
                                <h4>Carta de Tapas</h4>
                                <p>Selecci??n de Tapas de la casa</p>
                                <form  action="{{url('carta3')}}"  method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label>Carta</label>
                                    <input type="file" name="carta" id="carta" value="">
                                    <input type="submit" name="submit" value="enviar">
                                    </form>
                </div>
                        </div>
                        <form  action="{{url('menu3')}}"  method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <label>Foto</label>
                                    <input type="file" name="foto" id="foto" value="">
                                    <input type="submit" name="submit" value="enviar">
                                    </form>
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
    <h1 class="h1-mapa">D??nde Estamos</h1>
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
						


                    <form id="contactForm" onsubmit="return validarReserva()" action="{{url('/crearReserva')}}"  method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

							<div class="row">
								<div class="col-md-6">
									<h3>Reserva una mesa</h3>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="personas_reserva" name="personas_reserva" required data-error="Por favor seleccione el n??mero de comensales.">
											  <option disabled selected>N??mero de personas</option>
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
											<input id="fecha_reserva" class="datepicker picker__input form-control" onclick="return fecha()" name="fecha_reserva" type="date" value=""  equired data-error="Por favor seleccione una fecha.">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="hora_reserva" name="hora_reserva" required data-error="Por favor seleccione una hora.">
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
											<input type="text" class="form-control" id="nombre_reserva" name="nombre_reserva" placeholder="Tu nombre" required data-error="Por favor introduzca su nombre.">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="apellido_reserva" name="apellido_reserva" placeholder="Tu apellido" required data-error="Por favor introduzca su apellido.">
											<div class="help-block with-errors"></div>
										</div>                                 
                                    </div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Direcci??n de Correo Electr??nico" id="email_reserva" class="form-control" name="email_reserva" required data-error="Por favor introduzca su email.">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="N??mero de Tel??fono" id="telefono_reserva" class="form-control" name="telefono_reserva" pattern="[0-9]+" title="Por favor introduzca su n??mero de tel??fono" required="required">
											<div class="help-block with-errors"></div>
										</div> 
                                    </div>


                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Mensaje (Opcional)" id="mensaje_reserva" class="form-control" name="mensaje_reserva">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
                                   
                                    
                   
                    
                    <input type="submit" class="btn-menu" name="Enviar" onclick="return confirm('??Enviar correo?');" value="Enviar">
                    

                                    <!-- <p class="p-boton-reserva"><a class="btn-reserva-header" href="#">Reserva</a></p> -->
										<div id="msgSubmit" class="h3 text-center hidden">
                                            @if(session("mensaje"))
                                            <p id="mensaje">
                                                {{session('mensaje')}}
                                            </p>
                                            @endif
                                        </div> 
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
                        <th>Mi??rcoles</th>
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
                    <th>S??bado</th>
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
                <img src="../storage/app/public/uploads/american-express.png" alt="" class="icono-pago">
                <span>American Express</span>
            </li>
            <li>
                <img src="../storage/app/public/uploads/money.png" alt="" class="icono-pago">
                <span>En Efectivo</span>
            </li>
            <li>
                <img src="../storage/app/public/uploads/credit-card.png" alt="" class="icono-pago">
                <span>Contactless</span>
            </li>
            <li>
                <img src="../storage/app/public/uploads/mastercard.png" alt="" class="icono-pago">
                <span>Mastercard</span>
            </li>
            <li> 
                <img src="../storage/app/public/uploads/ticket-restaurant.png" alt="" class="icono-pago">
                <span>Ticket Restaurant??</span>
            </li>
            <li>
                <img src="../storage/app/public/uploads/visa-logo.png" alt="" class="icono-pago">
                <span>VISA</span>
            </li>
            <li>
                <img src="../storage/app/public/uploads/diners-club.png" alt="" class="icono-pago">
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
                   <span class="subtitle brand-subtitleFont">Galer??a</span>
               </h2>
               <div class="divider-mark brand-bg"></div>
               </div>
           </div>
       </div>
       <div class="tz-gallery">
           <div class="row">
               <div class="col-sm-12 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria1.j">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria1.jpg" alt="Gallery Images">
                            <form  action="{{url('galeria1')}}"  method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Foto</label>
                            <input type="file" name="foto" id="foto" value="">
                            <input type="submit" name="submit" value="enviar">
                            </form>
                   </a>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria2.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria2.jpg" alt="Gallery Images">
                       <form  action="{{url('galeria2')}}"  method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Foto</label>
                            <input type="file" name="foto" id="foto" value="">
                            <input type="submit" name="submit" value="enviar">
                            </form></a>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria3.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria3.jpg" alt="Gallery Images">
                       <form  action="{{url('galeria3')}}"  method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Foto</label>
                            <input type="file" name="foto" id="foto" value="">
                            <input type="submit" name="submit" value="enviar">
                            </form></a>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria4.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria4.jpg" alt="Gallery Images">
                       <form  action="{{url('galeria4')}}"  method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Foto</label>
                            <input type="file" name="foto" id="foto" value="">
                            <input type="submit" name="submit" value="enviar">
                            </form></a>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria5.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria5.jpg" alt="Gallery Images">
                       <form  action="{{url('galeria5')}}"  method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Foto</label>
                            <input type="file" name="foto" id="foto" value="">
                            <input type="submit" name="submit" value="enviar">
                            </form></a>
               </div> 
               <div class="col-sm-6 col-md-4 col-lg-4">
                   <a class="lightbox" href="../storage/app/public/uploads/galeria6.jpg">
                       <img class="img-fluid3" src="../storage/app/public/uploads/galeria6.jpg" alt="Gallery Images">
                       <form  action="{{url('galeria6')}}"  method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Foto</label>
                            <input type="file" name="foto" id="foto" value="">
                            <input type="submit" name="submit" value="enviar">
                            </form></a>
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
            ?? 2021 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Samue mu??oz</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>
</section>
    <script src="{{ mix('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/app.js')}}"></script> 
</body>
</html>