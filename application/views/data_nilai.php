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
                                                <div id="headingCollapse<?php echo $n->id ?>" class="card-header collapsed" data-toggle="collapse" role="button" data-target="#nilai<?php echo $n->id ?>" aria-expanded="false" aria-controls="collapse<?php echo $n->id ?>">
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
                                                                                    <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#editmapel<?php echo $row->id ?>"><i class="fa fa-edit"></i></button>
                                                                                    <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#hapusmapel<?php echo $row->id ?>"><i class="fa fa-trash"></i></button>
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