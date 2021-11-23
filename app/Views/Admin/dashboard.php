<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ADMIN
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-user" aria-hidden="true"></i></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pelatih</span>
                        <span class="info-box-number"><?= $jumlah_pelatih; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">UPDATE DATA</span>
                        <span class="info-box-number"><?= $jumlah_lisensi; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Belum Update</span>
                        <span class="info-box-number"><?= $belumupdate; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Belum Lisensi</span>
                        <span class="info-box-number"><?= $belum_lisensi; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-user" aria-hidden="true"></i></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Belum di Register</span>
                        <span class="info-box-number"><?= $belum_regist; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Register</span>
                        <span class="info-box-number"><?= $pelatih_regis; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Belum Update</span>
                        <span class="info-box-number"><?= $belumupdate; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Belum Lisensi</span>
                        <span class="info-box-number"><?= $belum_lisensi; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

    <section class="Content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">DATABASE PELATIH</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="pelatih" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No Register</th>
                            <th>Nama Pelatih</th>
                            <th>NIK</th>
                            <th>Lisensi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getpelatih as $key) { ?>


                        <tr>
                            <td><?php if ($key['noreg'] == "") {

                                        echo '<span class="label label-danger">Belum Diregister</span>';
                                    } else {

                                        echo $key['noreg'];
                                    }
                                    ?></td>
                            <td><?= $key['nama']; ?>
                            </td>
                            <td><?= $key['nik']; ?></td>
                            <td><?= $key['lisensi']; ?></td>
                            <td><img class="img" width="50" src="<?= base_url(); ?>/foto/<?= $key['foto']; ?>"
                                    alt="Foto">
                            </td>
                            <td> <?php if ($key['noreg'] == "") { ?>
                                <a href="<?= base_url('pelatih/noreg/' . $key['id_pelatih']); ?>"
                                    class="btn btn-primary">Registrasi</a>
                                <?php } ?>

                                <span class="label label-success"><?= $key['noreg']; ?></span>


                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                            <th>CSS grade</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>

<?= $this->endSection(); ?>