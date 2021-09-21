<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="nilai_sma_ipa" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA NILAI SMA IPA</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-hover display nowrap mb-0" id="nilai_sma_ipa">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>NISN</th>
                                            <th>P AGAMA</th>
                                            <th>PPKN</th>
                                            <th>B INDO</th>
                                            <th>MTK (UMUM)</th>
                                            <th>SEJARAH INDO</th>
                                            <th>B INGGRIS</th>
                                            <th>SENI BUDAYA</th>
                                            <th>PENJAS</th>
                                            <th>PKWU</th>
                                            <th>MULOK</th>
                                            <th>MTK MINAT</th>
                                            <th>BIOLOGI</th>
                                            <th>FISIKA</th>
                                            <th>KIMIA</th>
                                            <th>LM 1</th>
                                            <th>LM 2</th>

                                            <!-- 'b_indo' => $b_indo,
                    'mtk_umum' => $mtk_umum,
                    'sej_indo' => $sej_indo,
                    'b_inggris' => $b_inggris,
                    'seni_budaya' => $seni_budaya,
                    'penjas' => $penjas,
                    'pkwu' => $pkwu,
                    'mulok' => $mulok,
                    'mtk_minat' => $mtk_minat,
                    'biologi' => $biologi,
                    'fisika' => $fisika,
                    'kimia' => $kimia,
                    'lm_1' => $lm_1,
                    'lm_2' => $lm_2,
                    'npsn' => $npsn, -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($nilai_ipa as $a) : ?>
                                            <tr>
                                                <td><?php echo $a->nama; ?></td>
                                                <td><?php echo $a->nisn; ?></td>
                                                <td><?php echo $a->p_agama; ?></td>
                                                <td><?php echo $a->ppkn; ?></td>
                                                <td><?php echo $a->b_indo; ?></td>
                                                <td><?php echo $a->mtk_umum; ?></td>
                                                <td><?php echo $a->sej_indo; ?></td>
                                                <td><?php echo $a->b_inggris; ?></td>
                                                <td><?php echo $a->seni_budaya; ?></td>
                                                <td><?php echo $a->penjas; ?></td>
                                                <td><?php echo $a->pkwu; ?></td>
                                                <td><?php echo $a->mulok; ?></td>
                                                <td><?php echo $a->mtk_minat; ?></td>
                                                <td><?php echo $a->biologi; ?></td>
                                                <td><?php echo $a->fisika; ?></td>
                                                <td><?php echo $a->kimia; ?></td>
                                                <td><?php echo $a->lm_1; ?></td>
                                                <td><?php echo $a->lm_2; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="nilai_sma_ips" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA NILAI SMA IPS</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-hover display nowrap mb-0" id="nilai_sma_ips">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>NISN</th>
                                            <th>P AGAMA</th>
                                            <th>PPKN</th>
                                            <th>B INDO</th>
                                            <th>MTK (UMUM)</th>
                                            <th>SEJARAH INDO</th>
                                            <th>B INGGRIS</th>
                                            <th>SENI BUDAYA</th>
                                            <th>PENJAS</th>
                                            <th>PKWU</th>
                                            <th>MULOK</th>
                                            <th>GEOGRAFI</th>
                                            <th>SEJARAH</th>
                                            <th>EKONOMI</th>
                                            <th>SOSIOLOGI</th>
                                            <th>LM 1</th>
                                            <th>LM 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($nilai_ips as $s) : ?>
                                            <tr>
                                                <td><?php echo $s->nama; ?></td>
                                                <td><?php echo $s->nisn; ?></td>
                                                <td><?php echo $s->p_agama; ?></td>
                                                <td><?php echo $s->ppkn; ?></td>
                                                <td><?php echo $s->b_indo; ?></td>
                                                <td><?php echo $s->mtk_umum; ?></td>
                                                <td><?php echo $s->sej_indo; ?></td>
                                                <td><?php echo $s->b_inggris; ?></td>
                                                <td><?php echo $s->seni_budaya; ?></td>
                                                <td><?php echo $s->penjas; ?></td>
                                                <td><?php echo $s->pkwu; ?></td>
                                                <td><?php echo $s->mulok; ?></td>
                                                <td><?php echo $s->geografi; ?></td>
                                                <td><?php echo $s->sejarah; ?></td>
                                                <td><?php echo $s->ekonomi; ?></td>
                                                <td><?php echo $s->sosiologi; ?></td>
                                                <td><?php echo $s->lm_1; ?></td>
                                                <td><?php echo $s->lm_2; ?></td>
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