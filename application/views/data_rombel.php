    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card container">
                    <div class="card-header">
                        <h4 class="card-title">Data Rombel</h4>
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
                                                            <th>Nama Kelas</th>
                                                            <th>Walikelas</th>
                                                            <th>Laki-Laki</th>
                                                            <th>Perempuan</th>
                                                            <th>Jumlah Siswa</th>
                                                            <!-- <th>Aksi</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($rombel as $r) : ?>
                                                            <tr>
                                                                <td><?php echo $r->nama; ?></td>
                                                                <td><?php echo $r->walikelas; ?></td>
                                                                <td><?php echo $r->lk; ?></td>
                                                                <td><?php echo $r->pr; ?></td>
                                                                <td><?php echo $r->jml; ?></td>
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