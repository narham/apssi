<?= $this->extend('layout/index'); ?>
<?= $this->section('page'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            SELAMAT DATANG <?= session()->get('nama'); ?>
            <small>APSSI SULSEL</small> <br>
            <br>
            <?php if ($pelatih['noreg'] == "") {
                echo '<span class="label label-danger">Status Masih Dalam Verifikasi</span>';
            } else {
                echo '<span class="label label-success">';
                echo "No. Registrasi :  ";
                echo $pelatih['noreg'];
                echo '</span>';
            } ?>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        if (empty($pelatih['nama'])) { ?>
        <div class="box">
            <div class="box-body">
                <h3>Pemutakhiran Data Pelatih</h3>
                <h4>Silahkan lakukan pemutahiran data agar Sistem ini Bisa digunakan</h4>
                <a href="<?= base_url('pelatih/edit/' . $pelatih['id_pelatih']); ?>" class="btn btn-primary">Lengkapi
                    Data</a>
            </div>
        </div>
        <?php  }

        ?>

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                            src="<?= base_url(); ?>/foto/<?= $pelatih['foto']; ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?= $pelatih['nama']; ?></h3>

                        <p class="text-muted text-center"><?= $pelatih['lisensi']; ?></p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tentang Saya</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i>Riwayat Melatih</strong>
                        <p>
                            <?php foreach ($keplet as $kep) { ?>

                            <span class="label label-success"><?= $kep['nama_team']; ?> (
                                <?= $kep['tahun_akhir']; ?>)</span>
                            <?php  } ?>
                        </p>


                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i>Alamat</strong>

                        <p class="text-muted"><?= $pelatih['alamat']; ?></p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Riwayat Lisensi</strong>

                        <p>
                            <?php foreach ($lisensi as $key) { ?>

                            <span class="label label-success"><?= $key['keterangan']; ?> (<?= $key['tgl_lisensi']; ?>)
                            </span>
                            <?php  } ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab"><b>APSSI SUL-SEL</b></a></li>
                        <li><a href="#timeline" data-toggle="tab">Riwayat Melatih</a></li>
                        <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!--  Struktur Organisasi -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><b>STRUKTUR ORGANISASI APSSI SULAWESI SELATAN</b>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="box-body">
                                        <div class="box-group" id="accordion">
                                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                            <div class="panel box box-primary">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#exco">
                                                            EXECUTIVE COMITTE
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="exco" class="panel-collapse collapse in">
                                                    <div class="box-body">
                                                        <ul>
                                                            <li>YEYEN TUMENA</li>
                                                            <li>MUNDARI KARYA</li>
                                                            <li>SYAMSUDDIN UMAR</li>
                                                        </ul>

                                                        <div>
                                                            <dl class="dl-horizontal">
                                                                <dt>Fungsi Jabatan :</dt>
                                                                <dd>Pemegang keputusan tertinggi dalam menerapkan
                                                                    kebijakan strategis
                                                                    organisasi .</dd>
                                                                <dt>Wewenang :</dt>
                                                                <dd>
                                                                    <ul>
                                                                        <li>1. Mengangkat dan memberhentikan dewan
                                                                            direksi melalui Kongres
                                                                        </li>
                                                                        <li>2. Menyusun visi dan misi sebagai arah
                                                                            kebijakan organisasi
                                                                            melalui Kongres </li>
                                                                        <li>3. Mengawasi dan menilai kinerja Board of
                                                                            Director </li>
                                                                    </ul>
                                                                </dd>
                                                                <dt>Tugas dan :</dt>
                                                                <dt>Tanggung Jawab </dt>
                                                                <dd>
                                                                    <ul>
                                                                        <li>1. Mengarahkan Board of Director dalam
                                                                            implementasi kebijakan
                                                                            strategis yang telah
                                                                            disepakati dalam Kongres ;</li>
                                                                        <li>2. Membina hubungan yang baik dengan para
                                                                            stakeholder ;</li>
                                                                        <li>3. Mengawal implementasi ketatakelolaan
                                                                            organisasi yang baik dan
                                                                            handal ;</li>
                                                                        <li>4. Menjaga hubungan baik dengan para penentu
                                                                            kebijakan
                                                                            sponsorship</li>
                                                                    </ul>
                                                                </dd>

                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box box-danger">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#ketua">
                                                            KETUA UMUM
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="ketua" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <b>MARWAL ISKANDAR</b>
                                                    </div>

                                                    <div>

                                                        <dl class="dl-horizontal">
                                                            <dt>Fungsi Jabatan :</dt>
                                                            <dd>Memimpin organisasi dalam meng-implementasikan Visi dan
                                                                Misi organisasi (
                                                                Stake Holder ) kedalam
                                                                Sasaran . Strategi dan Program kerja & Anggaran
                                                                Organisasi .</dd>
                                                            <dt>Wewenang :</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1.Mengesahkan Peraturan Organisasi dan Struktur
                                                                        Organisasi serta Job
                                                                        Description ;
                                                                    </li>
                                                                    <li>2. Mengesahkan Program kerja dan Anggaran
                                                                        Organisasi </li>
                                                                    <li>3. Mengesahkan Regulasi Organisasi</li>
                                                                    <li>4. Mengesahkan Sistem Manajamen Organisasi ;
                                                                    </li>
                                                                    <li>5. Mengesahkan Pengeluaran keuangan :</li>
                                                                    <li>6. Mengesahkan Surat Keputusan ;</li>
                                                                    <li>7. Mengesahkan Surat Keluar yang ditujukan
                                                                        kepada pihak ke 3 ;</li>
                                                                    <li>8. Memberikan Penghargaan dan sanksi kepada
                                                                        karyawan ;</li>
                                                                    <li>9. Mengangkat dan atau memberhentikan karyawan
                                                                    </li>
                                                                </ul>
                                                            </dd>
                                                            <dt>Tugas dan :</dt>
                                                            <dt>Tanggung Jawab </dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. Melaporkan Seluruh program dan anggaran
                                                                        Organisasi pada Kongres
                                                                        Tahunan ;</li>
                                                                    <li>2. Memberikan kesejahteraan yang layak bagi
                                                                        seluruh karyawan ; </li>
                                                                    <li>3. Meningkatkan Produktivitas karyawan ./li>

                                                                </ul>
                                                            </dd>

                                                        </dl>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box box-danger">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#sekretaris">
                                                            SEKRETARIS
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="sekretaris" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <b>NARHAM</b>
                                                    </div>
                                                    <div>

                                                        <dl class="dl-horizontal">
                                                            <dt>Fungsi Jabatan :</dt>
                                                            <dd>Membantu Ketua Umum sebagai Pelaksana Harian memimpin
                                                                organisasi dalam
                                                                meng-implementasikan
                                                                Visi dan Misi Organisasi ( Stake Holder ) kedalam
                                                                Sasaran . Strategi dan
                                                                Program kerja & Anggaran
                                                                Perusahaan .</dd>
                                                            <dt>Wewenang :</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1.Menyetujui Peraturan Organisasi dan Struktur
                                                                        Organisasi serta Job
                                                                        Description ;
                                                                    </li>
                                                                    <li>2. Menyetujui Program kerja dan Anggaran
                                                                        Organisasi </li>
                                                                    <li>3. Menyetujui AD/ART Organisasi</li>
                                                                    <li>4. Menyetujui Sistem Manajamen Organisasi ;</li>
                                                                    <li>5. Menyetujui Jadwal Kompetisi ;</li>
                                                                    <li>6. Menyetujui pengesahan dan Pengeluaran
                                                                        keuangan :</li>
                                                                    <li>7. Menyetujui pengesahan Surat Keputusan ;</li>
                                                                    <li>8. Mewakili dan atau Mengesahkan Surat Keluar
                                                                        yang ditujukan kepada
                                                                        pihak ke 3 ;</li>
                                                                    <li>9. Memberikan Penghargaan dan sanksi kepada
                                                                        karyawan ;</li>
                                                                    <li>10. Merekomendasikan pengangkatan dan atau
                                                                        pemberhentian karyawan
                                                                    </li>
                                                                </ul>
                                                            </dd>
                                                            <dt>Tugas dan :</dt>
                                                            <dt>Tanggung Jawab </dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. Menyusun laporan seluruh implementasi program
                                                                        dan anggaran
                                                                        organisasi sebagai pertanggungjawaban pada
                                                                        Kongres Tahunan;</li>
                                                                    <li>2. Meng-akomodir pemenuhan prinsip – prinsip
                                                                        kesejahteraan yang
                                                                        layak
                                                                        bagi seluruh karyawan ; </li>
                                                                    <li>3. Menyusun strategi peningkatan Produktivitas
                                                                        kerja karyawan .</li>

                                                                </ul>
                                                            </dd>

                                                        </dl>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box box-success">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#football">
                                                            DIREKTUR FOOTBALL
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="football" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <dl class="dl-horizontal">
                                                            <dt>DIREKTUR FOOTBALL :</dt>
                                                            <dd>TONY HO</dd>
                                                            <dt>MANAGER TEHNIK :</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. ANDI RIDWAN S.Pd., M.Pd</li>
                                                                    <li>2. ILHAM ZULKARNAIN</li>
                                                                    <li>3. MUH. AKMAL ALMY, M. Or</li>
                                                                </ul>
                                                            </dd>

                                                            <dt>MANAGER LEGAL :</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. HASRUL KAHARUDDIN, S.H., M.H</li>
                                                                    <li>2. HERMAWAN RAHIM, S.H., M.H</li>
                                                                    <li>3. M. EFENDI</li>
                                                                </ul>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box box-success">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#event">
                                                            DIREKTUR EVENT
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="event" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <dl class="dl-horizontal">
                                                            <dt>DIREKTUR EVENT :</dt>
                                                            <dd>ERWIN ZAINUDDIN</dd>
                                                            <dt>MANAGER LOC :</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. BACHTIAR</li>
                                                                    <li>2. IRFAN AFANDI S. Pd</li>
                                                                </ul>
                                                            </dd>

                                                            <dt>MANAGER</dt>
                                                            <dt>BOARD & LOGGIN</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. ABDUL KARIM K, S. T</li>
                                                                    <li>2. RIFAI ARSYAD</li>
                                                                </ul>
                                                            </dd>

                                                            <dt>MANAGER</dt>
                                                            <dt>INFRASTRUKTUR</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. MUH. SYAHRUL</li>

                                                                </ul>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box box-success">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#bisnis">
                                                            DIREKTUR BUSINESS
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="bisnis" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <dl class="dl-horizontal">
                                                            <dt>DIREKTUR BUSINESS :</dt>
                                                            <dd>ROY ADVENT RICAHRDO</dd>
                                                            <dt>MANAGER</dt>
                                                            <dt>DEVELOPMENT :</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. M. ADAM MAPPAOMPO, S. Pd., M.Pd</li>
                                                                    <li>2. ARI HIDAYAT, S. E., M. M</li>
                                                                </ul>
                                                            </dd>

                                                            <dt>MANAGER</dt>
                                                            <dt>PUBLIC AND RELATION</dt>
                                                            <dd>
                                                                <ul>
                                                                    <li>1. ARSON, S. T</li>
                                                                    <li>2. ASWAN ASRI </li>
                                                                </ul>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>




                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            <ul class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <?php
                                foreach ($keplet as $kep) { ?>


                                <li class="time-label">
                                    <span class="bg-red">
                                        <?= $kep['tahun_awal']; ?> - <?= $kep['tahun_akhir']; ?>
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-folder-open bg-blue"></i>

                                    <div class="timeline-item">


                                        <h3 class="timeline-header"><a href="#"><?= $kep['nama_team']; ?></a></h3>

                                        <div class="timeline-body">
                                            <table class="table table-light">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Kategori</th>
                                                        <th>Jabatan</th>
                                                        <th>Tahun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#</td>
                                                        <td><?= $kep['kategori_team']; ?></td>
                                                        <td><?= $kep['jabatan']; ?></td>
                                                        <td><?= $kep['tahun_akhir']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience"
                                            placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms and
                                                    conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>



    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>