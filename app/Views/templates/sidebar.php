<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <?php if (in_groups('admin')) : ?>
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/dashboard">
                        <i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/siswa">
                        <i class="fa fa-users"></i> Data Siswa <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/datapetugas">
                        <i class="fa fa-cogs"></i> Data Petugas <span class=" fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/datakelas">
                        <i class="fa fa-slideshare"></i> Data Kelas <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/dataspp">
                        <i class="fa fa-pencil-square-o"></i> Data SPP <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/pembayaran">
                        <i class="fa fa-credit-card"></i> Transaksi Pembayaran <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/history">
                        <i class="fa fa-history"></i> History Pembayaran <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-print"></i> Generate Laporan <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="menu_section">
            <h3>Menu Logout</h3>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url('logout'); ?>">
                        <i class="fa fa-sign-out pull-left"></i> Logout <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (in_groups('petugas')) : ?>
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/dashboard">
                        <i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-credit-card"></i> Transaksi Pembayaran <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-history"></i> History Pembayaran <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="menu_section">
            <h3>Menu Logout</h3>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url('logout'); ?>">
                        <i class="fa fa-sign-out pull-left"></i> Logout <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (in_groups('user')) : ?>
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url(); ?>/dashboard">
                        <i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav side-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-history"></i> History Pembayaran <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="menu_section">
            <h3>Menu Logout</h3>
            <ul class="nav side-menu">
                <li>
                    <a href="<?= base_url('logout'); ?>">
                        <i class="fa fa-sign-out pull-left"></i> Logout <span class="fa fa-chevron"></span>
                    </a>
                </li>
            </ul>
        </div>
    <?php endif; ?>
</div>