<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="nilai_sma_ipa" class="card">
                <div class="card-content">
                    <div class="card-header bg-primary">
                        <h4 class="mb-1" style="color: white;">DATA NILAI SMK</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-hover display nowrap mb-0" id="smk">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>NISN</th>
                                            <th>P AGAMA</th>
                                            <th>PPKN</th>
                                            <th>B INDO</th>
                                            <th>PENJAS</th>
                                            <th>SENI BUDAYA</th>
                                            <th>MATEMATIKA</th>
                                            <th>B INGGRIS</th>
                                            <th>KKPI</th>
                                            <th>KEWIRAUSAHAAN</th>
                                            <th>IPA</th>
                                            <th>IPS</th>
                                            <th>FISIKA</th>
                                            <th>KIMIA</th>
                                            <th>MULOK</th>
                                            <th>DASAR KEJURUAN</th>
                                            <th>KOMPETENSI KEJURUAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($nilai_smk as $k) : ?>
                                            <tr>
                                                <td><?php echo $k->nama; ?></td>
                                                <td><?php echo $k->nisn; ?></td>
                                                <td><?php echo $k->p_agama; ?></td>
                                                <td><?php echo $k->ppkn; ?></td>
                                                <td><?php echo $k->b_indo; ?></td>
                                                <td><?php echo $k->penjas; ?></td>
                                                <td><?php echo $k->seni_budaya; ?></td>
                                                <td><?php echo $k->matematika; ?></td>
                                                <td><?php echo $k->b_inggris; ?></td>
                                                <td><?php echo $k->kkpi; ?></td>
                                                <td><?php echo $k->kewirausahaan; ?></td>
                                                <td><?php echo $k->ipa; ?></td>
                                                <td><?php echo $k->ips; ?></td>
                                                <td><?php echo $k->fisika; ?></td>
                                                <td><?php echo $k->kimia; ?></td>
                                                <td><?php echo $k->mulok; ?></td>
                                                <td><?php echo $k->dasar_kej; ?></td>
                                                <td><?php echo $k->kompetensi_kej; ?></td>
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