<!-- Content Header (Page header) -->
<section class="content-header">

    <div>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
            <li class="active">
                <span v-if="menu==1">Clientes</span>
                <span v-if="menu==2">Referencias</span>
                <span v-if="menu==3">Agenda > Citas del dia</span>
                <span v-if="menu==4">Agenda > Calendario</span>
                <span v-if="menu==5">Agenda > Vencimientos</span>
                <span v-if="menu==9">Estadísticas > Productos más contratados</span>
                <span v-if="menu==10">Estadísticas > Clientes por mes</span>
                <span v-if="menu==11">Estadísticas > Referencias por mes</span>
                <span v-if="menu==12">Estadísticas > Ref. a Clientes</span>
                <span v-if="menu==13">Configuración > Productos</span>
                <span v-if="menu==14">Configuración > Ramos</span>
                <span v-if="menu==15">Configuración > Categorías Clientes</span>
            </li>
        </ol>
    </div>

</section>
