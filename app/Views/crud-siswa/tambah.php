<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="x_panel">
            <div class="page-title">
                <div class="title_left">
                    <h1>Data Siswa</h1>
                    <br>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">

                    <div class="x_content">

                        <div class="row">
                            <div class="col-sm-12">
                                <?= csrf_field(); ?>
                                <form action="<?= base_url('siswa/simpan') ?>" method="POST">
                                    <div class="form-group">
                                        <label for="nisn">Nisn</label>
                                        <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn">
                                    </div>
                                    <div class="form-group">
                                        <label for="nis">Nis</label>
                                        <input type="text" class="form-control" name="nis" id="nis" placeholder="nis">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                                    </div>
                                    <!-- buat tes aja, nanti tinggal dibenerin kayak yg kemaren -->
                                    <input type="number" name="id_kelas" value="1">
                                    <input type="number" name="id_spp" value="1">

                                    <br>
                                    <button type="submit" class="btn btn-info mb-5" name="submit">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>