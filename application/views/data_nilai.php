<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">

            <!-- Start Data Nilai -->
            <section id="collapsible">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card collapse-icon accordion-icon-rotate">
                            <div class="card-header bg-primary">
                                <h4 class="mb-1" style="color: white;">DATA NILAI</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="default-collapse collapse-bordered">
                                        <?php foreach ($mapel as $n) : ?>
                                            <div class="card collapse-header">
                                                <?php if ($n->id % 2 == 0) { ?>
                                                    <div id="headingCollapse<?php echo $n->id ?>" class="card-header bg-gradient-info collapsed" data-toggle="collapse" role="button" data-target="#nilai<?php echo $n->id ?>" aria-expanded="false" aria-controls="collapse<?php echo $n->id ?>">
                                                    <?php } else { ?>
                                                        <div id="headingCollapse<?php echo $n->id ?>" class="card-header bg-gradient-danger collapsed" data-toggle="collapse" role="button" data-target="#nilai<?php echo $n->id ?>" aria-expanded="false" aria-controls="collapse<?php echo $n->id ?>">
                                                        <?php } ?>
                                                        <span class="lead collapse-title">
                                                            <?php echo 'JURUSAN ' . $n->jurusan . ' TAHUN LULUS ' . $n->tahun_lulus ?>
                                                        </span>
                                                        </div>
                                                        <div id="nilai<?php echo $n->id ?>" role="tabpane<?php echo $n->id ?>" aria-labelledby="headingCollapse<?php echo $n->id ?>" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover display nowrap mb-0">
                                                                            <thead>
                                                                                <tr class="text-center">
                                                                                    <th>Aksi</th>
                                                                                    <th>NISN</th>
                                                                                    <th>Nama Siswa</th>
                                                                                    <th><?php echo $n->mapel_01; ?></th>
                                                                                    <th><?php echo $n->mapel_02; ?></th>
                                                                                    <th><?php echo $n->mapel_03; ?></th>
                                                                                    <th><?php echo $n->mapel_04; ?></th>
                                                                                    <th><?php echo $n->mapel_05; ?></th>
                                                                                    <th><?php echo $n->mapel_06; ?></th>
                                                                                    <th><?php echo $n->mapel_07; ?></th>
                                                                                    <th><?php echo $n->mapel_08; ?></th>
                                                                                    <th><?php echo $n->mapel_09; ?></th>
                                                                                    <th><?php echo $n->mapel_10; ?></th>
                                                                                    <th><?php echo $n->mapel_11; ?></th>
                                                                                    <th><?php echo $n->mapel_12; ?></th>
                                                                                    <th><?php echo $n->mapel_13; ?></th>
                                                                                    <th><?php echo $n->mapel_14; ?></th>
                                                                                    <th><?php echo $n->mapel_15; ?></th>
                                                                                    <th><?php echo $n->mapel_16; ?></th>
                                                                                    <th><?php echo $n->mapel_17; ?></th>
                                                                                    <th><?php echo $n->mapel_18; ?></th>
                                                                                    <th><?php echo $n->mapel_19; ?></th>
                                                                                    <th><?php echo $n->mapel_20; ?></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                $data = array('npsn' => $this->session->nama_pengguna, 'jurusan' => $n->jurusan);
                                                                                ?>
                                                                                <?php foreach ($this->Nilai_model->getAllNilaiJurusan($data) as $row) : ?>
                                                                                    <tr class="text-center">
                                                                                        <td>
                                                                                            <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#editnilai<?php echo $row->id ?>"><i class="fa fa-edit"></i></button>
                                                                                            <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#hapusnilai<?php echo $row->id ?>"><i class="fa fa-trash"></i></button>
                                                                                        </td>
                                                                                        <td><?php echo $row->nisn; ?></td>
                                                                                        <td><?php echo $row->nama_siswa; ?></td>
                                                                                        <td><?php echo $row->mapel_01; ?></td>
                                                                                        <td><?php echo $row->mapel_02; ?></td>
                                                                                        <td><?php echo $row->mapel_03; ?></td>
                                                                                        <td><?php echo $row->mapel_04; ?></td>
                                                                                        <td><?php echo $row->mapel_05; ?></td>
                                                                                        <td><?php echo $row->mapel_06; ?></td>
                                                                                        <td><?php echo $row->mapel_07; ?></td>
                                                                                        <td><?php echo $row->mapel_08; ?></td>
                                                                                        <td><?php echo $row->mapel_09; ?></td>
                                                                                        <td><?php echo $row->mapel_10; ?></td>
                                                                                        <td><?php echo $row->mapel_11; ?></td>
                                                                                        <td><?php echo $row->mapel_12; ?></td>
                                                                                        <td><?php echo $row->mapel_13; ?></td>
                                                                                        <td><?php echo $row->mapel_14; ?></td>
                                                                                        <td><?php echo $row->mapel_15; ?></td>
                                                                                        <td><?php echo $row->mapel_16; ?></td>
                                                                                        <td><?php echo $row->mapel_17; ?></td>
                                                                                        <td><?php echo $row->mapel_18; ?></td>
                                                                                        <td><?php echo $row->mapel_19; ?></td>
                                                                                        <td><?php echo $row->mapel_20; ?></td>
                                                                                    </tr>
                                                                                <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- End Data Nilai -->
        </div>
    </div>
