<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-users"></i> <span>Account Management</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('doctors.index') }}">Doctors</a></li>
                <li><a href="{{ route('patients.index') }}">Patients</a></li>
            </ul>
        </li>
        <li><a href="{{ route('appointments.index') }}"><i class="fa fa-sticky-note"></i> <span>Appoinments</span></a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
