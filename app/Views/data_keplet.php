<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Kepelatihan</h3>

                <?php if (session()->getFlashdata('error')) {
                    echo '<div class="callout callout-danger">';
                    echo session()->getFlashdata('error');
                    echo '</div>';
                } ?>

            </div>
            <div class="box-body">

                <form action="<?= base_url('pemutakhiran/kepelatihan'); ?>" method="post">

                    <div class="form-group">
                        <input id="id_pelatih" type="hidden" name="id_pelatih" value="<?= session()->get('id'); ?>">
                        <label for="nama_team">Team / Club</label>
                        <input type="text" class="form-control" name="nama_team" id="nama_team"
                            aria-describedby="helpId" placeholder="Team / Club">
                    </div>
                    <div class="form-group">
                        <label for="team">Kategor Team</label>
                        <select id="team" class="form-control" name="team">
                            <option>-- Pilih Kategori --</option>
                            <?php foreach ($kategori as $c) : ?>
                            <option value="<?= $c['kategori_team'] ?>" selected><?= $c['kategori_team'] ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun_awal">Tahun Awal</label>
                        <input type="text" class="form-control" name="tahun_awal" id="tahun_awal"
                            aria-describedby="helpId" placeholder="1999">

                    </div>
                    <div class="form-group">
                        <label for="tahun_akhir">Tahun Akhir</label>
                        <input type="text" class="form-control" name="tahun_akhir" id="tahun_akhir"
                            aria-describedby="helpId" placeholder="1999">

                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select id="jabatan" class="form-control" name="jabatan">
                            <option>--Pilih jabatan--</option>
                            <option value="Head Coach">Head Coach</option>
                            <option value="Ass Coach">Ass Coach</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>