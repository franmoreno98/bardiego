window.onload = function() {
    //modal = document.getElementById("myModal");
    //read();
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
    var dia = document.getElementById('fecha_reserva');


    ajax.open('post', 'disponibilidad', true);
    var datos = new FormData();
    datos.append('dia', dia)
    datos.append('_token', token);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var respuesta = JSON.parse(ajax.responseText);
            console.log(respuesta);
            var tabla = "";
            tabla += '<option value="">Hora de la Reserva</option>'

            for (let i = 0; i < respuesta.length; i++) {


                tabla += '<option value="' + respuesta[i].hora_reserva + '">14:00</option>'
            }
            notas.innerHTML = tabla;
        }
    }
    ajax.send(datos);

}