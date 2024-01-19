<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h3 class="card-title">DataTable with default features</h3> -->
                    <a href="<?= site_url('barang/add') ?>" class="btn btn-info float-right"><i class="fa fa-plus">
                        </i> Tambah Barang
                    </a><br>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
								<th>QR</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($barang as $key => $data) { ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['kode_barang'] ?></td>
									<td><img src="<?= base_url()?>assets/uploads/qrcode/<?= $data['qr_code']?>" width="120" height="120"></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td>
										<a href="#" type="button" class="btn bg-gradient-primary">EDIT</a>
										<a href="<?= site_url('barang/delete')?>" onclick="return confirm('Yakin ingin menghapus data?')"  type="button" class="btn bg-gradient-danger">DELETE</a>
									</td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
