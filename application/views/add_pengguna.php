<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <?php foreach ($pengguna as $p) : ?>
            <?php endforeach; ?>
            <?php foreach ($user as $u) : ?>
            <?php endforeach; ?>
            <?php $jenis = $this->uri->segment(4); ?>
            <!-- Description -->
            <section id="icon-tabs validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Pengguna</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form method="POST" action="<?php echo base_url() ?>admin/profilesekolah/simpan_pengguna" class="steps-validation wizard-circle">
                                        <!-- Step 1 -->
                                        <h6><i class="step-icon feather icon-user"></i> Step 1</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="operator">Nama</label>
                                                        <input type="text" class="form-control" name="nama" id="operator" placeholder="Nama" required>
                                                        <input type="hidden" name="add_by" value="<?php echo $p->nama; ?>">
                                                        <?php
                                                        $times = date_default_timezone_set('Asia/Jakarta');
                                                        $times = date('Y-m-d H:i:s');
                                                        ?>
                                                        <input type="hidden" name="add_time" value="<?php echo $times; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress11">Nama Sekolah / Instansi</label>
                                                        <input type="text" class="form-control" name="sekolah" id="emailAddress11" placeholder="Nama Sekolah / Instansi" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <?php if ($jenis == "operator_sekolah") { ?>
                                                                    <label for="nama_pengguna">NPSN</label>
                                                                    <input type="text" class="form-control" name="nama_pengguna" id="nama_pengguna" placeholder="NPSN" required>
                                                                <?php } else { ?>
                                                                    <label for="username">Username</label>
                                                                    <input type="text" class="form-control" name="nama_pengguna" id="username" placeholder="Username" required>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="password1">Password</label>
                                                                <input type="password" class="form-control" name="password" id="password1" placeholder="Password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="role">Hak Akses</label>
                                                        <select class="form-control" id="role" name="role_id" required>
                                                            <option value="">Pilih</option>
                                                            <option value="3">Admin</option>
                                                            <option value="2">Operator Sekolah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 2 -->
                                        <h6><i class="step-icon feather icon-phone"></i> Step 2</h6>
                                        <fieldset>
                                            <div class="row">
                                                <?php if ($jenis == "operator_sekolah") { ?>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="koreg">Kode Registrasi</label>
                                                            <input type="text" class="form-control" name="koreg" id="koreg" placeholder="Kode Registrasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="bentuk">Bentuk</label>
                                                            <select class="form-control" id="bentuk" name="bentuk" required>
                                                                <option value="">Pilih</option>
                                                                <option value="SLB">SLB</option>
                                                                <option value="SMA">SMA</option>
                                                                <option value="SMK">SMK</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <select class="form-control" id="status" name="status" required>
                                                                <option value="">Pilih</option>
                                                                <option value="Negeri">Negeri</option>
                                                                <option value="Swasta">Swasta</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="koreg">Nomor Handphone</label>
                                                            <input type="text" class="form-control" name="koreg" id="koreg" placeholder="Nomor Handphone" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="bentuk">Facebook</label>
                                                            <input type="text" class="form-control" name="bentuk" id="bentuk" placeholder="Facebook" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="status">Instagram</label>
                                                            <input type="text" class="form-control" name="status" id="status" placeholder="Instagram" required>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </fieldset>
                                        <!-- Step 3 -->
                                        <h6><i class="step-icon feather icon-map-pin"></i> Step 3</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="desa">Desa/Kelurahan</label>
                                                        <input type="text" class="form-control" name="desa" id="desa" placeholder="Desa/Kelurahan" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="kecamatan">Kecamatan</label>
                                                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="kabupaten">Kabupaten/Kota</label>
                                                        <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten/Kota" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="Provinsi">Provinsi</label>
                                                        <input type="text" class="form-control" name="provinsi" id="Provinsi" placeholder="Provinsi" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="kodepos">Kode Pos</label>
                                                        <input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="Kode Pos" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Description -->
        </div>
    </div>
</div>
<!-- END: Content-->