<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('../storage/app/public/uploads/logo.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('../storage/app/public/uploads/logo.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/style.css">
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
                        <li class="nav-item"><a class="nav-link" href="#">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- FIN HEADER admin -->


    <!-- INICIO admin -->
	<div class="div-admin">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto text-left">
					<p class="p1-admin">Actualizar <span class="p2-admin">Reserva</span></p>
				</div>
            </div>
        </div>
        <div> 
            <form action="{{url('modificarReserva',$listaReservas->id_reserva)}}"  method="post" enctype="multipart/form-data" class="form-actualizar">
                <!-- csrf evita ataques -->
                @csrf
                {{method_field('PUT')}}
                <!-- {{csrf_field()}} -->
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre_reserva" class="form-control" value="{{$listaReservas->nombre_reserva}}" required><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Apellido</label>
                        <input type="text" name="apellido_reserva" class="form-control" value="{{$listaReservas->apellido_reserva}}" required><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Email</label>
                        <input type="email" name="email_reserva" class="form-control" value="{{$listaReservas->email_reserva}}" required><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Teléfono</label>
                        <input type="number" name="telefono_reserva" class="form-control" value="{{$listaReservas->telefono_reserva}}" required><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Mensaje</label>
                        <input type="text" name="mensaje_reserva" class="form-control" value="{{$listaReservas->mensaje_reserva}}" required><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Fecha</label>
                        <input type="date" name="fecha_reserva" class="form-control" value="{{$listaReservas->fecha_reserva}}" required><br>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Hora</label>
                        <input type="text" name="hora_reserva" class="form-control" value="{{$listaReservas->hora_reserva}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Personas</label>
                        <input type="text" name="personas_reserva" class="form-control" value="{{$listaReservas->personas_reserva}}" required>
                    </div>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary" name="Enviar" id="btn-actualizar-reserva">Actualizar Reserva</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- FIN admin -->
    <!-- FOOTER -->
    <footer class="bg-dark text-center text-white footer-admin">
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