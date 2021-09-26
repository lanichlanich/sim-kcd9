<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Start Data Jurusan dan Mapel -->
            <section id="collapsible">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url() ?>admin/daftarijazahnilai/export" method="POST">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="pilsek">Pilih Sekolah</label>
                                                <select id="pilsek" class="form-control sek" name="sekolah" required>
                                                    <?php foreach ($sekolah as $s) : ?>
                                                        <option value="<?php echo $s->npsn; ?>">
                                                            <?php echo $s->nama_sekolah; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="piljur">Pilih Jurusan</label>
                                                <select id="piljur" class="form-control" name="jurusan" required>
                                                    <?php foreach ($ijanil as $j) : ?>
                                                        <option value="<?php echo $j->jurusan; ?>">
                                                            <?php echo $j->jurusan; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success mt-2 btn-block">
                                            <i class="fa fa-file-excel-o"></i> Export
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                                    <th>Nama Sekolah</th>
                                                    <th>Jurusan</th>
                                                    <th>Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ijanil as $row) : ?>
                                                    <tr>
                                                        <td><?php echo $row->sekolah; ?></td>
                                                        <td><?php echo $row->jurusan; ?></td>
                                                        <td>
                                                            <table>
                                                                <tr>
                                                                    <td>Nama Siswa</td>
                                                                    <td>NISN</td>
                                                                    <td>Tahun Lulus</td>
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
                                                                <?php
                                                                $data = array('jurusan' => $row->jurusan);
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
                                                            </table>
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