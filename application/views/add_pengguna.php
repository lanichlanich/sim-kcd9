<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <?php foreach ($pengguna as $row) : ?>
            <?php endforeach; ?>

            <!-- Accordion start -->
            <section id="accordion">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Pengguna</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="accordion-default collapse-bordered">
                                            <!-- STAFF KCD -->
                                            <div class="card collapse-header icon-tabs validation">
                                                <div id="heading1" class="card-header collapse-header bg-gradient-primary" data-toggle="collapse" role="button" data-target="#accordion1" aria-expanded="false" aria-controls="accordion1">
                                                    <span class="lead collapse-title">
                                                        Staff KCD
                                                    </span>
                                                </div>
                                                <div id="accordion1" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading1" class="collapse">
                                                    <div class="card-content">
                                                        <div class="card-body border-primary">
                                                            <form method="POST" action="<?php echo base_url() ?>profilesekolah/add_pengguna" class="steps-validation wizard-circle">
                                                                <!-- Step 1 -->
                                                                <h6><i class="step-icon feather icon-user"></i> Step 1</h6>
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="operator">Nama</label>
                                                                                <input type="text" class="form-control" name="nama" id="operator" placeholder="Nama" required>
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
                                                                                        <label for="username">Username</label>
                                                                                        <input type="text" class="form-control" name="password" id="username" placeholder="Username" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="role">Hak Akses</label>
                                                                                        <select class="form-control" id="role" name="role_id" required>
                                                                                            <option value="">Pilih</option>
                                                                                            <option value="1">Admin</option>
                                                                                            <option value="2">Operator Sekolah</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label for="password1">Password</label>
                                                                                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Password" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label for="password2">Retype Password</label>
                                                                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Retype Password" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <!-- Step 2 -->
                                                                <h6><i class="step-icon feather icon-phone"></i> Step 2</h6>
                                                                <fieldset>
                                                                    <div class="row">
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
                                            <!-- OPERATOR SEKOLAH -->
                                            <div class="card collapse-header icon-tabs validation">
                                                <div id="heading2" class="card-header collapse-header bg-gradient-primary" data-toggle="collapse" role="button" data-target="#accordion2" aria-expanded="false" aria-controls="accordion2">
                                                    <span class="lead collapse-title">
                                                        Operator Sekolah
                                                    </span>
                                                </div>
                                                <div id="accordion2" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading2" class="collapse" aria-expanded="false">
                                                    <div class="card-content">
                                                        <div class="card-body border-primary">
                                                            <form method="POST" action="<?php echo base_url() ?>profilesekolah/add_pengguna" class="steps-validation wizard-circle">
                                                                <!-- Step 1 -->
                                                                <h6><i class="step-icon feather icon-user"></i> Step 1</h6>
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label for="operator">Nama</label>
                                                                                <input type="text" class="form-control" name="nama" id="operator" placeholder="Nama" required>
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
                                                                                        <label for="username">Username</label>
                                                                                        <input type="text" class="form-control" name="password" id="username" placeholder="Username" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="role">Hak Akses</label>
                                                                                        <select class="form-control" id="role" name="role_id" required>
                                                                                            <option value="">Pilih</option>
                                                                                            <option value="1">Admin</option>
                                                                                            <option value="2">Operator Sekolah</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label for="password1">Password</label>
                                                                                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Password" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label for="password2">Retype Password</label>
                                                                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Retype Password" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <!-- Step 2 -->
                                                                <h6><i class="step-icon feather icon-phone"></i> Step 2</h6>
                                                                <fieldset>
                                                                    <div class="row">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Accordion end -->
        </div>
    </div>
</div>
<!-- END: Content-->