<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Start Data Jurusan dan Mapel -->
            <section id="collapsible">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card collapse-icon accordion-icon-rotate">
                            <div class="card-header bg-primary">
                                <h4 class="mb-1" style="color: white;">DATA JURUSAN DAN MATA PELAJARAN</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <h4>Download template data jurusan dan mata pelajaran <a href="<?php echo base_url(); ?>template_file/data_jurusan_mapel.xlsx"><i class="fa fa-download"></i> Download</a></h4>
                                    <div class="default-collapse collapse-bordered">
                                        <form method="post" action="<?php echo base_url('mapel/spreadsheet_import'); ?>" class="mb-2" enctype="multipart/form-data">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <input type="file" name="upload_file" placeholder="Enter Name" id="upload_file" required>
                                                        <input type="submit" name="submit" class="btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php foreach ($mapel as $m) : ?>
                                            <div class="card collapse-header">
                                                <?php if ($m->id % 2 == 0) { ?>
                                                    <div id="headingCollapse1" class="card-header collapsed bg-gradient-info" data-toggle="collapse" role="button" data-target="#collapse<?php echo $m->id ?>" aria-expanded="false" aria-controls="collapse1">
                                                    <?php } else { ?>
                                                        <div id="headingCollapse1" class="card-header collapsed bg-gradient-danger" data-toggle="collapse" role="button" data-target="#collapse<?php echo $m->id ?>" aria-expanded="false" aria-controls="collapse1">
                                                        <?php } ?>
                                                        <span class="lead collapse-title">
                                                            <?php echo $m->jurusan . ' ' . $m->tahun_lulus ?>
                                                        </span>
                                                        </div>
                                                        <div id="collapse<?php echo $m->id ?>" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse" style="">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover display nowrap mb-0">
                                                                            <thead>
                                                                                <tr class="text-center">
                                                                                    <th>Aksi</th>
                                                                                    <th>Mapel 01</th>
                                                                                    <th>Mapel 02</th>
                                                                                    <th>Mapel 03</th>
                                                                                    <th>Mapel 04</th>
                                                                                    <th>Mapel 05</th>
                                                                                    <th>Mapel 06</th>
                                                                                    <th>Mapel 07</th>
                                                                                    <th>Mapel 08</th>
                                                                                    <th>Mapel 09</th>
                                                                                    <th>Mapel 10</th>
                                                                                    <th>Mapel 11</th>
                                                                                    <th>Mapel 12</th>
                                                                                    <th>Mapel 13</th>
                                                                                    <th>Mapel 14</th>
                                                                                    <th>Mapel 15</th>
                                                                                    <th>Mapel 16</th>
                                                                                    <th>Mapel 17</th>
                                                                                    <th>Mapel 18</th>
                                                                                    <th>Mapel 19</th>
                                                                                    <th>Mapel 20</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="text-center">
                                                                                    <td>
                                                                                        <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#editmapel<?php echo $m->id ?>"><i class="fa fa-edit"></i></button>
                                                                                        <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#hapusmapel<?php echo $m->id ?>"><i class="fa fa-trash"></i></button>
                                                                                    </td>
                                                                                    <td><?php echo $m->mapel_01; ?></td>
                                                                                    <td><?php echo $m->mapel_02; ?></td>
                                                                                    <td><?php echo $m->mapel_03; ?></td>
                                                                                    <td><?php echo $m->mapel_04; ?></td>
                                                                                    <td><?php echo $m->mapel_05; ?></td>
                                                                                    <td><?php echo $m->mapel_06; ?></td>
                                                                                    <td><?php echo $m->mapel_07; ?></td>
                                                                                    <td><?php echo $m->mapel_08; ?></td>
                                                                                    <td><?php echo $m->mapel_09; ?></td>
                                                                                    <td><?php echo $m->mapel_10; ?></td>
                                                                                    <td><?php echo $m->mapel_11; ?></td>
                                                                                    <td><?php echo $m->mapel_12; ?></td>
                                                                                    <td><?php echo $m->mapel_13; ?></td>
                                                                                    <td><?php echo $m->mapel_14; ?></td>
                                                                                    <td><?php echo $m->mapel_15; ?></td>
                                                                                    <td><?php echo $m->mapel_16; ?></td>
                                                                                    <td><?php echo $m->mapel_17; ?></td>
                                                                                    <td><?php echo $m->mapel_18; ?></td>
                                                                                    <td><?php echo $m->mapel_19; ?></td>
                                                                                    <td><?php echo $m->mapel_20; ?></td>
                                                                                </tr>
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
            <!-- End Data Jurusan dan Mapel -->
        </div>
    </div>
