<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<script>
$(document).ready( function () {
    $('#table').DataTable();
} );
</script>
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
						<li class="nav-item"><a class="nav-link" href="#">Menú</a></li>
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
	<!-- FIN HEADER admin -->

    <!-- INICIO admin -->
	<div class="div-admin">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto mr-auto text-left">
					<p class="p1-admin">Administrar <span class="p2-admin">Reservas</span></p>
				</div>
            </div>
        </div>
        <div> 
        
        <form  action="{{url('modificarReserva',$listaReservas->id_reserva)}}"  method="post" enctype="multipart/form-data">
            <!-- csrf evita ataques -->
        @csrf
        {{method_field('PUT')}}
        <!-- {{csrf_field()}} -->

            <label>Nombre</label>
            <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
            <input type="text" name="nombre_reserva" value="{{$listaReservas->nombre_reserva}}" required><br>

            <label>Apellido</label>
            <input type="text" name="apellido_reserva" value="{{$listaReservas->apellido_reserva}}" required><br>

            <label>Email</label>
            <input type="email" name="email_reserva" value="{{$listaReservas->email_reserva}}" required><br>

            <label>Telefono</label>
            <input type="number" name="telefono_reserva" value="{{$listaReservas->telefono_reserva}}" required><br>

            <label>Mensaje</label>
            <input type="text" name="mensaje_reserva" value="{{$listaReservas->mensaje_reserva}}" required><br>

            <label>Fecha</label>
            <input type="date" name="fecha_reserva" value="{{$listaReservas->fecha_reserva}}" required><br>

            <label>Hora</label>
            <input type="text" name="hora_reserva" value="{{$listaReservas->hora_reserva}}" required>

            <label>Personas</label>
            <input type="text" name="personas_reserva" value="{{$listaReservas->personas_reserva}}" required>

            <input type="submit" name="Enviar" value="Enviar">
        </form>
    </div>
            
    
    <!-- OPCIONES admin -->
    
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