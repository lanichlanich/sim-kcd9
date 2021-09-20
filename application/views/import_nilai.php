    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Import Data Nilai US SMA IPA</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php
                            if ($this->session->flashdata('error')) {
                                echo $this->session->flashdata('error');
                            }
                            ?>
                            <h6><i>Template Import Excel: <span class="text-danger"><a href="<?php echo base_url('template_file/import_nilai_sma_ipa.xlsx') ?>">import_nilai_sma_ipa.xlsx</a></span></i></h6>
                            <div class="row" id="table-hover-row">
                                <?php if ($this->session->role_id == '1') { ?>
                                    <form method="post" action="<?php echo base_url('admin/importnilai/import_us_sma_ipa'); ?>" class="" enctype="multipart/form-data">
                                    <?php } else { ?>
                                        <form method="post" action="<?php echo base_url('importnilai/import_us_sma_ipa'); ?>" class="" enctype="multipart/form-data">
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

                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Import Data Nilai US SMA IPS</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php
                            if ($this->session->flashdata('error')) {
                                echo $this->session->flashdata('error');
                            }
                            ?>
                            <h6><i>Template Import Excel: <span class="text-danger"><a href="<?php echo base_url('template_file/import_nilai_sma_ips.xlsx') ?>">import_nilai_sma_ips.xlsx</a></span></i></h6>
                            <div class="row" id="table-hover-row">
                                <?php if ($this->session->role_id == '1') { ?>
                                    <form method="post" action="<?php echo base_url('admin/importnilai/import_us_sma_ips'); ?>" class="" enctype="multipart/form-data">
                                    <?php } else { ?>
                                        <form method="post" action="<?php echo base_url('importnilai/import_us_sma_ips'); ?>" class="" enctype="multipart/form-data">
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