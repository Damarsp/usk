<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="x_panel">
            <div class="page-title">
                <div class="title_left">
                    <h1>Data Petugas</h1>
                    <br>
                    <button type="button" class="btn btn-round btn-primary">Tambah</button>
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
                                                <th>Id Spp</th>
                                                <th>Tahun</th>
                                                <th>Nominal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td>1029</td>
                                                <td>a</td>
                                                <td>1</td>
                                                <td>
                                                    <a class="btn btn-round btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                                    <a class="btn btn-round btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                                                </td>
                                            </tr>
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