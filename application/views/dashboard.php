<?php foreach ($pengguna as $row) : ?>
<?php endforeach; ?>
<?php
if ($row->role_id == '1') {
    if ($row->nama == $row->sekolah) {
        redirect('admin/profilesekolah/edit_profile');
    }
} else {
    if ($row->nama == $row->sekolah) {
        redirect('profilesekolah/edit_profile');
    }
}
?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-gradient-success">
                        <div class="card-body">
                            <h2 style="color: white;"><strong>Selamat datang <?php echo $row->nama; ?></strong></h2>
                            <p>
                                SIM KCD-IX merupakan sistem manajemen data pendidikan berbasis dapodik sekolah khusus lingkungan Kantor Cabang Dinas Pendidikan Wilayah IX, Dinas Pendidikan Provinsi Jawa Barat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-md-3 text-center">
                            <img src="<?php echo base_url() ?>app-assets/images/logo/cropped-LOGO9-web.png" alt="Logo Sekolah" class="my-2" width="100%">
                        </div> -->
                        <div class="col-md-4">
                            <h3 class="mb-1">Info penting</h3>
                            <?php foreach ($informasi as $row) : ?>
                                <?php if ($row->status == 2) { ?>

                                <?php } else { ?>
                                    <div class="alert alert-<?= $row->tema; ?>" role="alert">
                                        <div class="container">
                                            <h4 class="alert-heading text-center"><?= $row->kategori ?></h4>
                                            <?= $row->informasi; ?>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <p class="font-small-1"><?= $row->add_by; ?></p>
                                                <p class="font-small-1">#</p>
                                                <p class="font-small-1"><?= $row->add_time; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-8">
                            <h3>Riwayat pengguna</h3>
                            <div class="table-responsive">
                                <table class="table dataTable">
                                    <thead>
                                        <tr class="bg-gradient-success text-center">
                                            <th>Status</th>
                                            <th>Waktu</th>
                                            <th>Nama</th>
                                            <th>IP Address</th>
                                            <th>Browser</th>
                                            <th>OS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($riwayat as $r) : ?>
                                            <tr class="font-small-1">
                                                <td><?php echo $r->status; ?></td>
                                                <td class="text-center"><?php echo $r->waktu; ?></td>
                                                <td><?php echo $r->nama; ?></td>
                                                <td class="text-center"><?php echo $r->ipaddress; ?></td>
                                                <td><?php echo $r->browser; ?></td>
                                                <td><?php echo $r->os; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($pengguna as $pg) : ?>
                        <?php endforeach; ?>
                        <div class="col-md-12">
                            <?php if ($pg->status == "Negeri" || $pg->status == "Swasta") { ?>
                                <h3>Progres upload data</h3>
                                <div class="table-responsive">
                                    <table class="table dataTable">
                                        <thead>
                                            <tr class="bg-gradient-success text-center">
                                                <th>#</th>
                                                <th>Data Profile</th>
                                                <th>Data Siswa</th>
                                                <th>Data Rombel</th>
                                                <th>Data Guru</th>
                                                <th>Data Tendik</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>Status</td>
                                                <td>
                                                    <?php if ($rombel == 0) {
                                                        echo "<i class='fa fa-times text-danger'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-check text-success'></i>";
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php if ($siswa == 0) {
                                                        echo "<i class='fa fa-times text-danger'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-check text-success'></i>";
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php if ($rombel == 0) {
                                                        echo "<i class='fa fa-times text-danger'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-check text-success'></i>";
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php if ($guru == 0) {
                                                        echo "<i class='fa fa-times text-danger'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-check text-success'></i>";
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php if ($tendik == 0) {
                                                        echo "<i class='fa fa-times text-danger'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-check text-success'></i>";
                                                    } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <h3>Rekap sekolah yang selesai upload</h3>
                                <div class="table-responsive">
                                    <table class="table nowrap" id="sekolah">
                                        <thead>
                                            <tr class="bg-gradient-info">
                                                <th>Nama Sekolah</th>
                                                <th class="text-center">Data Profile</th>
                                                <th class="text-center">Data Siswa</th>
                                                <th class="text-center">Data Rombel</th>
                                                <th class="text-center">Data Guru</th>
                                                <th class="text-center">Data Tendik</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($sekolah_admin as $pa) : ?>
                                                <tr>
                                                    <td><?php echo $pa->nama_sekolah; ?></td>
                                                    <td class="text-center">
                                                        <?php if ($pa->jenjang == 'jenjang') {
                                                            echo "<i class='fa fa-times text-danger'></i>";
                                                        } else {
                                                            echo "<i class='fa fa-check text-success'></i>";
                                                        } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        $siswa = $this->db->query("SELECT * FROM daftar_pd WHERE npsn = '$pa->npsn'")->num_rows();
                                                        if ($siswa <= 0) {
                                                            echo "<i class='fa fa-times text-danger'></i>";
                                                        } else {
                                                            echo "<i class='fa fa-check text-success'></i>";
                                                        } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        $siswa = $this->db->query("SELECT * FROM daftar_rombel WHERE npsn = '$pa->npsn'")->num_rows();
                                                        if ($siswa <= 0) {
                                                            echo "<i class='fa fa-times text-danger'></i>";
                                                        } else {
                                                            echo "<i class='fa fa-check text-success'></i>";
                                                        } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        $siswa = $this->db->query("SELECT * FROM daftar_guru WHERE npsn = '$pa->npsn'")->num_rows();
                                                        if ($siswa <= 0) {
                                                            echo "<i class='fa fa-times text-danger'></i>";
                                                        } else {
                                                            echo "<i class='fa fa-check text-success'></i>";
                                                        } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        $siswa = $this->db->query("SELECT * FROM daftar_tendik WHERE npsn = '$pa->npsn'")->num_rows();
                                                        if ($siswa <= 0) {
                                                            echo "<i class='fa fa-times text-danger'></i>";
                                                        } else {
                                                            echo "<i class='fa fa-check text-success'></i>";
                                                        } ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->