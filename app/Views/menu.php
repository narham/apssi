<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <?php if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
        </button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>

    </section>


    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabel Menu</h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('menu/add'); ?>" class="btn btn-success"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i> Tambah
                        Menu</a>
                </div>
            </div>
            <div class="box-body">
                <section>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID MENU</th>
                                                <th>Nama Menu</th>
                                                <th>Link</th>
                                                <th>Icon</th>
                                                <th>Main Menu</th>
                                                <th>Akses</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($menu as $key) { ?>
                                            <tr>
                                                <td><?= $key['id_menu']; ?></td>
                                                <td><?= $key['menu']; ?></td>
                                                <td><?= $key['link']; ?></td>
                                                <td><?= $key['icon']; ?></td>
                                                <td><?= $key['main_menu']; ?></td>
                                                <td><?php
                                                        if ($key['akses'] == 1) {
                                                            echo "User";
                                                        } else {
                                                            echo "Admin";
                                                        }
                                                        ?>
                                                <td>
                                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"
                                                            aria-hidden="true"></i>Hapus</a>
                                                    <a href="" class="btn btn-primary"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i>Edit</a>
                                                </td>



                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </section>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>