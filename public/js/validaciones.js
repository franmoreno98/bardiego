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
    var errors = 0;

    if (personas === "") {
        personas.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;
    }
    if (hora === "") {
        hora.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;
    }

    if (fecha === "") {
        fecha.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;
    }
    alert('hola')

    if (nombre === "") {
        nombre.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;

    }
    if (apellido === "") {
        apellido.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;

    }
    if (email === "") {
        email.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;

    }
    if (telefono === "") {
        telefono.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;

    }
    if (motivo === "") {
        motivo.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;

    }
    if (mensaje === "") {
        mensaje.style.backgroundColor = "rgba(197, 40, 40, 0.719)";
        errors = 1;

    }
    if (errors === 0) {
        return true
    } else {
        return false;
    }

}