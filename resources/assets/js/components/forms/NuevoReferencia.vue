<template>
    <form class="form-horizontal">
        <div class="box-body">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Personal</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre"
                                       placeholder="Nombre...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellidos"
                                   class="col-sm-2 control-label">Apellidos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="apellidos"
                                       placeholder="Apellidos...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dni"
                                   class="col-sm-2 control-label">DNI/NIE</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dni"
                                       placeholder="DNI/NIE...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">F. Nac.</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <label class="col-sm-2 control-label">Sexo</label>
                            <div class="col-sm-4">
                                <select name="sexo" id="sexo" class="form-control">
                                    <option> Seleccione...</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">L. Nacim.</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Lugar de Nacimiento...">
                            </div>
                            <label class="col-sm-2 control-label">Nacionalidad</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Nacionalidad...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Profesión</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Profesión...">
                            </div>
                            <label class="col-sm-2 control-label">Estado Civil</label>
                            <div class="col-sm-4">
                                <select name="estadoCivil" id="estadoCivil" class="form-control">
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                    <option value="casado">Separado</option>
                                    <option value="casado">Viudo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                   class="col-sm-2 control-label">Hijos</label>
                            <div class="col-sm-4">
                                <select class="form-control" v-model="hijos">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Información de Contacto</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Teléfono</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Teléfono...">
                                </div>
                                <label class="col-sm-2 control-label">Móvil</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Móvil...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Email...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Dirección</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="direccion"
                                           placeholder="Dirección...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Localidad</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Localidad...">
                                </div>
                                <label class="col-sm-2 control-label">Municipio</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Municipio...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Otra información</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cía. Origen</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Compañía de origen...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Observaciones</label>
                                <div class="col-sm-10">
                                    <textarea name="otra" id="otra" rows="2"
                                      placeholder="Observaciones..." class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-info pull-right">Guardar</button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "NuevoReferencia",
        data(){
            return{
                hijos: 0
            }
        }
    }
</script>

<style scoped>

</style>
