    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card container">
                    <div class="card-header">
                        <h4 class="card-title">Data Siswa</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row" id="table-hover-row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="table-responsive">
                                                <table class="table table-hover display nowrap mb-0" id="sekolah">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Siswa</th>
                                                            <th>No Induk</th>
                                                            <th>NISN</th>
                                                            <th>JK</th>
                                                            <th>Tempat Lahir</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Kelas</th>
                                                            <!-- <th>Aksi</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($siswa as $s) : ?>
                                                            <tr>
                                                                <td><?php echo $s->nama; ?></td>
                                                                <td><?php echo $s->nipd; ?></td>
                                                                <td><?php echo $s->nisn; ?></td>
                                                                <td><?php echo $s->jk; ?></td>
                                                                <td><?php echo $s->tempat_lahir; ?></td>
                                                                <td><?php echo $s->tanggal_lahir; ?></td>
                                                                <td><?php echo $s->rombel; ?></td>
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
                </section>
                <!--/ Description -->


            </div>
        </div>
    </div>
    <!-- END: Content-->