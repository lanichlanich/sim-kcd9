<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item <?php if ($this->uri->segment(2) == "dashboard") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/dashboard"><i class="feather icon-grid"></i><span class="menu-title">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Data Sekolah</span></a>
            <ul class="menu-content">

                <li class="<?php if ($this->uri->segment(3) == "index") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/profilesekolah/index"><i class="feather icon-flag"></i><span class="menu-item" data-i18n="Fixed navbar">Profile Sekolah</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(3) == "data_siswa") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/profilesekolah/data_siswa"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Floating navbar">Data Siswa</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(3) == "data_rombel") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/profilesekolah/data_rombel"><i class="feather icon-layers"></i><span class="menu-item" data-i18n="Floating navbar">Data Rombel</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(3) == "data_guru") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/profilesekolah/data_guru"><i class="feather icon-user-check"></i><span class="menu-item" data-i18n="Floating navbar">Data Guru</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(3) == "data_tendik") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/profilesekolah/data_tendik"><i class="feather icon-user-check"></i><span class="menu-item" data-i18n="Floating navbar">Data Tendik</span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-upload"></i><span class="menu-title">Import Data</span></a>
            <ul class="menu-content">
                <li class="<?php if ($this->uri->segment(2) == "importprofile") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/importprofile"><i class="feather icon-upload"></i><span class="menu-item">Import Profile</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "importsiswa") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>admin/importsiswa"><i class="feather icon-upload"></i><span class="menu-item">Import Siswa</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "importguru") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>admin/importguru"><i class="feather icon-upload"></i><span class="menu-item">Import Guru</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "importtendik") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>admin/importtendik"><i class="feather icon-upload"></i><span class="menu-item">Import Tendik</span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-archive"></i><span class="menu-title">Data KCD-IX</span></a>
            <ul class="menu-content">
                <li class="<?php if ($this->uri->segment(2) == "daftarsekolah") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/daftarsekolah"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Fixed navbar">Data Sekolah</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(2) == "daftarsiswa") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/daftarsiswa"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Fixed navbar">Data Siswa</span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-settings"></i><span class="menu-title">Settings</span></a>
            <ul class="menu-content">
                <li class="<?php if ($this->uri->segment(3) == "informasi") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/settings/informasi"><i class="feather icon-info"></i><span class="menu-item" data-i18n="Fixed navbar">Informasi</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(3) == "pengguna") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/profilesekolah/pengguna"><i class="feather icon-user"></i><span class="menu-item" data-i18n="Fixed navbar">Pengguna</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(3) == "reset_password") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/settings/reset_password"><i class="fa fa-key"></i><span class="menu-item" data-i18n="Fixed navbar">Reset Passowrd</span></a>
                </li>
            </ul>
        </li>
    </ul>
</div>