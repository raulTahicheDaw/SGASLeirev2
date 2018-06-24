@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <template v-if="menu==0">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 0</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==1">
                    <!-- Default box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Clientes</h3>
                        </div>
                        <div class="box-body">
                            <clientes-component></clientes-component>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==2">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nuevo Cliente</h3>
                        </div>
                        <nuevo-cliente-component></nuevo-cliente-component>
                    </div>

                </template>
                <template v-if="menu==3">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Referencias</h3>
                        </div>
                        <div class="box-body">
                            <referencias-component></referencias-component>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==4">
                    <!-- Default box -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nueva Referencia</h3>
                        </div>
                        <div class="box-body">
                            <nuevo-referencia-component></nuevo-referencia-component>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==5">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 5</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==6">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 6</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==7">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 7</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==8">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 8</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==9">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 9</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==10">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 10</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==11">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 11</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==12">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 12</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==13">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 13</h3>
                        </div>
                        <div class="box-body">
                            {{ trans('message.logged') }}. Start creating your amazing application!
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==14">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 14</h3>
                        </div>
                        <div class="box-body">
                            <nuevo-ramo-component></nuevo-ramo-component>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==15">
                    <!-- Default box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Menu 15</h3>
                        </div>
                        <div class="box-body">
                            <ramos-component></ramos-component>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </template>
                <template v-if="menu==16">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- Default box -->
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Nuevo Ramo</h3>
                            </div>
                            <div class="box-body">
                                <nuevo-ramo-component></nuevo-ramo-component>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </template>

            </div>
        </div>
    </div>
@endsection

