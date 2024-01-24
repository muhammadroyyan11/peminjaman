<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1>Data <?php //echo $judul; 
                                ?></h1> -->

            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Peminjaman Barang</li>
                    </ol> -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <?= form_open_multipart('barang/edit_action/'.$row->id, array('role' => 'form', 'id' => 'uploadForm')) ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit Barang</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <label>Nama Barang</label>
                                <input name="nama_barang" placeholder="Nama Barang" type="text" value="<?= $row->nama_barang ?>" class="form-control">
                            </div>
                            <div class="col-4">
                                <label>Stok</label>
                                <input name="stok" placeholder="Stok Barang" type="number" value="<?= $row->stok ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Kategori</label>
                                <!-- <input name="kategori" placeholder="Kategori" type="text" class="form-control"> -->
                                <select name="kategori" class="form-control">
                                    <option hidden value="">Pilih Kategori</option>
                                    <option value="kendaraan" <?= $row->kategori == 'kendaraan' ? 'selected' : '' ?>>Kendaraan</option>
                                    <option value="teknis" <?=$row->kategori == 'teknis' ? 'selected' : '' ?>>Peralatan Teknis</option>
                                    <option value="elektronik" <?=$row->kategori == 'elektronik' ? 'selected' : '' ?>>Elektronik</option>
                                    <option value="perpus" <?=$row->kategori == 'perpus' ? 'selected' : '' ?>>Perpustakaan</option>
                                    <option value="lain-lain" <?=$row->kategori == 'lain-lain' ? 'selected' : '' ?>>Lain-lain</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Tgl Masuk</label>
                                <input name="tgl_masuk" type="date" value="<?= $row->tgl_masuk ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Spesifikasi</label>
                        <!-- <input type="text" name="spesifikasi" class="form-control" placeholder="Spesifikasi"> -->
                        <textarea name="spesifikasi" id="" class="form-control" cols="30" rows="10"><?= $row->spesifikasi?></textarea>
                    </div>

                </div>
                <!-- /.card-body -->

            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Sertakan Foto</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Upload Foto</label>
                    </div>
                    <input type="file" name="gambarFile" id="file" require>
                    <div class="kotakUp" id="gambar">

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
    <?= form_close(); ?>
</section>
<!-- /.content -->
<script>
    $(document).on("input", ".numeric", function() {
        this.value = this.value.replace(/\D/g, '');
    });
</script>