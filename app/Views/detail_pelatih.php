<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- data judul -->
    </section>

    <!-- Main content -->
    <section class="Content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profile Pelatih</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-blue">
                                <!-- /.widget-user-image -->
                                <h3 class="widget-user-username"><b><?= $pelatih['nama']; ?></b></h3>
                                <h5 class="widget-user-desc"><span
                                        class="badge bg-green"><?= $pelatih['noreg']; ?></span></h5>
                                <h5 class="widget-user-desc"><?= $pelatih['lisensi']; ?></h5>
                            </div>
                            <div class="box-footer no-padding">
                                <ul class="nav nav-stacked">
                                    <li><a href="#">NIK : <span class="pull-right badge bg-blue">31</span></a>
                                    </li>
                                    <li><a href="#">ALAMAT : <span class="pull-right badge bg-aqua">5</span></a></li>
                                    <li><a href="#">Tanggal Lahir <span class="pull-right badge bg-green">12</span></a>
                                    </li>
                                    <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <div class="col-md-4">
                        <div class="widget-user-image">
                            <img class="img" width="250" src="<?= base_url(); ?>/foto/<?= $pelatih['foto']; ?>"
                                alt="User Avatar">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Riwayat Lisensi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="pelatih" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Lisensi</th>
                            <th>Tanggal Lisensi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($lisensi as $key) { ?>
                            <td><?= $key['keterangan']; ?></td>
                            <td><?= $key['tgl_lisensi']; ?></td>
                            <td><a href="<?= base_url(); ?>/lisensi/<?= $key['berkas']; ?>"></a>
                            </td>



                        </tr>


                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Riwayat Melatih</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="pelatih" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Team</th>
                            <th>Kategori</th>
                            <th>Jabatan</th>
                            <th>Tahun</th>
                            <th>Sampai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($keplet as $key) { ?>
                            <td><?= $key['nama_team']; ?></td>
                            <td><?= $key['kategori_team']; ?></td>
                            <td><?= $key['jabatan']; ?></td>
                            <td><?= $key['tahun_awal']; ?></td>
                            <td><?= $key['tahun_akhir']; ?></td>

                        </tr>


                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>