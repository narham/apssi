<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
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

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $judul; ?></h3>

                <?php if (session()->getFlashdata('error')) {
                    echo '<div class="callout callout-danger">';
                    echo session()->getFlashdata('error');
                    echo '</div>';
                } ?>

            </div>
            <div class="box-body">
                <form action="<?= base_url('pelatih/update'); ?>" method="post">
                    <div class="form-group">
                        <input id="id" type="hidden" name="id" value="<?= $pelatih['id_pelatih']; ?>">
                        <label for="nama">Nama Lengkap</label>
                        <input value="<?= $pelatih['nama']; ?>" type="text" class="form-control" name="nama" id="nama"
                            aria-describedby="helpId" placeholder="Masukkan Nama Lengkap ">
                        <small id="helpId" class="form-text text-muted">Nama Pelatih</small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama Panggilan</label>
                        <input value="<?= $pelatih['nama_panggilan']; ?>" type="text" class="form-control"
                            name="nama_panggilan" id="nama_panggilan" aria-describedby="helpId"
                            placeholder="Masukkan Alamat">
                        <small id="helpId" class="form-text text-muted">Nama Panggilan</small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input value="<?= $pelatih['alamat']; ?>" type="text" class="form-control" name="alamat"
                            id="alamat" aria-describedby="helpId" placeholder="Masukkan Alamat">
                        <small id="helpId" class="form-text text-muted">Alamat</small>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input value="<?= $pelatih['tgl_lahir']; ?>" type="date" class="form-control" name="tgl_lahir"
                            id="tgl_lahir" aria-describedby="helpId" placeholder="Masu">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input value="<?= $pelatih['nik']; ?>" type="text" class="form-control" name="nik" id="nik"
                            aria-describedby="helpId" placeholder="Masukkan NIK">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="lisensi">Lisensi</label>
                        <select id="lisensi" class="form-control" name="lisensi">
                            <option value="">--Pilih--</option>
                            <?php foreach ($lisensi as $c) : ?>
                            <?php if ($c['lisensi'] == $pelatih['lisensi']) { ?>
                            <option value="<?= $c['lisensi'] ?>" selected><?= $c['lisensi'] ?></option>
                            <?php } else { ?>
                            <option value="<?= $c['lisensi'] ?>"><?= $c['lisensi'] ?></option>
                            <?php
                                }
                            endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lisensi">Tanggal Lisesnsi</label>
                        <input value="<?= $pelatih['tgl_lisensi']; ?>" type="date" class="form-control"
                            name="tgl_lisensi" id="tgl_lisensi" aria-describedby="helpId"
                            placeholder="Masukkan Tanggal Lisensi">
                        <small id="helpId" class="form-text text-muted">Tanggal Lisensi</small>
                    </div>
                    <div class="form-group">
                        <label for="notel">No Telpon/WA</label>
                        <input value="<?= $pelatih['notel']; ?>" type="text" class="form-control" name="notel"
                            id="notel" aria-describedby="helpId" placeholder="Masukkan No Telpon / WA">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>

            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>