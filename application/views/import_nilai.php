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
                                        <h4 class="mb-1">IMPORT DATA NILAI JURUSAN <?php echo $n->jurusan; ?></h4>
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
                                                <button class="btn btn-info mb-2" type="submit">Download Template Nilai Jurusan <?php echo $n->jurusan ?></button>
                                            </form>
                                            <!-- Upload data Nilai -->
                                            <div class="row mb-2">
                                                <div class="col-md-4 mb-1">
                                                    <input type="file" name="nilai">
                                                </div>
                                                <div class="col-md-8 mb-1">
                                                    <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
                                                </div>
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