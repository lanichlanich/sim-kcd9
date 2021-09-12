    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card container">
                    <div class="card-header">
                        <h4 class="card-title">Data Guru</h4>
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
                                                            <th>Nama</th>
                                                            <th>Tempat, Tanggal Lahir</th>
                                                            <th>NIP/NUPTK</th>
                                                            <th>Status Pegawai</th>
                                                            <!-- <th>Aksi</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($guru as $g) : ?>
                                                            <tr>
                                                                <td><?php echo $g->nama; ?></td>
                                                                <td><?php echo $g->status_kepegawaian; ?></td>
                                                                <td><?php echo $g->tempat_lahir . ", " . $g->tanggal_lahir; ?></td>
                                                                <td>
                                                                    <?php
                                                                    if ($g->status_kepegawaian == "PNS") {
                                                                        echo $g->nip;
                                                                    } else {
                                                                        if ($g->nuptk == "") {
                                                                            echo "-";
                                                                        } else {
                                                                            echo $g->nuptk;
                                                                        }
                                                                    }
                                                                    ?>
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
                        </div>
                </section>
                <!--/ Description -->


            </div>
        </div>
    </div>
    <!-- END: Content-->