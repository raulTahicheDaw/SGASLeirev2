<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Conectado </a>
                </div>
            </div>
        @endif

        <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
    /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menú Principal</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-user-circle'></i> <span>Clientes</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @click="menu=1"><a href="#"><i class="fa fa-list text-info"></i> Listado Clientes</a></li>
                    <li @click="menu=2"><a href="#"><i class="fa fa-plus text-green"></i> Nuevo Cliente</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-tty'></i> <span>Referencias</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @click="menu=3"><a href="#"><i class="fa fa-list text-info"></i> Listado Referencias</a></li>
                    <li @click="menu=4"><a href="#"><i class="fa fa-plus text-green"></i> Nueva Referencia</a></li>
                </ul>
            </li>            <li class="treeview">
                <a href="#"><i class='fa fa-calendar'></i> <span>Agenda</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @click="menu=5">
                        <a href="#"><i class="fa fa-calendar-plus-o text-red"></i> Citas del dia
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">4</span>
                             </span>
                        </a>
                    </li>
                    <li @click="menu=6"><a href="#"><i class="fa fa-calendar text-purple"></i> Caledario</a></li>
                    <li @click="menu=7"><a href="#"><i class="fa fa-calendar-check-o text-yellow"></i> Vencimientos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-print'></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @click="menu=8"><a href="#"><i class="fa fa-file-pdf-o"></i> Listado PDF de Clientes </a></li>
                    <li @click="menu=9"><a href="#"><i class="fa fa-file-pdf-o"></i> Listado PDF de Referencias</a></li>
                    <li @click="menu=10"><a href="#"><i class="fa fa-file-pdf-o"></i> Listado PDF de Vencimientos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-bar-chart'></i> <span>Estadísticas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @click="menu=11"><a href="#"><i class="fa fa-pie-chart text-yellow"></i> Productos más contratados </a></li>
                    <li @click="menu=12"><a href="#"><i class="fa  fa-bar-chart text-green"></i> Clientes/Mes</a></li>
                    <li @click="menu=13"><a href="#"><i class="fa  fa-bar-chart text-blue"></i> Referencias/Mes</a></li>
                    <li @click="menu=14"><a href="#"><i class="fa fa-line-chart text-light-blue"></i> Referencias a Clientes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-laptop'></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="treeview"><a href="#"><i class="fa fa-sitemap"></i> Ramos<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li @click="menu=15"><a href="#"><i class="fa fa-list text-info"></i> Listado Ramos</a></li>
                            <li @click="menu=16"><a href="#"><i class="fa fa-plus text-green"></i> Nuevo Ramo</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-medkit"></i> Productos<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li @click="menu=17"><a href="#"><i class="fa fa-list text-info"></i> Listado Productos</a></li>
                            <li @click="menu=18"><a href="#"><i class="fa fa-plus text-green"></i> Nuevo Producto</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-tags"></i> Categorías Clientes<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-list text-info"></i> Listado Categorías</a></li>
                            <li><a href="#"><i class="fa fa-plus text-green"></i> Nueva Categoría</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
