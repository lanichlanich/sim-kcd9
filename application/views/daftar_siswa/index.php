<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">

            <section id="description" class="card">

                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;"><strong>Data Siswa</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?php echo base_url() ?>admin/daftarsiswa/export" method="POST">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <select class="form-control" name="sekolah" required>
                                                    <option value="all">Semua Sekolah</option>
                                                    <?php foreach ($sekolah as $s) : ?>
                                                        <option value="<?php echo $s->npsn; ?>">
                                                            <?php echo $s->nama_sekolah; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block">
                                                    <i class="fa fa-file-excel-o"></i> Export
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover display nowrap mb-0" id="sekolah">
                                        <thead>
                                            <tr>
                                                <th>Nama Sekolah</th>
                                                <th>Nama Siswa</th>
                                                <th>NISN</th>
                                                <th>JK</th>
                                                <th>Tempat Tanggal Lahir</th>
                                                <th>Kelas</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($siswa as $row) : ?>
                                                <tr>
                                                    <?php
                                                    $sekolah = $this->db->query("SELECT * FROM profile_sekolah WHERE npsn = '$row->npsn'")->row_array();
                                                    ?>
                                                    <td><?php echo $sekolah['nama_sekolah']; ?></td>
                                                    <td><?php echo $row->nama; ?></td>
                                                    <td><?php echo $row->nisn; ?></td>
                                                    <td><?php echo $row->jk; ?></td>
                                                    <td><?php echo $row->tempat_lahir . ", " . $row->tanggal_lahir; ?></td>
                                                    <td><?php echo $row->rombel; ?></td>
                                                    <!-- <td>
                                                        <a href="daftarsiswa/#"><button class="btn btn-warning btn-block my-1">Edit</button></a>
                                                        <a href="daftarsiswa/#"><button class="btn btn-danger btn-block my-1">Hapus</button></a>
                                                    </td> -->
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

        </div>
    </div>
</div>
<!-- END: Content-->