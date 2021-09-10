<!-- User Admin -->
<?php foreach ($pengguna as $p) : ?>
<?php endforeach; ?>
<!-- All User -->
<?php foreach ($user as $u) : ?>
<?php endforeach; ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="card">
                <div class="card-header">
                    <h4>Reset Password</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive mx-1">
                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                            <thead>
                                <tr>
                                    <th>Sekolah</th>
                                    <th>NPSN</th>
                                    <th>Nama Operator</th>
                                    <th>Nomor Handphone</th>
                                    <th>Waktu Diajukan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($reset as $r) : ?>
                                    <?php $sekolah = $this->db->query("SELECT * FROM pengguna WHERE nama_pengguna = '$r->npsn'")->row_array(); ?>
                                    <tr>
                                        <td><?php echo $sekolah['sekolah']; ?></td>
                                        <td><?php echo $r->npsn; ?></td>
                                        <td><?php echo $sekolah['nama']; ?></td>
                                        <td><?php echo $r->nohp; ?></td>
                                        <td><?php echo $r->add_time; ?></td>
                                        <td>
                                            <form method="POST" action="<?php echo base_url(); ?>admin/settings/aprove">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_reset" value="<?php echo $r->id; ?>">
                                                    <input type="hidden" name="id_pengguna" value="<?php echo $sekolah['id']; ?>">
                                                    <input type="hidden" name="nama_pengguna" value="<?php echo $sekolah['nama_pengguna']; ?>">
                                                    <input type="hidden" name="password" value="<?php echo $sekolah['nama_pengguna']; ?>">
                                                    <input type="hidden" name="update_by" value="<?php echo $p->nama; ?>">
                                                </div>
                                                <button type="submit" class="btn btn-success" style="margin-top: -20px;">Aprove</button>
                                            </form>
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
<!-- END: Content-->