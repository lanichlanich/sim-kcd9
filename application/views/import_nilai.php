    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Start Data Nilai -->
                <?php foreach ($mapel as $n) : ?>
                    <section id="collapsible">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div class="card-header">
                                        <h4 class="mb-1">Import Data Nilai Jurusan <?php echo $n->jurusan; ?></h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- Generate Template -->
                                            <form action="<?php echo base_url(); ?>nilai/download_template" method="post">
                                                <input type="hidden" name="tahun_lulus" value="<?php echo $n->tahun_lulus; ?>">
                                                <input type="hidden" name="jurusan" value="<?php echo $n->jurusan; ?>">
                                                <input type="hidden" name="mapel_01" value="<?php echo $n->mapel_01; ?>">
                                                <input type="hidden" name="mapel_02" value="<?php echo $n->mapel_02; ?>">
                                                <input type="hidden" name="mapel_03" value="<?php echo $n->mapel_03; ?>">
                                                <input type="hidden" name="mapel_04" value="<?php echo $n->mapel_04; ?>">
                                                <input type="hidden" name="mapel_05" value="<?php echo $n->mapel_05; ?>">
                                                <input type="hidden" name="mapel_06" value="<?php echo $n->mapel_06; ?>">
                                                <input type="hidden" name="mapel_07" value="<?php echo $n->mapel_07; ?>">
                                                <input type="hidden" name="mapel_08" value="<?php echo $n->mapel_08; ?>">
                                                <input type="hidden" name="mapel_09" value="<?php echo $n->mapel_09; ?>">
                                                <input type="hidden" name="mapel_10" value="<?php echo $n->mapel_10; ?>">
                                                <input type="hidden" name="mapel_11" value="<?php echo $n->mapel_11; ?>">
                                                <input type="hidden" name="mapel_12" value="<?php echo $n->mapel_12; ?>">
                                                <input type="hidden" name="mapel_13" value="<?php echo $n->mapel_13; ?>">
                                                <input type="hidden" name="mapel_14" value="<?php echo $n->mapel_14; ?>">
                                                <input type="hidden" name="mapel_15" value="<?php echo $n->mapel_15; ?>">
                                                <input type="hidden" name="mapel_16" value="<?php echo $n->mapel_16; ?>">
                                                <input type="hidden" name="mapel_17" value="<?php echo $n->mapel_17; ?>">
                                                <input type="hidden" name="mapel_18" value="<?php echo $n->mapel_18; ?>">
                                                <input type="hidden" name="mapel_19" value="<?php echo $n->mapel_19; ?>">
                                                <input type="hidden" name="mapel_20" value="<?php echo $n->mapel_20; ?>">
                                                <?php if ($n->id % 2 == 0) { ?>
                                                    <button class="btn btn-info mb-2" type="submit">Download Template Nilai Jurusan <?php echo $n->jurusan ?></button>
                                                <?php } else { ?>
                                                    <button class="btn btn-danger mb-2" type="submit">Download Template Nilai Jurusan <?php echo $n->jurusan ?></button>
                                                <?php } ?>
                                            </form>
                                            <!-- Upload data Nilai -->
                                            <div class="row mb-2">
                                                <?php if ($this->session->role_id == '1') { ?>
                                                    <form method="post" action="<?php echo base_url('admin/importnilai/import_nilai'); ?>" class="" enctype="multipart/form-data">
                                                    <?php } else { ?>
                                                        <form method="post" action="<?php echo base_url('importnilai/import_nilai'); ?>" class="" enctype="multipart/form-data">
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
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endforeach; ?>
                <!-- End Data Nilai -->
            </div>
        </div>
    </div>