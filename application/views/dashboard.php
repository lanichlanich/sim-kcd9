<?php foreach ($pengguna as $row) : ?>
<?php endforeach; ?>
<?php
if ($row->nama == $row->sekolah) {
    redirect('profilesekolah/edit_profile');
} else {
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
                    <div class="card">
                        <div class="card-body">
                            <h2><strong>Selamat datang <?php echo $row->sekolah; ?></strong></h2>
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
                        <div class="col-md-2 text-center">
                            <img src="<?php echo base_url() ?>app-assets/images/logo/cropped-LOGO9-web.png" alt="Logo Sekolah" class="my-2" width="100%">
                        </div>
                        <div class="col-md-4">
                            <h3 class="mb-1">Info penting</h3>
                            <div class="alert alert-danger" role="alert">
                                <div class="container">
                                    Untuk keamanan data silahkan ganti password.
                                </div>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                <div class="container">
                                    Panduan upload data <a href="#"><i class="fa fa-download"></i> Download</a>
                                </div>
                            </div>
                            <div class="alert alert-info" role="alert">
                                <div class="container">
                                    Proses upload data dilakukan paling lambat 21 September 2021 pukul 23:59:59 WIB
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Riwayat pengguna</h3>
                            <div class="table-responsive">
                                <table class="table dataTable">
                                    <thead>
                                        <tr>
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
                                            <tr>
                                                <td><?php echo $r->status; ?></td>
                                                <td><?php echo $r->waktu; ?></td>
                                                <td><?php echo $r->nama; ?></td>
                                                <td><?php echo $r->ipaddress; ?></td>
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
        </div>
    </div>
</div>
<!-- END: Content-->