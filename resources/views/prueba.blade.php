<div> 
        <form  action="{{url('/crearReserva')}}"  method="get" enctype="multipart/form-data">

            <!-- csrf evita ataques -->
        @csrf
        <!-- {{csrf_field()}} -->

            <label>Nombre</label>
            <!-- {{-- {{<input type="text" name="__token" value=csrf_token()> }} --}} -->
            <input type="text" name="nombre_reserva" required><br>

            <label>Apellido</label>
            <input type="text" name="apellido_reserva" required><br>

            <label>Email</label>
            <input type="email" name="email_reserva" required><br>

            <div class="form-group">
                <select class="custom-select d-block form-control" name="personas_reserva" id="personas_reserva" required data-error="Please select Person">
                    <option disabled selected>Número de personas</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            <div class="help-block with-errors"></div>
        </div>
        <label>Fecha</label>
        <div class="form-group">
            <input id="fecha_reserva" class="datepicker picker__input form-control" name="fecha_reserva" type="date" value="" equired data-error="Please enter Date">
            <div class="help-block with-errors"></div>
        </div>
        <label>hora</label>
        <div class="form-group">
            <select class="custom-select d-block form-control" name="hora_reserva" id="hora_reserva" required data-error="Please select Person">
                <option disabled selected>Hora de la Reserva</option>
                <option value="1">12:30</option>
                <option value="2">13:00</option>
                <option value="3">13:30</option>
                <option value="4">14:00</option>
            </select>
            <div class="help-block with-errors"></div>
        </div> 
        <label>tlf</label>

        <div class="form-group">
            <input type="text" placeholder="Número de Teléfono" id="telefono_reserva" class="form-control" name="telefono_reserva" required data-error="Please enter your Numbar">
            <div class="help-block with-errors"></div>
        </div> 
        <div class="form-group">
            <select class="custom-select d-block form-control" id="motivo_reserva" name="motivo_reserva" required data-error="Please select Person">
                <option disabled selected>Motivo de la visita (opcional)</option>
                <option value="1">12:30</option>
                <option value="2">13:00</option>
                <option value="3">13:30</option>
                <option value="4">14:00</option>
            </select>
            <div class="help-block with-errors"></div>
        </div> 
        <div class="form-group">
            <input type="text" placeholder="Mensaje (Opcional)" id="mensaje_reserva" class="form-control" name="mensaje_reserva" required data-error="Please enter your Numbar">
            <div class="help-block with-errors"></div>
        </div> 
        <input type="submit" name="Enviar" value="Enviar">
        </form>
    </div>