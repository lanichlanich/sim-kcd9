<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA IJAZAH</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-hover display nowrap mb-0" id="sekolah">
                                        <thead>
                                            <tr>
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
                                                    <td><?php echo $s->nama_siswa; ?></td>
                                                    <td><?php echo $s->nisn; ?></td>
                                                    <td><?php echo $s->tahun_lulus; ?></td>
                                                    <td><?php echo $s->no_ijazah; ?></td>
                                                    <td><?php echo $s->ijazah_file; ?></td>
                                                    <td>Aksi</td>
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