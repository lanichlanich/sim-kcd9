<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Data User     -->
            <?php foreach ($user as $u) : ?>
            <?php endforeach; ?>
            <!-- Data Admin -->
            <?php foreach ($pengguna as $p) : ?>
            <?php endforeach; ?>

            <!-- Description -->
            <section id="icon-tabs validation">
                <div class="row">
                    <div class="col-12">
                        <?php if ($u->nama == $u->sekolah) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <p class="mb-0">
                                    Untuk keamanan data silahkan lakukan ubah <strong>nama operator sekolah</strong> dan <strong>password</strong>!
                                </p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                                </button>
                            </div>
                        <?php } else { ?>

                        <?php } ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Pengguna</h4>
                            </div>
                            <?php
                            $times = date_default_timezone_set('Asia/Jakarta');
                            $times = date('Y-m-d H:i:s');
                            ?>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- <p>Add <code>.icons-tab-steps</code> class to get desired icons in tab.</p> -->
                                    <form method="POST" action="<?php echo base_url() ?>admin/profilesekolah/update_pengguna" class="steps-validation wizard-circle">

                                        <!-- Step 1 -->
                                        <h6><i class="step-icon feather icon-user"></i> Step 1</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="operator">Nama Operator Sekolah</label>
                                                        <?php if ($u->nama == $u->sekolah) { ?>
                                                            <input type="text" class="form-control" name="nama" id="operator" placeholder="Nama Operator Sekolah" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" name="nama" id="operator" value="<?php echo $u->nama; ?>" required>
                                                        <?php } ?>
                                                        <input type="hidden" name="id" value="<?php echo $u->id; ?>">
                                                        <input type="hidden" name="nama_pengguna" value="<?php echo $u->nama_pengguna; ?>">
                                                        <input type="hidden" name="role_id" value="<?php echo $u->role_id; ?>">
                                                        <input type="hidden" name="koreg" value="<?php echo $u->koreg; ?>">
                                                        <input type="hidden" name="bentuk" value="<?php echo $u->bentuk; ?>">
                                                        <input type="hidden" name="status" value="<?php echo $u->status; ?>">
                                                        <input type="hidden" name="add_by" value="<?php echo $p->add_by; ?>">
                                                        <input type="hidden" name="add_time" value="2021-09-01 07:00:00">
                                                        <input type="hidden" name="update_time" value="<?php echo $times; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress11">Nama Sekolah</label>
                                                        <input type="text" class="form-control" name="sekolah" id="emailAddress11" value="<?php echo $u->sekolah; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="password1">Password</label>
                                                        <input type="password" class="form-control" name="password" id="password1" placeholder="Password" required>
                                                    </div>
                                                </div>

                                                <?php if ($p->role_id == 1 || $p->role_id == 3) { ?>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="role">Hak Akses</label>
                                                            <select class="form-control" id="role" name="role_id">
                                                                <option value="<?php echo $u->role_id; ?>">Pilih</option>
                                                                <option value="1">Admin</option>
                                                                <option value="3">Admin KCD</option>
                                                                <option value="2">Operator Sekolah</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password2">Retype Password</label>
                                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Retype Password" required>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </fieldset>

                                        <!-- Step 2 -->
                                        <h6><i class="step-icon feather icon-home"></i> Step 2</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="idsatu">Kode Registrasi</label>
                                                        <input type="text" class="form-control" name="koreg" id="idsatu" value="<?php echo $u->koreg ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="iddua">Bentuk</label>
                                                        <input type="text" class="form-control" name="bentuk" id="iddua" value="<?php echo $u->bentuk ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="idtiga">Status</label>
                                                        <input type="text" class="form-control" name="status" id="idtiga" value="<?php echo $u->status ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 3 -->
                                        <h6><i class="step-icon feather icon-map"></i> Step 3</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-12 mb-2">
                                                    <div class="d-inline-block mr-2">
                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                            <input type="checkbox" id="klik" class="remove">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                            <span class="">Klik di sini untuk mengubah</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="idempat">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" id="idempat" value="<?php echo $u->alamat ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="idlima">Desa/Kelurahan</label>
                                                        <input type="text" class="form-control" name="desa" id="idlima" value="<?php echo $u->desa ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="idenam">Kecamatan</label>
                                                        <input type="text" class="form-control" name="kecamatan" id="idenam" value="<?php echo $u->kecamatan ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="idtujuh">Kabupaten/Kota</label>
                                                        <input type="text" class="form-control" name="kabupaten" id="idtujuh" value="<?php echo $u->kabupaten ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="iddelapan">Provinsi</label>
                                                        <input type="text" class="form-control" name="provinsi" id="iddelapan" value="<?php echo $u->provinsi ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="idsembilan">Kode Pos</label>
                                                        <input type="text" class="form-control" name="kodepos" id="idsembilan" value="<?php echo $u->kodepos ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $(document).ready(function() {
                                                    $("#klik").click(function() {
                                                        $("input").removeAttr("readonly");
                                                    });
                                                });
                                                $(document).ready(function() {
                                                    $("#klik").click(function() {
                                                        $(".remove").attr("readonly", "readonly");
                                                    });
                                                });
                                            </script>
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