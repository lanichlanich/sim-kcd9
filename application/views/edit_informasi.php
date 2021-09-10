<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <?php foreach ($pengguna as $row) : ?>
            <?php endforeach; ?>
            <!-- Description -->
            <section id="icon-tabs validation">
                <div class="row">
                    <div class="col-12">
                        <?php foreach ($informasi as $i) : ?>
                        <?php endforeach; ?>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url() ?>admin/settings/update_informasi" class="form form-vertical">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="kategori">Kategori</label>
                                            <input type="text" id="kategori" class="form-control" name="kategori" value="<?php echo $i->kategori; ?>">
                                            <input type="hidden" name="id" value="<?php echo $i->id; ?>">
                                            <input type="hidden" name="add_by" value="<?php echo $i->add_by; ?>">
                                            <input type="hidden" name="add_time" value="<?php echo $i->add_time; ?>">
                                            <input type="hidden" name="update_by" value="<?php echo $row->nama; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="info">Informasi</label>
                                            <textarea class="form-control" id="info" name="informasi" rows="3">
                                                <?php echo $i->informasi; ?>
                                            </textarea>
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
                                                <option value="<?php echo $i->tema; ?>"><?php echo $i->tema; ?></option>
                                                <option value="primary">Primary</option>
                                                <option value="info">Info</option>
                                                <option value="danger">Danger</option>
                                                <option value="warning">Warning</option>
                                                <option value="success">Success</option>
                                                <option value="dark">Dark</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option value="<?php echo $i->status; ?>">
                                                    <?php if ($i->status == '1') {
                                                        echo "Aktif";
                                                    } else {
                                                        echo "Tidak Aktif";
                                                    } ?>
                                                </option>
                                                <option value="1">Aktif</option>
                                                <option value="2">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary mx-1">Save</button>
                                </form>
                                <a href="<?php echo base_url(); ?>admin/settings/informasi">
                                    <button class="btn btn-danger">Cancel</button>
                                </a>
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