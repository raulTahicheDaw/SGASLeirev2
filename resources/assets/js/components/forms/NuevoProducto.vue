<template>
    <div>
        <form role="form">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="nombreRamo" placeholder="Introduce un ramo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Descripción</label>
                        <input type="text" class="form-control" id="descripcionRamo"
                               placeholder="Introduce una breve descripción">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Ramo</label>
                        <select name="ramo" id="rao" class="form-control">
                            <option value="0">Vida</option>
                            <option value="1">Hogar</option>
                            <option value="2">Accidentes</option>
                            <option value="3">Decesos</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "NuevoRamo"
    }
</script>

<style scoped>

</style>
