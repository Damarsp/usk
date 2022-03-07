<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="jumbotron mt-3">
                <h1>Selamat datang, <?= user()->username; ?></h1>
                <br>
                <h1 class="display-4">JUDUL</h1>
                <h3>SLOGAN</h3>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?= $this->endSection(); ?>