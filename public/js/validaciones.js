function fecha() {
    console.log('hola')
    var dtToday = new Date();

    var mes = dtToday.getMonth() + 1;
    var dia = dtToday.getDate();
    var anyo = dtToday.getFullYear();
    if (mes < 10)
        mes = '0' + mes.toString();
    if (dia < 10)
        dia = '0' + dia.toString();

    var maxDate = anyo + '-' + mes + '-' + dia;
    //alert(maxDate);
    $('#fecha_reserva').attr('min', maxDate);
}

function validarReserva() {
    console.log('validando reserva');
    var personas = document.getElementById('personas_reserva').value;
    var hora = document.getElementById('hora_reserva').value;
    var fecha = document.getElementById('fecha_reserva').value;
    var nombre = document.getElementById('nombre_reserva').value;
    var apellido = document.getElementById('apellido_reserva').value;
    var email = document.getElementById('email_reserva').value;
    var telefono = document.getElementById('telefono_reserva').value;
    var motivo = document.getElementById('motivo_reserva').value;
    var mensaje = document.getElementById('mensaje_reserva').value;
}