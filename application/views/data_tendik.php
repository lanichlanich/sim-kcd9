<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA TENAGA KEPENDIDIKAN</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
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
                                            <?php foreach ($tendik as $t) : ?>
                                                <tr>
                                                    <td><?php echo $t->nama; ?></td>
                                                    <td><?php echo $t->status_kepegawaian; ?></td>
                                                    <td><?php echo $t->tempat_lahir . ", " . $t->tanggal_lahir; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($t->status_kepegawaian == "PNS") {
                                                            echo $t->nip;
                                                        } else {
                                                            if ($t->nuptk == "") {
                                                                echo "-";
                                                            } else {
                                                                echo $t->nuptk;
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