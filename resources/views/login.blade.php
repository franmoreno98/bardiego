<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('../storage/app/public/uploads/logo.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('../storage/app/public/uploads/logo.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body style="background-color: #666666;">
	
	<div class="principal-form">
		<div class="content-form">
			<div class="row-form">
				<form class="formulario" action="{{url('recibirlogin')}}" method="POST" onsubmit="return validacionForm('label','input')">
          {{csrf_field()}}
					<span class="formulario-titulo">
						Inicia Sesión para continuar
					</span>
					
					<div class="botonesform">
						<input class="campoform" type="text" name="usuario" id="usuario">
						<span class="focus-campoform"></span>
						<span class="label-campoform">Usuario</span>
					</div>
					
					<div class="botonesform validate-input">
						<input class="campoform" type="password" name="passwd" id="psswd">
						<span class="focus-campoform"></span>
						<span class="label-campoform">Contraseña</span>
					</div>

					<div class="container-login">
					<input type="submit" class="login-boton" id="ingresar" value="Ingresar">
					</div>
					<div id="message"></div>
					<div class="img-logo">
						<img src="../storage/app/public/uploads/logo.png" style="margin-left: 70px; margin-top: 40px;">
					</div>
				</form>

				<div class="imagen-fondo-login" style="background-image: url('../storage/app/public/uploads/bg_login.jpg');">
				</div>
			</div>
		</div>
	</div>

</body>
</html>