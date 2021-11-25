<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Menu</h3>

                <?php if (session()->getFlashdata('error')) {
                    echo '<div class="callout callout-danger">';
                    echo session()->getFlashdata('error');
                    echo '</div>';
                } ?>


            </div>
            <div class="box-body">
                <form action="<?= base_url('menu/simpan'); ?>" method="post">
                    <div class="form-group">
                        <label for="menu">Nama Menu</label>
                        <input type="text" class="form-control" name="menu" id="menu" aria-describedby="helpId"
                            placeholder="Nama Menu">
                    </div>
                    <div class="form-group">
                        <label for="link">Link / Controller</label>
                        <input type="text" class="form-control" name="link" id="link" aria-describedby="helpId"
                            placeholder="link">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" name="icon" id="icon" aria-describedby="helpId"
                            placeholder="Icon">
                    </div>
                    <div class="form-group">
                        <label for="menu_utama">Menu Utama</label>
                        <input type="text" class="form-control" name="menu_utama" id="menu_utama"
                            aria-describedby="helpId" placeholder="Menu Utama">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="akses">Akses user</label>
                        <select id="akses" class="form-control" name="akses">
                            <option>Pilih Akses</option>
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select>
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