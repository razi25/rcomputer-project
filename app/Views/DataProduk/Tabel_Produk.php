<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">
    <script src="<?= base_url() ?>/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>

    <div class="pagetitle">
        <h1>Data Tables Stok Barang</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data Produk</li>
                <li class="breadcrumb-item active">Table Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stok Barang</h5>

                    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
                    <div style="height:50px;"></div>
                    <?php if (session()->getFlashdata('info')) : ?>
                        <div class="alert alert-success hide-it" role="alert">
                            <?= session()->getFlashdata('info'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('delete')) : ?>
                        <div class="alert alert-danger hide-it" role="alert">
                            <?= session()->getFlashdata('delete'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('order')) : ?>
                        <div class="alert alert-success hide-it" role="alert">
                            <?= session()->getFlashdata('order'); ?>
                        </div>
                    <?php endif; ?>
                    <script>
                        $(function() {
                            $(".hide-it").hide(10000);
                        });
                    </script>
                    <table class="table table-striped table-bordered table-hover datatable" id="datable">
                        <thead>

                            <th>No.</th>
                            <th width="10%">Date</th>
                            <th>Kode</th>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th width="10%">Sub Kategori</th>
                            <th>Keterangan</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th width="15%">Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($produk as $p) : ?>

                                <tr>

                                    <th scope="row"><?= $i++; ?></th>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><?= $p->Tanggal; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>">RCOM<?= $p->kode; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><?= $p->produk; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><?= $p->kategori; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><?= $p->subkategori; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><?= $p->keterangan; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><?= $p->stok; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><?= $p->harga; ?></a></td>
                                    <td><a href="#" class="btn btn-detail" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><img src="/imgproduk/<?= $p->gambar; ?>" width="50"></a></td>
                                    <?= $this->include('DataProduk/Crud_Produk/Detail'); ?>
                                    <td>
                                        <a href="#" class="btn btn-outline-primary btn-lg btn-edit" data-kode="<?= $p->kode; ?>" data-Tanggal="<?= $p->Tanggal; ?>" data-produk="<?= $p->produk; ?>" data-kategori_id="<?= $p->kategori_id; ?>" data-subkategori_id="<?= $p->subkategori_id; ?>" data-keterangan="<?= $p->keterangan; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>" data-gambarlama="<?= $p->gambar; ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a href="#" class="btn btn-outline-success btn-lg btn-order" data-kode="<?= $p->kode; ?>" data-produk="<?= $p->produk; ?>" data-stok="<?= $p->stok; ?>" data-harga="<?= $p->harga; ?>" data-gambar="<?= $p->gambar; ?>"> <i class="bi bi-cart-plus"></i></a>
                                        <a href="#" class="btn btn-danger btn-lg btn-delete" data-kode="<?= $p->kode; ?>" data-gambar="<?= $p->gambar; ?>"><i class="fa fa-trash"></i></a>

                                        <?= $this->include('DataProduk/Crud_Produk/Button'); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?= $this->include('DataProduk/Crud_Produk/Create'); ?>
            </div>
        </div>
    </div>
    </section>


</main><!-- End #main -->

<?= $this->endSection(); ?>