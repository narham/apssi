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
                <h3 class="box-title">Database Kepelatihan</h3>

                <div class="box-tools pull-right">

                </div>
            </div>
            <div class="box-body">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">BIODATA</a></li>
                        <li><a href="#tab_2" data-toggle="tab">LISENSI</a></li>
                        <li><a href="#tab_3" data-toggle="tab">DATA KEPELATIHAN</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <b>BIODATA :</b>
                            <br>
                            <br>
                            <div>
                                <dl class="dl-horizontal">
                                    <dt>No. Registrasi :</dt>
                                    <dd> <?php if ($pelatih['noreg'] == "") {
                                                echo '<span class="label label-danger">Status Masih Dalam Verifikasi</span>';
                                            } else {
                                                echo '<span class="label label-success">';
                                                echo $pelatih['noreg'];
                                                echo '</span>';
                                            } ?></dd>
                                    <dt>Nama Lengkap :</dt>
                                    <dd><?= $pelatih['nama']; ?></dd>
                                    <dt>N. I. K. :</dt>
                                    <dd><?= $pelatih['nik']; ?></dd>
                                    <dt>Nama Panggilan :</dt>
                                    <dd><?= $pelatih['nama_panggilan']; ?></dd>
                                    <dt>No Telpon :</dt>
                                    <dd><?= $pelatih['notel']; ?></dd>
                                    <dt>Lisensi Sekarang :</dt>
                                    <dd><?= $pelatih['lisensi']; ?></dd>

                                </dl>
                            </div>
                            <div>
                                <img src="<?= base_url(); ?>/foto/<?= $pelatih['foto']; ?>" alt="" width="150">

                            </div>
                            <br>

                            <a href="<?= base_url('pelatih/gantifoto'); ?>" class="btn btn-primary"> Ganti Foto</a>

                        </div>
                        <!-- /.tab-pane -->
                        <div>

                        </div>
                        <div class="tab-pane" id="tab_2">
                            <div>
                                <table class="table table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Lisensi</th>
                                            <th>Tanggal Lisensi</th>
                                            <th>Foto Lisensi</th>

                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no  = 1;
                                        foreach ($lisensi as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['keterangan']; ?></td>
                                            <td><?= $row['tgl_lisensi']; ?></td>
                                            <td><img width="150px" class="img-thumbnail"
                                                    src="<?= base_url(); ?>/lisensi/<?= $row['berkas']; ?>"></td>

                                            <td>
                                                <a href="<?= base_url('pemutakhiran/hapus_lisensi/' . $row['id_berkas']); ?>"
                                                    class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i> Hapus</a>
                                            </td>

                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <a href="<?= base_url('pemutakhiran/uploadlisensi'); ?>" class="btn btn-primary"> Upload
                                Lisensi</a>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">

                            <div>
                                <table class="table table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Team / Club</th>
                                            <th>Kategory</th>
                                            <th>Tahun Awal</th>
                                            <th>Tahun Akhir</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no  = 1;
                                        foreach ($keplet as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['nama_team']; ?></td>
                                            <td><?= $row['kategori_team']; ?></td>
                                            <td><?= $row['tahun_awal']; ?></td>
                                            <td><?= $row['tahun_akhir']; ?></td>
                                            <td><?= $row['jabatan']; ?></td>
                                            <td>
                                                <a href="<?= base_url('pemutakhiran/hapuskeplet/' . $row['id_data_kepelatihan']); ?>"
                                                    class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>

                                </table>
                            </div>
                            <a href="<?= base_url('pemutakhiran/dataKeplet'); ?>" class="btn btn-primary"><i
                                    class="fa fa-plus-circle" aria-hidden="true"></i> Data
                                Kepelatihan</a>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
            <!-- /.box-body -->

        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>