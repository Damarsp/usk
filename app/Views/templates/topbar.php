<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url(); ?>/assets/production/images/<?= user()->user_image; ?>" alt=""><?= user()->username; ?>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>