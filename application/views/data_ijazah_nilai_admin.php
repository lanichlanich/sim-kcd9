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
                                <h4 class="mb-1" style="color: white;">DATA IJAZAH DAN NILAI</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                                            <thead>
                                                <tr>
                                                    <td>Aksi</td>
                                                    <th>Nama Sekolah</th>
                                                    <th>Jurusan</th>
                                                    <th>Nilai</th>
                                                    <th>Ijazah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ijanil as $row) : ?>
                                                    <tr>
                                                        <td>
                                                            <form action="<?php echo base_url(); ?>admin/daftarijazahnilai/export" method="post">
                                                                <input type="hidden" name="npsn" value="<?php echo $row->npsn; ?>">
                                                                <input type="hidden" name="jurusan" value="<?php echo $row->jurusan; ?>">
                                                                <button class="btn btn-success" type="submit"><i class="fa fa-file-excel-o"></i> Export</button>
                                                            </form>
                                                        </td>
                                                        <td><?php echo $row->sekolah; ?></td>
                                                        <td><?php echo $row->jurusan; ?></td>
                                                        <td>
                                                            <button class="btn btn-warning" data-toggle="modal" data-target="#lihatnilai<?php echo $row->id ?>"><i class="fa fa-eye"></i> Lihat Nilai</button>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger" data-toggle="modal" data-target="#lihatijazah<?php echo $row->id ?>"><i class="fa fa-eye"></i> Lihat Ijazah</button>
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
            </section>
            <!-- End Data Jurusan dan Mapel -->
        </div>
    </div>
</div>
<!-- END: Content-->
<?php foreach ($ijanil as $in) : ?>
    <div class="modal fade text-left" id="lihatnilai<?php echo $in->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title" id="myModalLabel1">Nilai Siswa <?php echo $in->sekolah; ?> Jurusan <?php echo $in->jurusan; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>NISN</th>
                                    <th>Tahun Lulus</th>
                                    <th><?php echo $in->mapel_01; ?></th>
                                    <th><?php echo $in->mapel_02; ?></th>
                                    <th><?php echo $in->mapel_03; ?></th>
                                    <th><?php echo $in->mapel_04; ?></th>
                                    <th><?php echo $in->mapel_05; ?></th>
                                    <th><?php echo $in->mapel_06; ?></th>
                                    <th><?php echo $in->mapel_07; ?></th>
                                    <th><?php echo $in->mapel_08; ?></th>
                                    <th><?php echo $in->mapel_09; ?></th>
                                    <th><?php echo $in->mapel_10; ?></th>
                                    <th><?php echo $in->mapel_11; ?></th>
                                    <th><?php echo $in->mapel_12; ?></th>
                                    <th><?php echo $in->mapel_13; ?></th>
                                    <th><?php echo $in->mapel_14; ?></th>
                                    <th><?php echo $in->mapel_15; ?></th>
                                    <th><?php echo $in->mapel_16; ?></th>
                                    <th><?php echo $in->mapel_17; ?></th>
                                    <th><?php echo $in->mapel_18; ?></th>
                                    <th><?php echo $in->mapel_19; ?></th>
                                    <th><?php echo $in->mapel_20; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = array('jurusan' => $in->jurusan);
                                foreach ($this->Nilai_model->getAllNilaiAdmin($data) as $n) : ?>
                                    <tr>
                                        <td><?php echo $n->nama_siswa; ?></td>
                                        <td><?php echo $n->nisn; ?></td>
                                        <td><?php echo $n->tahun_lulus; ?></td>
                                        <td><?php echo $n->mapel_01; ?></td>
                                        <td><?php echo $n->mapel_02; ?></td>
                                        <td><?php echo $n->mapel_03; ?></td>
                                        <td><?php echo $n->mapel_04; ?></td>
                                        <td><?php echo $n->mapel_05; ?></td>
                                        <td><?php echo $n->mapel_06; ?></td>
                                        <td><?php echo $n->mapel_07; ?></td>
                                        <td><?php echo $n->mapel_08; ?></td>
                                        <td><?php echo $n->mapel_09; ?></td>
                                        <td><?php echo $n->mapel_10; ?></td>
                                        <td><?php echo $n->mapel_11; ?></td>
                                        <td><?php echo $n->mapel_12; ?></td>
                                        <td><?php echo $n->mapel_13; ?></td>
                                        <td><?php echo $n->mapel_14; ?></td>
                                        <td><?php echo $n->mapel_15; ?></td>
                                        <td><?php echo $n->mapel_16; ?></td>
                                        <td><?php echo $n->mapel_17; ?></td>
                                        <td><?php echo $n->mapel_18; ?></td>
                                        <td><?php echo $n->mapel_19; ?></td>
                                        <td><?php echo $n->mapel_20; ?></td>
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

<?php foreach ($ijanil as $ij) : ?>
    <div class="modal fade text-left" id="lihatijazah<?php echo $ij->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title" id="myModalLabel1">Nilai Siswa <?php echo $ij->sekolah; ?> Jurusan <?php echo $ij->jurusan; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>NISN</th>
                                    <th>Tahun Lulus</th>
                                    <th>No Lulus</th>
                                    <th>Ijazah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = array('jurusan' => $in->jurusan);
                                foreach ($this->Nilai_model->getAllIjazahAdmin($data) as $j) : ?>
                                    <tr>
                                        <td><?php echo $j->nama_siswa; ?></td>
                                        <td><?php echo $j->nisn; ?></td>
                                        <td><?php echo $j->tahun_lulus; ?></td>
                                        <td><?php echo $j->no_ijazah; ?></td>
                                        <td><?php
                                            if ($j->ijazah_file == null) {
                                                echo "Belum Upload Ijazah";
                                            } else {
                                            ?><a href="<?php echo "../ijazah/" . $j->ijazah_file; ?>" class="btn btn-danger" target="_blank"><i class="feather icon-download"></i> Download</a><?php
                                                                                                                                                                                            }
                                                                                                                                                                                                ?></td>
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