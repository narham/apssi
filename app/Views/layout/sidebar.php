<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url(); ?>/foto/<?= session()->get('foto'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">


                <p><?= session()->get('panggilan'); ?></p>


            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MASTER</li>
            <li><a href="<?= base_url('home'); ?>"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a href="<?= base_url('pemutakhiran'); ?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    Pemutakhiran Data</a></li>
            <li class="header">Personal</li>
            <li></li>
            <li class="treeview active">
                <a href="">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="">Kotak Masuk
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">13</span>
                            </span>
                        </a>
                    </li>
                    <li class="active"><a href="">Tulis Email</a></li>
                    <li><a href="">Baca Email</a></li>
                </ul>
            </li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Penting</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Peringatan</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Informasi</span></a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><span>Downoad</span></a></li>
            <br>
            <li>
                <a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-arrow-circle-o-left"
                        aria-hidden="true"></i>Keluar</a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>