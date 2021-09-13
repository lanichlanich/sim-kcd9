<?php foreach ($pengguna as $pg) : ?>
<?php endforeach; ?>
<?php foreach ($profile as $pr) : ?>
<?php endforeach; ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <style>
            .rekap:hover {
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);

            }
        </style>
        <div class="content-body">
            <section id="statistics-card">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="card text-center border-info rekap">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                                        <div class="avatar-content">
                                            <i class="feather icon-user-check text-info font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700"><?php echo $guru; ?></h2>
                                    <p class="mb-0 line-ellipsis">Pendidik</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="card text-center border-warning rekap">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                                        <div class="avatar-content">
                                            <i class="feather icon-user-check text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700"><?php echo $tendik; ?></h2>
                                    <p class="mb-0 line-ellipsis">Tenaga Kependidikan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="card text-center border-danger rekap">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                        <div class="avatar-content">
                                            <i class="feather icon-layers text-danger font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700"><?php echo $rombel; ?></h2>
                                    <p class="mb-0 line-ellipsis">Rombel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="card text-center border-primary rekap">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700"><?php echo $siswa; ?></h2>
                                    <p class="mb-0 line-ellipsis">Siswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;"><strong><?php echo $pr->nama_sekolah; ?></strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="<?php echo base_url() ?>app-assets/images/pages/graphic-1.png" alt="" width="70%">
                            </div>
                            <div class="col-lg-8">
                                <div class="table-responsive">
                                    <?php if ($pg->provinsi == $pr->provinsi) { ?>
                                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                                            <tr>
                                                <td>Nama Sekolah</td>
                                                <td>:</td>
                                                <td><?php echo $pr->nama_sekolah; ?></td>
                                            </tr>
                                            <tr>
                                                <td>NPSN</td>
                                                <td>:</td>
                                                <td><?php echo $pr->npsn; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jenjang</td>
                                                <td>:</td>
                                                <td><?php echo $pr->jenjang; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td><?php echo $pr->status; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td><?php echo $pr->alamat; ?></td>
                                            </tr>
                                            <tr>
                                                <td>RT</td>
                                                <td>:</td>
                                                <td><?php echo $pr->rt; ?></td>
                                            </tr>
                                            <tr>
                                                <td>RW</td>
                                                <td>:</td>
                                                <td><?php echo $pr->rw; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kode Pos</td>
                                                <td>:</td>
                                                <td><?php echo $pr->kode_pos; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kelurahan</td>
                                                <td>:</td>
                                                <td><?php echo $pr->kelurahan; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kecamatan</td>
                                                <td>:</td>
                                                <td><?php echo $pr->kecamatan; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kabupaten</td>
                                                <td>:</td>
                                                <td><?php echo $pr->kabupaten; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi</td>
                                                <td>:</td>
                                                <td><?php echo $pr->provinsi; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Negara</td>
                                                <td>:</td>
                                                <td><?php echo $pr->negara; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Lintang</td>
                                                <td>:</td>
                                                <td><?php echo $pr->lintang; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Bujur</td>
                                                <td>:</td>
                                                <td><?php echo $pr->bujur; ?></td>
                                            </tr>
                                        </table>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->