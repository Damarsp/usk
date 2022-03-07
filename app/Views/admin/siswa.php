<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="x_panel">
            <div class="page-title">
                <div class="title_left">
                    <h1>Data Siswa</h1>
                    <br>
                    <a href="<?= base_url(''); ?>/siswa/tambah" class="btn btn-round btn-primary">Tambah Data</a>
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
                                <div class="card-box table-responsive">
                                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nisn</th>
                                                <th>Nis</th>
                                                <th>Nama</th>
                                                <th>Id Kelas</th>
                                                <th>Alamat</th>
                                                <th>No telp</th>
                                                <th>Id Spp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($siswa as $row) : ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $row['nisn'] ?></td>
                                                    <td><?= $row['nis'] ?></td>
                                                    <td><?= $row['nama'] ?></td>
                                                    <td><?= $row['alamat'] ?></td>
                                                    <td><?= $row['telp'] ?></td>
                                                    <td><?= $row['id_kelas'] ?></td>
                                                    <td><?= $row['id_spp'] ?></td>
                                                    <td>
                                                        <a class="btn btn-round btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                                        <a class="btn btn-round btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>