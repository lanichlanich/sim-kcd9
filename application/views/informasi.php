<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-success" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive mx-1">
                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Informasi</th>
                                    <th>Author</th>
                                    <th>Tanggal Posting</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($informasi as $row) : ?>
                                    <tr>
                                        <td><?php echo $row->kategori; ?></td>
                                        <td><?php echo $row->informasi; ?></td>
                                        <td><?php echo $row->add_by; ?></td>
                                        <td><?php echo $row->add_time; ?></td>
                                        <td>
                                            <?php if ($row->status == 1) {
                                                echo "Aktif";
                                            } else {
                                                echo "Tidak Aktif";
                                            } ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/settings/edit_informasi/<?php echo $row->id; ?>">
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo base_url(); ?>admin/settings/delete_informasi/<?php echo $row->id; ?>">
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