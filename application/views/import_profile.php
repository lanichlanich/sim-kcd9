    <?php foreach ($pengguna as $p) : ?>
    <?php endforeach; ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Import Profile Sekolah</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php
                            if ($this->session->flashdata('error')) {
                                echo $this->session->flashdata('error');
                            }
                            ?>
                            <h6><i>Silahkan upload file excel yang di unduh dari profile dapodik <span class="text-danger">(buka dan save dulu sebelum di import)</span></i></h6>
                            <div class="row" id="table-hover-row">
                                <form method="post" action="<?php echo base_url('importprofile/spreadsheet_import'); ?>" class="" enctype="multipart/form-data">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <input type="file" name="upload_file" placeholder="Enter Name" id="upload_file" required>
                                                <input type="hidden" name="kode" value="<?php echo $p->id; ?>">
                                                <input type="submit" name="submit" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Description -->
            </div>
        </div>
    </div>
    <!-- END: Content-->