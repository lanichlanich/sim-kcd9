<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item <?php if ($this->uri->segment(1) == "dashboard") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>dashboard"><i class="feather icon-grid"></i><span class="menu-title">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Data Sekolah</span></a>
            <ul class="menu-content">

                <li class="<?php if ($this->uri->segment(1) == "profilesekolah") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>profilesekolah"><i class="feather icon-flag"></i><span class="menu-item" data-i18n="Fixed navbar">Profile Sekolah</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "daftarsiswa") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>daftarsiswa"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Floating navbar">Daftar Siswa</span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-upload"></i><span class="menu-title">Import Data</span></a>
            <ul class="menu-content">
                <li class="<?php if ($this->uri->segment(1) == "importsiswa") {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url() ?>importsiswa"><i class="feather icon-upload"></i><span class="menu-item">Import Siswa</span></a>
                </li>
                <li class="<?php if ($this->uri->segment(1) == "importptk") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>importptk"><i class="feather icon-upload"></i><span class="menu-item">Import PTK</span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-settings"></i><span class="menu-title">Data KCD-IX</span></a>
            <ul class="menu-content">
                <li class="<?php if ($this->uri->segment(1) == "daftarsekolah") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>daftarsekolah"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Fixed navbar">Daftar Sekolah</span></a>
                </li>
            </ul>
        </li>
    </ul>
</div>