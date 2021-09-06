    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="description">
                    <style>
                        .rekap {
                            font-size: 60px;
                            text-align: right;
                            color: white;
                        }

                        @media only screen and (max-width: 600px) {
                            .rekap {
                                font-size: 30px;
                            }
                        }
                    </style>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="<?php echo base_url() ?>app-assets/images/banner/banner-1.jpg" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-danger overlay-lighten-2">
                                        <h4 class="card-title text-white">PENDIDIK</h4>
                                        <strong>
                                            <div class="rekap">56</div>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="<?php echo base_url() ?>app-assets/images/banner/banner-1.jpg" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-success">
                                        <h4 class="card-title text-white">TENAGA KEPENDIDIKAN</h4>
                                        <strong>
                                            <div class="rekap">26</div>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="<?php echo base_url() ?>app-assets/images/banner/banner-1.jpg" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-warning">
                                        <h4 class="card-title text-white">SISWA</h4>
                                        <strong>
                                            <div class="rekap">1256</div>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="<?php echo base_url() ?>app-assets/images/banner/banner-1.jpg" alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-info">
                                        <h4 class="card-title text-white">ROMBEL</h4>
                                        <strong>
                                            <div class="rekap">36</div>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="description" class="card">
                    <?php $rows = $this->db->query("SELECT * FROM pengguna where nama_pengguna = '" . $this->session->nama_pengguna . "'")->row_array(); ?>
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