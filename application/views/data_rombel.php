<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA ROMBEL</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
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
                                                    <?php if ($r->jml < 20) {
                                                        echo "<td><span class='badge badge-danger'>$r->jml</span></td>";
                                                    } else {
                                                        echo "<td><span class='badge badge-success'>$r->jml</span></td>";
                                                    } ?>

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