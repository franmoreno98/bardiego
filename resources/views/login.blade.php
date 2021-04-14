<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<form action="{{url('recibirlogin')}}" method="post">
    {{csrf_field()}}

  <div style="text-align: center; margin: auto; width: 50%; border: 3px solid black; padding: 10px; display: flex; justify-content: center; flex-direction: column; padding-top: 20px;">
    <h1>LOGIN</h1>

    <div class="form-group" style="margin: 10px; width: 50%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin-left: 24%!important;">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="usuario" class="form-control" required>
    </div>

    <div class="form-group" style="margin: 10px; width: 50%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin-left: 24%!important;">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="passwd" class="form-control" required>

      <button type="submit" class="btn btn-dark" style="margin: 10px; margin-top: 40px;">Login</button>
    </div>
  </div>

</form>
</body>
</html>