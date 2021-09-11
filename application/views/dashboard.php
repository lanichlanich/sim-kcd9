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
                    <div class="card bg-gradient-primary">
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
                        <div class="col-md-3 text-center">
                            <img src="<?php echo base_url() ?>app-assets/images/logo/cropped-LOGO9-web.png" alt="Logo Sekolah" class="my-2" width="100%">
                        </div>
                        <div class="col-md-3">
                            <h3 class="mb-1">Info penting</h3>
                            <?php foreach ($informasi as $row) : ?>
                                <?php if ($row->status == 2) { ?>

                                <?php } else { ?>
                                    <div class="alert alert-<?= $row->tema; ?>" role="alert">
                                        <div class="container">
                                            <?= $row->informasi; ?>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <p class="text-secondary font-small-1"><?= $row->add_time; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-6">
                            <h3>Riwayat pengguna</h3>
                            <div class="table-responsive">
                                <table class="table dataTable">
                                    <thead>
                                        <tr class="bg-gradient-primary text-center">
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
        </div>
    </div>
</div>
<!-- END: Content-->