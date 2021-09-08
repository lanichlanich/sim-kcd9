<?php $rows = $this->db->query("SELECT * FROM pengguna where nama_pengguna = '" . $this->session->nama_pengguna . "'")->row_array(); ?>
<?php
if ($rows['update_time'] == 'DIDI RASIDI') {
    redirect('profilesekolah/edit_profile');
}
?>
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
                                    <h2 class="text-bold-700">56</h2>
                                    <p class="mb-0 line-ellipsis">Jumlah Pendidik</p>
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
                                    <h2 class="text-bold-700">16</h2>
                                    <p class="mb-0 line-ellipsis">Jumlah Tenaga Kependidikan</p>
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
                                    <h2 class="text-bold-700">36</h2>
                                    <p class="mb-0 line-ellipsis">Jumlah Rombel</p>
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
                                    <h2 class="text-bold-700">1256</h2>
                                    <p class="mb-0 line-ellipsis">Jumlah Siswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;"><strong><?php echo $rows['sekolah'] ?></strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="<?php echo base_url() ?>app-assets/images/pages/graphic-1.png" alt="" width="70%">
                            </div>
                            <div class="col-lg-8">
                                <div class="table-responsive">
                                    <table class="table table-hover display nowrap mb-0" id="sekolah">
                                        <tr>
                                            <td>NPSN</td>
                                            <td>:</td>
                                            <td><strong><?php echo $rows['nama_pengguna'] ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Operator</td>
                                            <td>:</td>
                                            <td><?php echo $rows['nama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sekolah </td>
                                            <td>:</td>
                                            <td><?php echo $rows['sekolah'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bentuk </td>
                                            <td>:</td>
                                            <td><?php echo $rows['bentuk'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status </td>
                                            <td>:</td>
                                            <td><?php echo $rows['status'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat </td>
                                            <td>:</td>
                                            <td><?php echo $rows['alamat'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Desa </td>
                                            <td>:</td>
                                            <td><?php echo $rows['desa'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan </td>
                                            <td>:</td>
                                            <td><?php echo $rows['kecamatan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kabupaten </td>
                                            <td>:</td>
                                            <td><?php echo $rows['kabupaten'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi </td>
                                            <td>:</td>
                                            <td><?php echo $rows['provinsi'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Description -->
            <!-- <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Sekolah</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row" id="table-hover-row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="table-responsive">
                                                <table class="table table-hover display nowrap mb-0" id="sekolah">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Sekolah</th>
                                                            <th>Alamat</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($sekolah as $s) : ?>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"><?php echo $s['nama']; ?></td>
                                                                <td><?php echo $s['alamat'] ?></td>
                                                                <td class="btn-group">
                                                                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="feather icon-eye"> </i></button>
                                                                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather icon-edit"> </i></button>
                                                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather icon-trash"> </i></button>
                                                                </td>
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
                </section> -->
            <!--/ Description -->
        </div>
    </div>
</div>
<!-- END: Content-->