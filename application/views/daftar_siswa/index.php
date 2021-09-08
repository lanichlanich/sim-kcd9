<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">

            <section id="description" class="card">

                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;"><strong>Daftar Siswa</strong></h4>
                    </div>
                    <div class="card-body">
                        <a href="daftarsiswa/#"><button class="btn btn-success">Tambah Siswa</button></a>
                        <a href="daftarsiswa/#"><button class="btn btn-success float-right">Export Excel</button></a>
                        <a href="daftarsiswa/#"><button class="btn btn-danger float-right mr-1">Export PDF</button></a>
                        <div class="row">


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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($daftar_siswa as $row) : ?>
                                            <tr>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->nipd ?></td>
                                                <td><?= $row->nisn ?></td>
                                                <td><?= $row->jk ?></td>
                                                <td><?= $row->tempat_lahir ?></td>
                                                <td><?= $row->tanggal_lahir ?></td>
                                                <td><?= $row->rombel ?></td>
                                                <td>
                                                    <a href="daftarsiswa/#"><button class="btn btn-warning">Edit</button></a>
                                                    <a href="daftarsiswa/#"><button class="btn btn-danger">Hapus</button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->