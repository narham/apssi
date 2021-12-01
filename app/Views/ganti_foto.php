<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Ganti Foto</h3>
            </div>
            <div class="box-body">
                <?php if (session()->getFlashdata('error')) {
                    echo '<div class="callout callout-danger">';
                    echo session()->getFlashdata('error');
                    echo '</div>';
                } ?>
                <form method="post" action="<?= base_url('pelatih/foto'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto">foto</label>
                        <input type="file" class="form-control-file" name="foto" id="foto" placeholder="foto"
                            aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <button type="submit" class="btn btn-success"> Upload</button>
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