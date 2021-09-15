    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Import Data Guru</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php
                            if ($this->session->flashdata('error')) {
                                echo $this->session->flashdata('error');
                            }
                            ?>
                            <h6><i>Silahkan upload file excel yang di unduh dari daftar guru dapodik <span class="text-danger">(buka dan save dulu sebelum di import)</span></i></h6>
                            <div class="row" id="table-hover-row">
                                <?php if ($this->session->role_id == '1') { ?>
                                    <form method="post" action="<?php echo base_url('admin/importguru/spreadsheet_import'); ?>" class="" enctype="multipart/form-data">
                                    <?php } else { ?>
                                        <form method="post" action="<?php echo base_url('importguru/spreadsheet_import'); ?>" class="" enctype="multipart/form-data">
                                        <?php } ?>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <input type="file" name="upload_file" placeholder="Enter Name" id="upload_file" required>
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