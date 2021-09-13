<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA GURU</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-hover display nowrap mb-0" id="sekolah">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Status Pegawai</th>
                                                <th>Tempat, Tanggal Lahir</th>
                                                <th>NIP/NUPTK</th>
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
                                                            echo '<span class="badge badge-danger">' . $g->nip . '</span>';
                                                        } else {
                                                            if ($g->nuptk == "") {
                                                                echo '<span class="badge badge-warning">-</span>';
                                                            } else {
                                                                echo '<span class="badge badge-warning">' . $g->nuptk . '</span>';
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
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->