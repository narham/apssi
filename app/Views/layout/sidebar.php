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
        <!-- <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview">
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

            <?php

            use App\Models\MenuModel;

            $menu = new MenuModel();
            $datamenu = $menu->where('menu', array('main_menu' => 0));
            foreach ($datamenu->get()->getresult() as $main) {
                // Query untuk mencari data sub menu
                $sub_menu = $datamenu->where('menu', array('main_menu' => $main->id_menu));
                // Memeriksa apakah ada sub menu, jika ada sub menu tampilkan
                if ($sub_menu->get()->getnumrows() > 0) {
                    if ($main->id_menu > 0) {
                        // Main menu yang memiliki sub menu
                        echo "<li class='treeview'>";
                        echo  '<span class="pull-right-container">';
                        echo     ' <i class="fa fa-angle-left pull-right"></i>';
                        echo ' </span>';
                        // Menampilkan data sub menu
                        echo "<ul class='treeview-menu'>";
                        foreach ($sub_menu->result() as $sub) {
                            echo "<li>" . anchor($sub->link, '<i class="' . $sub->icon . '"></i>' . $sub->menu) . "</li>";
                        }
                        echo "</ul>
							 </li>";
                    }
                }
                // Jika tidak memiliki sub menu maka tampilkan data main menu
                else {
                    if ($main->id_menu > 0) {
                        // Data main menu tanpa sub menu
                        echo "<li>" . anchor($main->link, '<i class="' . $main->icon . '"></i>' . $main->menu) . "</li>";
                    }
                }
            }

            ?>
        </ul> -->

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MASTER</li>
            <?php
            if (session()->get('akses') == 1) {
                echo "<li>" . anchor("Home", '<i class="fa fa-tachometer"></i>' . "Dashboard") . "</li>";
            } elseif (session()->get('akses') == 2) {
                # code...
                echo "<li>" . anchor("Admin", '<i class="fa fa-tachometer"></i>' . "Dashboard") . "</li>";
            }

            ?>

            <li><a href="<?= base_url('pemutakhiran'); ?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    Pemutakhiran Data</a></li>
            <li class="header">Personal</li>
            <li></li>
            <li class="treeview">
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
            <li class="treeview">
                <a href="">
                    <i class="fa fa-gears"></i> <span>Setting</span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href=""><i class="fa fa-exchange" aria-hidden="true"></i> Ganti Password</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-picture-o" aria-hidden="true"></i> Ganti Foto
                        </a>
                    </li>

                </ul>
            </li>

            <li class="header">LABELS</li>
            <li><a href="<?= base_url('informasi/penting'); ?>"><i class="fa fa-circle-o text-red"></i>
                    <span>Penting</span></a>
            </li>
            <li><a href="<?= base_url('informasi'); ?>"><i class="fa fa-circle-o text-aqua"></i>
                    <span>Informasi</span></a></li>
            <li><a href="<?= base_url('downloadcenter'); ?>"><i class="fa fa-arrow-circle-down"
                        aria-hidden="true"></i><span>Downoad</span></a></li>
            <br>
            <li>
                <a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-arrow-circle-o-left"
                        aria-hidden="true"></i>Keluar</a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>