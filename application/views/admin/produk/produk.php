<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Semua Produk</h1>
    <p class="mb-4">Menampilkan semua produk dari toko baju MasCitra.com</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('admin/tambah_produk'); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 30px;">No</th>
                            <th>Nama produk</th>
                            <th>Harga</th>
                            <!-- <th>Stok</th> -->
                            <th>Satuan</th>
                            <th>Berat</th>
                            <th style="width: 70px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($produk as $p) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $p['nama_produk']; ?></td>
                                <td><?= $p['harga']; ?></td>

                                <td><?= $p['satuan']; ?></td>
                                <td><?= $p['berat']; ?></td>
                                <td>
                                    <a class="badge badge-success" href="">edit</a>
                                    <a class="badge badge-danger" href="">delete</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->