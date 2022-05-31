<div id="modal_agregar" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrar nuevo miembro de APAC</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal_agregar" aria-label="Close"></button>
            </div>
            <form id="form_agregar">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb">
                                    <label for="img">Selecciona imagen:</label>
                                    <input type="file" id="imagen_id" name="imagen" accept="image/*">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="tipo_id">Tipo</label>
                                    <select name="tipo" id="tipo_id" required>
                                        <option selected disabled value="" ></option>
                                        <option value="perro">Perro</option>
                                        <option value="gato">Gato</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="mb">
                                    <label for="nombre_id" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre_id" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="raza_id" class="form-label">Raza</label>
                                    <input type="text" name="raza" class="form-control" id="raza_id" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="color_id" class="form-label">Color</label>
                                    <input type="text" name="color" class="form-control" id="color_id" required>
                                </div>
                            </div>
                        
                        </div>
                        <br>
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <label for="nacimiento_id">Nacimiento</label>
                                    <input id="nacimiento_id" name="fecha_de_nacimiento" class="form-control" type="date" required/>
                                </div>
                                <div class="col">
                                    <label for="ingreso_id">Ingreso</label>
                                    <input id="ingreso_id" name="fecha_de_ingreso" class="form-control" type="date" required/>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                    <div class="mb">
                                        <label for="descripcion_id" class="form-label">Descripción</label>
                                        <textarea name="descripcion" id="descripcion_id" cols="58" rows="2" required></textarea>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <input type="checkbox" name="esterilizado_checkbox" class="form-check-input" id="esterilizado_id_checkbox">
                                    <label class="form-check-label" >Esterilizado</label>
                                    <input hidden id="esterilizado_id" name="esterilizado" class="form-control" type="date" />
                                </div>
                                <div class="col">
                                    <input type="checkbox"  name="adoptado_checkbox" class="form-check-input" id="adoptado_id_checkbox">
                                    <label class="form-check-label" >Adoptado</label>
                                    <input hidden id="adoptado_id" name="adoptado" class="form-control" type="date" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input type="checkbox"  name="vacuna_checkbox" class="form-check-input" id="vacuna_id_checkbox">
                                            <label class="form-check-label" >Vacuna</label>
                                        </div>
                                        <div class="col">
                                            <button hidden id="agregar_mas_vacuna_agregar" style="height:90%;" type="button" class="btn btn-success btn-sm">Agregar más</button>
                                        </div>
                                        <div class="col-5">
                                        </div>

                                    </div>
                                    <div hidden id="vacuna_id">
                                        <div class="row">
                                            <div class="col-7">
                                                <input class="form-control" name="nombre_vacuna1"type="text" placeholder="Nombre de vacuna"/>
                                            </div>
                                            <div class="col-5">
                                                <input class="form-control" name="fecha_vacuna1" type="date" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input type="checkbox"  name="operacion_checkbox" class="form-check-input" id="operacion_id_checkbox">
                                            <label class="form-check-label" >Operacion</label>
                                        </div>
                                        <div class="col">
                                            <button hidden id="agregar_mas_operacion_agregar" style="height:90%;" type="button" class="btn btn-success btn-sm">Agregar más</button>
                                        </div>
                                        <div class="col-5">
                                        </div>
                                    </div>
                                    <div id="conjunto_operaciones">
                                        <div hidden id="operacion_id1">
                                            <div class="row">
                                                <div class="col-7">
                                                    <input class="form-control" name="nombre_operacion1" type="text" placeholder="Nombre de operacion" />
                                                </div>
                                                <div class="col-5">
                                                    <input class="form-control" name="fecha_operacion1" type="date" />
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col">
                                <div class="mb">
                                    <label for="tamano_id">Tamaño</label>
                                    <select name="tamano" id="tamano_id" required>
                                        <option selected disabled value="" ></option>
                                        <option value="chico">Chico</option>
                                        <option value="mediano">Mediano</option>
                                        <option value="grande">Grande</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="sexo_id">Sexo</label>
                                    <select name="sexo" id="sexo_id" required>
                                        <option selected disabled value="" ></option>
                                        <option value="m">Macho</option>
                                        <option value="h">Hembra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb ">
                                    <input type="checkbox"  name="publico_checkbox" class="form-check-input" id="publico_id">
                                    <label class="form-check-label" >Publico</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button id="boton_agregar" type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>

        </div>
    </div>
</div>