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
						<li class="nav-item"><a class="nav-link" href="{{url('logout')}}">Cerrar sesión</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- FIN HEADER admin -->

    <!-- INICIO admin -->
	@if (Session::get('usuario'))
        <!-- <h1 style="margin: 10px;">{{(Session::get('usuario'))}}</h1> -->
    @else
        <p>Usuario no registrado</p>
    @php
        header('Location: http://localhost/www/DAW2/PHP/miaplicacion/public/');
    @endphp

    @endif
	<div class="div-admin">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="p1-admin">Bienvenido <span class="p2-admin">admin</span></p>
				</div>
            </div>
        </div>
    
    <!-- OPCIONES admin -->
    <div class="admin-box">
		<div class="container">
			<div class="row special-list">
				<div class="col-lg-6 col-md-6 special-grid drinks admin-columnas">
					<div class="gallery-single fix">
						<img src="../storage/app/public/uploads/reserva.jpg" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Reservas</h4>
							<p>Mirar todas las reservas que se han hecho</p>
							<h5 class="p-boton-carta"><a class="btn-menu" href="reservas">Reservas</a></h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 special-grid drinks admin-columnas">
					<div class="gallery-single fix">
						<img src="../storage/app/public/uploads/modificar.png" class="img-fluid2" alt="Image">
						<div class="why-text">
							<h4>Modificar</h4>
							<p>Modificar alguno de los apartados</p>
							<h5 class="p-boton-carta"><a class="btn-menu" href="modificar">Modificar</a></h5>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>  
</div>
    <!-- FIN admin -->
    <!-- FOOTER -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Cafetería-Diego-104730237893730/" role="button"
                ><i class="fa fa-facebook-f"></i
            ></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/search?q=CAFETERIA%20DIEGO%20L%27Hospitalet%20de%20Llobregat%20Avinguda%20Carmen%20Amaya%2C%201" role="button"
                ><i class="fa fa-google"></i
            ></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/cafeteria_diego/?hl=es" role="button"
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