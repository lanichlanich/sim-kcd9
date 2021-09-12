<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item <?php if ($this->uri->segment(2) == "dashboard") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/dashboard"><i class="feather icon-grid"></i><span class="menu-title">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-archive"></i><span class="menu-title">Data KCD-IX</span></a>
            <ul class="menu-content">
                <li class="<?php if ($this->uri->segment(2) == "daftarsekolah") {
                                echo "active";
                            } ?>"><a href="<?php echo base_url() ?>admin/daftarsekolah"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Fixed navbar">Daftar Sekolah</span></a>
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