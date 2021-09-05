    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Sekolah</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row" id="table-hover-row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="table-responsive">
                                                <table class="table table-hover display nowrap" id="sekolah">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Sekolah</th>
                                                            <th>Alamat</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($sekolah as $s) : ?>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"><?php echo $s['nama']; ?></td>
                                                                <td><?php echo $s['alamat'] ?></td>
                                                                <td class="btn-group">
                                                                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="feather icon-eye"> </i></button>
                                                                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather icon-edit"> </i></button>
                                                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather icon-trash"> </i></button>
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
                    </div>
                </section>
                <!--/ Description -->


            </div>
        </div>
    </div>
    <!-- END: Content-->