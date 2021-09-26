<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Start Data Jurusan dan Mapel -->
            <section id="collapsible">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card collapse-icon accordion-icon-rotate">
                            <div class="card-header bg-primary">
                                <h4 class="mb-1" style="color: white;">DATA JURUSAN DAN MATA PELAJARAN</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover display nowrap mb-0" id="sekolah">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Nama Sekolah</th>
                                                    <th>Jurusan</th>
                                                    <th>Tahun Lulus</th>
                                                    <th>Mapel 01</th>
                                                    <th>Mapel 02</th>
                                                    <th>Mapel 03</th>
                                                    <th>Mapel 04</th>
                                                    <th>Mapel 05</th>
                                                    <th>Mapel 06</th>
                                                    <th>Mapel 07</th>
                                                    <th>Mapel 08</th>
                                                    <th>Mapel 09</th>
                                                    <th>Mapel 10</th>
                                                    <th>Mapel 11</th>
                                                    <th>Mapel 12</th>
                                                    <th>Mapel 13</th>
                                                    <th>Mapel 14</th>
                                                    <th>Mapel 15</th>
                                                    <th>Mapel 16</th>
                                                    <th>Mapel 17</th>
                                                    <th>Mapel 18</th>
                                                    <th>Mapel 19</th>
                                                    <th>Mapel 20</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($jurmap as $m) : ?>
                                                    <tr class="text-center">
                                                        <td><?php echo $m->sekolah; ?></td>
                                                        <td><?php echo $m->jurusan; ?></td>
                                                        <td><?php echo $m->tahun_lulus; ?></td>
                                                        <td><?php echo $m->mapel_01; ?></td>
                                                        <td><?php echo $m->mapel_02; ?></td>
                                                        <td><?php echo $m->mapel_03; ?></td>
                                                        <td><?php echo $m->mapel_04; ?></td>
                                                        <td><?php echo $m->mapel_05; ?></td>
                                                        <td><?php echo $m->mapel_06; ?></td>
                                                        <td><?php echo $m->mapel_07; ?></td>
                                                        <td><?php echo $m->mapel_08; ?></td>
                                                        <td><?php echo $m->mapel_09; ?></td>
                                                        <td><?php echo $m->mapel_10; ?></td>
                                                        <td><?php echo $m->mapel_11; ?></td>
                                                        <td><?php echo $m->mapel_12; ?></td>
                                                        <td><?php echo $m->mapel_13; ?></td>
                                                        <td><?php echo $m->mapel_14; ?></td>
                                                        <td><?php echo $m->mapel_15; ?></td>
                                                        <td><?php echo $m->mapel_16; ?></td>
                                                        <td><?php echo $m->mapel_17; ?></td>
                                                        <td><?php echo $m->mapel_18; ?></td>
                                                        <td><?php echo $m->mapel_19; ?></td>
                                                        <td><?php echo $m->mapel_20; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- End Data Jurusan dan Mapel -->
        </div>
    </div>
</div>
<!-- END: Content-->