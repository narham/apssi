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
                <h3 class="box-title"><?= $judul; ?></h3>
            </div>
            <div class="box-body">
                <?php if (session()->getFlashdata('error')) {
                    echo '<div class="callout callout-danger">';
                    echo session()->getFlashdata('error');
                    echo '</div>';
                } ?>
                <form method="post" action="<?= base_url('pemutakhiran/lisensi'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="keterangan">Lisensi</label>
                        <input id="id" type="hidden" name="id" value="<?= session()->get('id'); ?>">
                        <select class="form-control" name="keterangan" id="keterangan">
                            <option value="">--Pilih--</option>
                            <?php foreach ($lisensi as $c) : ?>
                            <option value="<?= $c['lisensi']; ?>"><?= $c['lisensi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lisensi">Tanggal Lisensi</label>
                        <input type="date" class="form-control" name="tgl_lisensi" id="tgl_lisensi"
                            aria-describedby="helpId" placeholder="Tanggal Lisensi">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="lisensi">Lisensi</label>
                        <input type="file" class="form-control-file" name="lisensi" id="lisensi" placeholder="Lisensi"
                            aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <button type="submit" class="btn btn-success"> Upload</button>
                </form>
            </div>
            <!-- /.box-body -->

        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>