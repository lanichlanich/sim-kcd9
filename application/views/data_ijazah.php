<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA IJAZAH</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <a class="btn btn-warning ml-1 mb-2 text-white" data-toggle="modal" data-target="#tambahmodal">Tambah Data</a>
                            <?php if ($this->session->role_id == 1 || $this->session->role_id == 3) { ?>
                                <?php echo form_open_multipart('admin/ijazah/save_data'); ?>
                            <?php } else { ?>
                                <?php echo form_open_multipart('ijazah/save_data'); ?>
                            <?php } ?>
                            <div class="modal fade text-left" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel1">Tambah Data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <input type="hidden" name="npsn" value="<?php echo $this->session->nama_pengguna; ?>">
                                            <div class="form-group">
                                                <select class="form-control" name="jurusan" id="basicSelect" required>
                                                    <option value="">Pilih</option>
                                                    <?php foreach ($mapel as $row) : ?>
                                                        <option value="<?php echo $row->jurusan; ?>"><?php echo $row->jurusan; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <br>
                                                <input class="form-control" type="text" name="nisn" placeholder="NISN" required><br>
                                                <input class="form-control" type="text" name="nama_siswa" placeholder="Nama Siswa" required><br>
                                                <input class="form-control" type="number" name="tahun_lulus" placeholder="Tahun Lulus" required><br>
                                                <input class="form-control" type="text" name="no_ijazah" placeholder="No Ijazah" required><br>
                                                <input class="form-control" type="file" name="userfile" size="20" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <input type="submit" class="btn btn-success" value="upload">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close() ?>
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-hover display nowrap mb-0" id="sekolah">
                                        <thead>
                                            <tr>
                                                <th>Jurusan</th>
                                                <th>Nama Siswa</th>
                                                <th>NISN</th>
                                                <th>Tahun Lulus</th>
                                                <th>No Ijazah</th>
                                                <th>Softfile</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ijazah as $s) : ?>
                                                <tr>
                                                    <td><?php echo $s->jurusan; ?></td>
                                                    <td><?php echo $s->nama_siswa; ?></td>
                                                    <td><?php echo $s->nisn; ?></td>
                                                    <td><?php echo $s->tahun_lulus; ?></td>
                                                    <td><?php echo $s->no_ijazah; ?></td>
                                                    <td><a href="<?php echo $s->ijazah_file; ?>" class="btn btn-danger" target="_blank"><i class="feather icon-download"></i> Download</a></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal<?php echo $s->id ?>">
                                                            <i class="feather icon-upload"></i> Upload
                                                        </button>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                    <?php $no = 0;
                                    foreach ($ijazah as $i) : ?>
                                        <div class="modal fade text-left" id="editmodal<?php echo $i->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <?php if ($this->session->role_id == 1 || $this->session->role_id == 2) { ?>
                                                        <?php echo form_open_multipart('admin/ijazah/update_data/' . $i->id); ?>
                                                    <?php } else { ?>
                                                        <?php echo form_open_multipart('ijazah/update_data/' . $i->id); ?>
                                                    <?php } ?>
                                                    <input type="hidden" name="id" value="<?php echo $i->id ?>">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel1">Upload Ijazah</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>NISN : <?php echo $i->nisn; ?></h5>
                                                        <h5>Nama Siswa : <?php echo $i->nama_siswa; ?></h5>
                                                        <input class="form-control" type="file" name="userfile">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-success" value="upload">
                                                    </div>
                                                    <?php echo form_close() ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Modals start -->

            <!-- Basic Modals end -->
        </div>
    </div>
</div>
<!-- END: Content-->