<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item <?php if ($this->uri->segment(1) == "dashboard") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>dashboard"><i class="feather icon-grid"></i><span class="menu-title">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Data Sekolah</span></a>
            <ul class="menu-content">

                <li class="<?php if ($this->uri->segment(2) == "index") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>profilesekolah/index"><i class="feather icon-flag"></i><span class="menu-item" data-i18n="Fixed navbar">Profile Sekolah</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "data_kurikulum") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>profilesekolah/data_kurikulum"><i class="feather icon-flag"></i><span class="menu-item" data-i18n="Floating navbar">Data Kurikulum</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "data_siswa") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>profilesekolah/data_siswa"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Floating navbar">Data Siswa</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "data") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>ijazah/data"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Floating navbar">Data Ijazah</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "nilai") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>nilai"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Floating navbar">Data Nilai</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "data_rombel") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>profilesekolah/data_rombel"><i class="feather icon-layers"></i><span class="menu-item" data-i18n="Floating navbar">Data Rombel</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "data_guru") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>profilesekolah/data_guru"><i class="feather icon-user-check"></i><span class="menu-item" data-i18n="Floating navbar">Data Guru</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "data_tendik") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>profilesekolah/data_tendik"><i class="feather icon-user-check"></i><span class="menu-item" data-i18n="Floating navbar">Data Tendik</span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-upload"></i><span class="menu-title">Import Data</span></a>
            <ul class="menu-content">
                <li class="<?php if ($this->uri->segment(1) == "importprofile") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>importprofile"><i class="feather icon-upload"></i><span class="menu-item">Import Profile</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "importsiswa") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>importsiswa"><i class="feather icon-upload"></i><span class="menu-item">Import Siswa</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "importguru") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>importguru"><i class="feather icon-upload"></i><span class="menu-item">Import Guru</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "importtendik") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>importtendik"><i class="feather icon-upload"></i><span class="menu-item">Import Tendik</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "importijazah") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>importijazah"><i class="feather icon-upload"></i><span class="menu-item">Import Ijazah</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "importnilai") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>importnilai"><i class="feather icon-upload"></i><span class="menu-item">Import Nilai</span></a>
                </li>
            </ul>
        </li>
    </ul>
</div>