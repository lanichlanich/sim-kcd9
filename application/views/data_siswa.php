<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA SISWA</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
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
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->