window.onload = function() {
    //modal = document.getElementById("myModal");
    //read();
}

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
function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function disponibilidad() {
    alert('hola')
    var sectionHoras = document.getElementById('section-hora');
    var personas = document.getElementById('personas_reserva');
    var dia = document.getElementById('fecha_reserva');
    var ajax = new objetoAjax();
    var token = document.getElementById('token').getAttribute('content');
    ajax.open('post', 'disponibilidad', true);
    var datos = new FormData();
    datos.append('personas', personas)
    datos.append('dia', dia)
    datos.append('_token', token);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var respuesta = JSON.parse(ajax.responseText);
            console.log(respuesta);
            var tabla = "";
            // tabla += '<option value="">Hora de la Reserva</option>'
            tabla += '<input type="text" value="">';
            //for (let i = 0; i < respuesta.length; i++) {
            // tabla += '<option value="' + respuesta[i].hora_reserva + '">' + respuesta[i].hora_reserva + '</option>'
            //tabla += '<option value="' + respuesta[i].hora_reserva + '">' + respuesta[i].hora_reserva + '</option>'

            //}
            sectionHoras.innerHTML = tabla;
        }
    }
    ajax.send(datos);

}