</div>
<!-- END: Content-->

<?php foreach ($nilai as $un) : ?>
    <?php foreach ($mapel as $m) : ?>
    <?php endforeach; ?>
    <?php if ($this->session->role_id == 1 || $this->session->role_id == 3) { ?>
        <form action="<?php echo base_url(); ?>admin/nilai/update_nilai" method="post" enctype="multipart/form-data">
        <?php } else { ?>
            <form action="<?php echo base_url(); ?>nilai/update_nilai" method="post" enctype="multipart/form-data">
            <?php } ?>
            <div class="modal fade text-left" id="editnilai<?php echo $un->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title" id="myModalLabel1">Edit Nilai</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input class="form-control my-1" type="hidden" name="id" value="<?php echo $un->id; ?>">
                            <input class="form-control my-1" type="hidden" name="npsn" value="<?php echo $un->npsn; ?>">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control my-1" type="text" name="nama_siswa" value="<?php echo $un->nama_siswa; ?>" readonly required>
                                        <input class="form-control my-1" type="number" name="tahun_lulus" value="<?php echo $un->tahun_lulus; ?>" readonly required>
                                        <input class="form-control" type="text" name="mapel_01" placeholder="<?php echo $m->mapel_01; ?>" value="<?php echo $un->mapel_01 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_02" placeholder="<?php echo $m->mapel_02; ?>" value="<?php echo $un->mapel_02 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_03" placeholder="<?php echo $m->mapel_03; ?>" value="<?php echo $un->mapel_03 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_04" placeholder="<?php echo $m->mapel_04; ?>" value="<?php echo $un->mapel_04 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_05" placeholder="<?php echo $m->mapel_05; ?>" value="<?php echo $un->mapel_05 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_06" placeholder="<?php echo $m->mapel_06; ?>" value="<?php echo $un->mapel_06 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_07" placeholder="<?php echo $m->mapel_07; ?>" value="<?php echo $un->mapel_07 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_08" placeholder="<?php echo $m->mapel_08; ?>" value="<?php echo $un->mapel_08 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_09" placeholder="<?php echo $m->mapel_09; ?>" value="<?php echo $un->mapel_09 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_10" placeholder="<?php echo $m->mapel_10; ?>" value="<?php echo $un->mapel_10 ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control my-1" type="text" name="nisn" value="<?php echo $un->nisn ?>" readonly required>
                                        <input class="form-control my-1" type="text" name="jurusan" value="<?php echo $un->jurusan ?>" readonly required>
                                        <input class="form-control" type="text" name="mapel_11" placeholder="<?php echo $m->mapel_11; ?>" value="<?php echo $un->mapel_11 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_12" placeholder="<?php echo $m->mapel_12; ?>" value="<?php echo $un->mapel_12 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_13" placeholder="<?php echo $m->mapel_13; ?>" value="<?php echo $un->mapel_13 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_14" placeholder="<?php echo $m->mapel_14; ?>" value="<?php echo $un->mapel_14 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_15" placeholder="<?php echo $m->mapel_15; ?>" value="<?php echo $un->mapel_15 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_16" placeholder="<?php echo $m->mapel_16; ?>" value="<?php echo $un->mapel_16 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_17" placeholder="<?php echo $m->mapel_17; ?>" value="<?php echo $un->mapel_17 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_18" placeholder="<?php echo $m->mapel_18; ?>" value="<?php echo $un->mapel_18 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_19" placeholder="<?php echo $m->mapel_19; ?>" value="<?php echo $un->mapel_19 ?>" required><br>
                                        <input class="form-control" type="text" name="mapel_20" placeholder="<?php echo $m->mapel_20; ?>" value="<?php echo $un->mapel_20 ?>" required>
                                    </div>
                                </div>
                            </div>
                            <span class="text-danger font-small-4"><i>Field nama mata pelajaran boleh diisi strip (-) jika jumlah mata pelajaran < 20</i></span>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        <?php endforeach; ?>

        <?php foreach ($nilai as $hn) : ?>
            <?php if ($this->session->role_id == 1 || $this->session->role_id == 3) { ?>
                <form action="<?php echo base_url(); ?>admin/nilai/hapus_nilai" method="post">
                <?php } else { ?>
                    <form action="<?php echo base_url(); ?>nilai/hapus_nilai" method="post">
                    <?php } ?>
                    <div class="modal fade text-left" id="hapusnilai<?php echo $hn->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h4 class="modal-title" id="myModalLabel1">Hapus Nilai</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input class="form-control my-1" type="hidden" name="id" value="<?php echo $hn->id; ?>">
                                    <div class="my-3">
                                        Anda yakin ingin menghapus data ini?
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-danger" value="Ya, saya yakin">
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                <?php endforeach; ?>