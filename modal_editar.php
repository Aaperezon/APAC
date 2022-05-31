<div id="modal_editar" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edición: < Nombre ></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal_editar" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb">
                                    <label for="img">Selecciona imagen:</label>
                                    <input type="file" id="img" name="img" accept="image/*">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="sexo_id">Tipo</label>
                                    <select name="sexo" id="sexo_id">
                                        <option value="volvo">Perro</option>
                                        <option value="saab">Gato</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="mb">
                                    <label for="nombre_id" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_id" >
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="raza_id" class="form-label">Raza</label>
                                    <input type="text" class="form-control" id="raza_id" >
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="color_id" class="form-label">Color</label>
                                    <input type="text" class="form-control" id="color_id" >
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <label for="nacimiento_id">Nacimiento</label>
                                    <input id="nacimiento_id" class="form-control" type="date" />
                                </div>
                                <div class="col">
                                    <label for="ingreso_id">Ingreso</label>
                                    <input id="ingreso_id" class="form-control" type="date" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                    <div class="mb">
                                        <label for="descripcion_id" class="form-label">Descripción</label>
                                        <textarea name="" id="descripcion_id" cols="58" rows="2"></textarea>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <input type="checkbox" class="form-check-input" id="esterilizado_id_checkbox_edit">
                                    <label class="form-check-label" >Esterilizado</label>
                                    <input hidden id="esterilizado_id_edit" class="form-control" type="date" />
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="form-check-input" id="adoptado_id_checkbox_edit">
                                    <label class="form-check-label" >Adoptado</label>
                                    <input hidden id="adoptado_id_edit" class="form-control" type="date" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input type="checkbox" class="form-check-input" id="vacuna_id_checkbox_edit">
                                            <label class="form-check-label" >Vacuna</label>
                                        </div>
                                        <div class="col">
                                            <button hidden id="agregar_mas_vacuna" style="height:90%;" type="button" class="btn btn-success btn-sm">Agregar más</button>
                                        </div>
                                        <div class="col-5">
                                        </div>

                                    </div>
                                    <div hidden id="vacuna_id_edit">
                                        <div class="row">
                                            <div class="col-7">
                                                <input class="form-control" type="text" placeholder="Nombre de vacuna"/>
                                            </div>
                                            <div class="col-5">
                                                <input class="form-control" type="date" />
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
                                            <input type="checkbox" class="form-check-input" id="operacion_id_checkbox_edit">
                                            <label class="form-check-label" >Operacion</label>
                                        </div>
                                        <div class="col">
                                            <button hidden id="agregar_mas_operacion" style="height:90%;" type="button" class="btn btn-success btn-sm">Agregar más</button>
                                        </div>
                                        <div class="col-5">
                                        </div>
                                    </div>
                                    <div hidden id="operacion_id_edit">
                                        <div class="row">
                                            <div class="col-7">
                                                <input class="form-control" type="text" placeholder="Nombre de operacion"/>
                                            </div>
                                            <div class="col-5">
                                                <input class="form-control" type="date" />
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
                                    <select name="tamano" id="tamano_id">
                                        <option value="volvo">Chico</option>
                                        <option value="volvo">Mediano</option>
                                        <option value="volvo">Grande</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb">
                                    <label for="sexo_id">Sexo</label>
                                    <select name="sexo" id="sexo_id">
                                        <option value="volvo">Macho</option>
                                        <option value="saab">Hembra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb ">
                                    <input type="checkbox" class="form-check-input" id="publico_id">
                                    <label class="form-check-label" >Publico</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>