<div class="modal fade" id="registrarModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Ganador</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form role="form" action="{{ asset('persona') }}" method="POST">
            {{-- <form role="form" id="registrarPersona" method="POST"> --}}
                @csrf
                {{-- @method('GET') --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="nombres">Nombre</label>
                            <input type="text" class="form-control"
                                required autocomplete="nombres" autofocus
                                name="nombres" id="nombres" placeholder="Nombres">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control"
                                required autocomplete="apellidos" autofocus
                                name="apellidos" id="apellidos" placeholder="Apellidos">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control"
                                required autocomplete="direccion" autofocus
                                name="direccion" id="direccion" placeholder="Dirección">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control"
                                required autocomplete="telefono" autofocus
                                name="telefono" id="telefono" placeholder="Teléfono">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control"
                                required autocomplete="correo" autofocus
                                name="correo" id="correo" placeholder="Correo electrónico">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <table>
                        <tr>
                            <th colspan="3">
                                <div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>&nbsp;&nbsp;
                                    {{-- <button type="submit" class="btn btn-success">Guardar</button>&nbsp;&nbsp; --}}
                                </div>
                            </th>
                            <th colspan="3">
                                <div>
                                    {{-- <input type="submit" value="Registrar premio" id="crearPer" class="btn btn-success"> --}}
                                    <button id="crearPer" type="submit" class="btn btn-success">Registrar premio</button>
                                    {{-- <a href="{{ asset('/usuarios') }}" class="btn btn-danger">Regresar</a> --}}
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
            </form>
            {{-- <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success">Registrar premio</button>
            </div> --}}
        </div>
    </div>
</div>
