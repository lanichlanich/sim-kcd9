<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">

            <section id="description" class="card">

                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;"><strong>Daftar Sekolah</strong></h4>
                    </div>
                    <div class="card-body">
                        <!-- <a href="daftarsekolah/tambah_sekolah"><button class="btn btn-success">Tambah Sekolah</button></a> -->
                        <div class="row">
                            <div class="table-responsive mx-1">
                                <table class="table table-hover display nowrap mb-0" id="sekolah">
                                    <thead>
                                        <tr>
                                            <th>Nama Sekolah</th>
                                            <th>NPSN</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Kabupaten</th>
                                            <th>Alamat</th>
                                            <!-- <th>Aksi</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($daftar_sekolah as $row) : ?>
                                            <tr>
                                                <td><?= $row->nama_sekolah ?></td>
                                                <td><?= $row->npsn ?></td>
                                                <td><?= $row->jenjang ?></td>
                                                <td><?= $row->status ?></td>
                                                <td><?= $row->kabupaten ?></td>
                                                <td><?= $row->alamat ?></td>
                                                <!-- <td>
                                                    <a href="daftarsekolah/#" class="btn btn-warning"><i class="feather icon-edit"></i></a>
                                                    <a href="daftarsekolah/#" class="btn btn-danger"><i class="feather icon-trash"></i></a>
                                                </td> -->
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