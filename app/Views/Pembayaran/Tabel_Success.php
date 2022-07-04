<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<script src="<?= base_url() ?>/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>

<main id="main" class="main">


    <div class="pagetitle">
        <h1>Data Pesanan Success</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data Pesanan</li>
                <li class="breadcrumb-item active">Table Transaksi Success</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pesanan Barang Success</h5>
                    <a href="<?= base_url('/pesanan'); ?>" class="btn btn-warning mb-2">Table Pesanan</a>
                    <?php if (session()->getFlashdata('Status')) : ?>
                        <div class="alert alert-success hide-it" role="alert">
                            <?= session()->getFlashdata('Status'); ?>

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
                            <th>ID</th>
                            <th width="8%">Date</th>
                            <th>Kode Produk</th>
                            <th>Produk</th>
                            <th>Pelanggan</th>
                            <th>Jumlah</th>
                            <th>Alamat</th>
                            <th>payment</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Total</th>
                            <th>Date Out</th>

                            <th>Gambar</th>
                            <th>Admin</th>
                            <th width="10%">Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pembayaran as $po) : ?>

                                <tr>

                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $po->id_order; ?></td>
                                    <td><?= $po->date_in; ?></td>
                                    <td>RCOM<?= $po->kode_id; ?></td>
                                    <td><?= $po->produk; ?></td>
                                    <td><?= $po->pelanggan; ?></td>
                                    <td><?= $po->jumlah; ?></td>
                                    <td><?= $po->alamat; ?></td>
                                    <td><?= $po->payment; ?></td>
                                    <td><?= $po->harga; ?></td>
                                    <td><?= $po->diskon; ?></td>
                                    <td><?= $po->total; ?></td>
                                    <td><?= $po->date_out; ?></td>
                                    <td><img src="/imgproduk/<?= $po->image; ?>" width="50"></td>
                                    <td><?= $po->admin; ?></td>
                                    <td>

                                        <a href="#" class="btn btn-danger btn-deleted" data-id="<?= $po->id; ?>"><i class="fa fa-trash"></i></a>
                                        <?= $this->include('Pesanan/Button'); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </section>


</main><!-- End #main -->

<?= $this->endSection(); ?>