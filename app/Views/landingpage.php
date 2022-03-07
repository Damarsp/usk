<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url(); ?>/lp/css/styles.css" !importart>

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title><?= $title; ?></title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid" style="height: calc(3rem + 1rem) !important;">
            <div>
                <a class="nav__logo">JUDUL</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="<?= base_url('login'); ?>" class="nav__link">Login</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home" style="row-gap: 7rem; padding : 8rem 0 2rem;
            max-width : 1064px
            !important;
            ">
            <div class="home__data">
                <h1 class="home__title">Selamat <br> Datang Di Website <br> <span class="home__title-color">JUDUL</span></h1>
                <a href="<?= base_url('login'); ?>" class="button">Login</a>

            </div>

            <div class="home__social">
                <a href="https://instagram.com/damar_z1" class="home__social-icon"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#" class="home__social-icon"><i class='bx bxl-facebook-circle'></i></a>
            </div>

            <div class="home__img">
                <img src="<?= base_url(); ?>/lp/img/lp.svg" x="50" y="100">
                <center>
                    <h4>SLOGAN BIAR KEREN</h4>
                </center>
            </div>
        </section>



        <!--===== FOOTER =====-->
        <!-- style="padding: 12px 0; background-color : #22577E; color : #F5F2E7 !important;
            " -->
        <footer class="footer">
            <center>
                <p class="footer__copy">&#169; Damar Saputra - 2022 </p>
            </center>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="<?= base_url(); ?>/lp/js/main.js"></script>
</body>

</html>