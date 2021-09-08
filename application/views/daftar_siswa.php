    <!-- BEGIN: Content-->
    <div class="app-content content">
    	<div class="content-overlay"></div>
    	<div class="header-navbar-shadow"></div>
    	<div class="content-wrapper">
    		<div class="content-body">
    			<!-- Description -->
    			<section id="description" class="card">
    				<div class="card-header">
    					<?php $rows = $this->db->query("SELECT * FROM pengguna where nama_pengguna = '" . $this->session->nama_pengguna . "'")->row_array(); ?>
    					<h4 class="card-title">Data Siswa <?= $rows['sekolah']; ?></h4>
    				</div>
    				<div class="card-content">
    					<div class="card-body">
    						<table class="table table-hover display nowrap mb-0" id="daftar_siswa">
    							<thead>
    								<tr>
    									<th scope="col">No</th>
    									<th scope="col">Nama Siswa</th>
    									<th scope="col">NISN</th>
    									<th scope="col">NIK</th>
    									<th scope="col">Rombel</th>
    									<th scope="col">Sekolah</th>
    								</tr>
    							</thead>
    							<tbody>
    								<?php foreach ($daftar_siswa as $row) : ?>
    									<tr>
    										<td></td>
    										<td><?= $row->nama ?></td>
    										<td><?= $row->nisn ?></td>
    										<td><?= $row->nik ?></td>
    										<td><?= $row->rombel ?></td>
    										<td><?= $row->npsn ?></td>
    									</tr>
    								<?php endforeach; ?>

    							</tbody>
    						</table>
    					</div>
    				</div>
    			</section>
    			<!--/ Description -->


    		</div>
    	</div>
    </div>
    <!-- END: Content-->
