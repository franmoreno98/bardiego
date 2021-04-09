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