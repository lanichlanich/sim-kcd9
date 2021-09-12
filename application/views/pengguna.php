<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group mb-1">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tambah Pengguna
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>admin/profilesekolah/add_pengguna/admin">Admin</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>admin/profilesekolah/add_pengguna/operator_sekolah">Operator Sekolah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive mx-1">
                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                            <thead>
                                <tr>
                                    <th>Sekolah</th>
                                    <th class="text-center">Hak Akses</th>
                                    <th class="text-center">Riwayat Login</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengguna as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->sekolah; ?></td>
                                        <td class="text-center">
                                            <?php if ($row->role_id == 1) {
                                                echo "Admin";
                                            } else {
                                                echo "Operator Sekolah";
                                            } ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url(); ?>">
                                                <span class="badge badge-info" title="Lihat Riwayat Pengguna"><i class="fa fa-eye"></i></span>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url(); ?>admin/profilesekolah/edit_pengguna/<?php echo $row->id; ?>">
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo base_url(); ?>admin/settings/delete_pengguna/<?php echo $row->id; ?>">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>
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

<?php foreach ($pengguna as $row) : ?>
<?php endforeach; ?>

<!-- Modal -->
<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h4 class="modal-title" id="myModalLabel4">Buat Informasi</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() ?>admin/settings/add_informasi" class="form form-vertical">
                    <div class="form-body">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" id="kategori" class="form-control" name="kategori" placeholder="Kategori" required>
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="add_by" value="<?php echo $row->nama; ?>">
                        </div>
                        <div class="form-group">
                            <label for="info">Informasi</label>
                            <textarea class="form-control" id="info" name="informasi" rows="3" placeholder="Ketik informasi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tema">Tema</label><br>
                            <span class="badge badge-primary" style="width: 100px;">Primary</span>
                            <span class="badge badge-info" style="width: 100px;">Info</span>
                            <span class="badge badge-danger" style="width: 100px;">Danger</span>
                            <span class="badge badge-warning" style="width: 100px;">Warning</span>
                            <span class="badge badge-success" style="width: 100px;">Success</span>
                            <span class="badge badge-dark" style="width: 100px;">Dark</span>
                            <select class="form-control mt-1" id="tema" name="tema">
                                <option value="">Pilih</option>
                                <option value="primary">Primary</option>
                                <option value="info">Info</option>
                                <option value="danger">Danger</option>
                                <option value="warning">Warning</option>
                                <option value="success">Success</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>