<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-citas-hoy-tab" data-toggle="tab"><i class="fa fa-calendar-check-o"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-citas-hoy-tab">
            <h3 class="control-sidebar-heading">Citas de hoy</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-address-book bg-red"></i>
                        <div class="menu-info">
                            <p>09:30</p>
                            <h4 class="control-sidebar-subheading">Visita a Raúl Gonzlaez</h4>
                            <p>Entrega de póliza</p>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->
        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">{{ trans('adminlte_lang::message.statstab') }}</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">{{ trans('adminlte_lang::message.generalset') }}</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        {{ trans('adminlte_lang::message.reportpanel') }}
                        <input type="checkbox" class="pull-right" {{ trans('adminlte_lang::message.checked') }} />
                    </label>
                    <p>
                        {{ trans('adminlte_lang::message.informationsettings') }}
                    </p>
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