</div>
<!-- END: Content-->

<?php foreach ($mapel as $um) : ?>
    <form action="<?php echo base_url(); ?>mapel/update_mapel" method="post" enctype="multipart/form-data">
        <div class="modal fade text-left" id="editmapel<?php echo $um->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title" id="myModalLabel1">Edit Jurusan dan Mata Pelajaran</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input class="form-control my-1" type="hidden" name="id" value="<?php echo $um->id; ?>">
                        <input class="form-control my-1" type="hidden" name="npsn" value="<?php echo $um->npsn; ?>">
                        <input class="form-control my-1" type="number" name="tahun_lulus" value="<?php echo $um->tahun_lulus; ?>" required>
                        <input class="form-control my-1" type="text" name="jurusan" value="<?php echo $um->jurusan ?>" required>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="mapel_01" placeholder="Nama Mata Pelajaran ke 1" value="<?php echo $um->mapel_01 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_02" placeholder="Nama Mata Pelajaran ke 2" value="<?php echo $um->mapel_02 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_03" placeholder="Nama Mata Pelajaran ke 3" value="<?php echo $um->mapel_03 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_04" placeholder="Nama Mata Pelajaran ke 4" value="<?php echo $um->mapel_04 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_05" placeholder="Nama Mata Pelajaran ke 5" value="<?php echo $um->mapel_05 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_06" placeholder="Nama Mata Pelajaran ke 6" value="<?php echo $um->mapel_06 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_07" placeholder="Nama Mata Pelajaran ke 7" value="<?php echo $um->mapel_07 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_08" placeholder="Nama Mata Pelajaran ke 8" value="<?php echo $um->mapel_08 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_09" placeholder="Nama Mata Pelajaran ke 9" value="<?php echo $um->mapel_09 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_10" placeholder="Nama Mata Pelajaran ke 10" value="<?php echo $um->mapel_10 ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="mapel_11" placeholder="Nama Mata Pelajaran ke 11" value="<?php echo $um->mapel_11 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_12" placeholder="Nama Mata Pelajaran ke 12" value="<?php echo $um->mapel_12 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_13" placeholder="Nama Mata Pelajaran ke 13" value="<?php echo $um->mapel_13 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_14" placeholder="Nama Mata Pelajaran ke 14" value="<?php echo $um->mapel_14 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_15" placeholder="Nama Mata Pelajaran ke 15" value="<?php echo $um->mapel_15 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_16" placeholder="Nama Mata Pelajaran ke 16" value="<?php echo $um->mapel_16 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_17" placeholder="Nama Mata Pelajaran ke 17" value="<?php echo $um->mapel_17 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_18" placeholder="Nama Mata Pelajaran ke 18" value="<?php echo $um->mapel_18 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_19" placeholder="Nama Mata Pelajaran ke 19" value="<?php echo $um->mapel_19 ?>" required><br>
                                    <input class="form-control" type="text" name="mapel_20" placeholder="Nama Mata Pelajaran ke 20" value="<?php echo $um->mapel_20 ?>" required>
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

<?php foreach ($mapel as $hm) : ?>
    <form action="<?php echo base_url(); ?>mapel/hapus_mapel" method="post">
        <div class="modal fade text-left" id="hapusmapel<?php echo $hm->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title" id="myModalLabel1">Hapus Jurusan dan Mata Pelajaran</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input class="form-control my-1" type="hidden" name="id" value="<?php echo $hm->id; ?>">
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