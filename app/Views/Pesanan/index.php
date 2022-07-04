<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<script src="<?= base_url() ?>/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>

<main id="main" class="main">


    <div class="pagetitle">
        <h1>Data Pesanan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data Pesanan</li>
                <li class="breadcrumb-item active">Table Pesanan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pesanan Barang</h5>
                    <a href="<?= base_url('/pembayaran'); ?>" class="btn btn-success mb-2">Tabel Success</a>

                    <?php if (session()->getFlashdata('Status')) : ?>
                        <div class="alert alert-danger hide-it" role="alert">
                            <?= session()->getFlashdata('Status'); ?>

                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('del')) : ?>
                        <div class="alert alert-danger hide-it" role="alert">
                            <?= session()->getFlashdata('del'); ?>
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
                            <th>Pembayaran</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th width="10%">Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pesanan as $o) : ?>

                                <tr>

                                    <th scope="row"><?= $i++; ?></th>
                                    <td>ORD<?= $o->id; ?></td>
                                    <td><?= $o->Tanggal; ?></td>
                                    <td>RCOM<?= $o->kode_id; ?></td>
                                    <td><?= $o->produk; ?></td>
                                    <td><?= $o->pelanggan; ?></td>
                                    <td><?= $o->jumlah; ?></td>
                                    <td><?= $o->alamat; ?></td>
                                    <td><?= $o->payment; ?></td>
                                    <td><?= $o->harga; ?></td>
                                    <td><?php if ($o->status == 'pending') {
                                            $status = 'bg-warning';
                                        } else if ($o->status == 'rejected') {
                                            $status = 'bg-danger';
                                        } else {
                                            $status = 'bg-success';
                                        } ?>
                                        <span class="badge <?= $status; ?>"><?= $o->status; ?></span>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('transaksi/' . $o->id); ?>" class="btn btn-outline-primary" data-id="<?= $o->id; ?>" data-kode="<?= $o->kode_id; ?>" data-Tanggal="<?= $o->Tanggal; ?>" data-produk="<?= $o->produk; ?>" data-pelanggan="<?= $o->pelanggan; ?>" data-alamat="<?= $o->alamat; ?>" data-status="<?= $o->status; ?>" data-jumlah="<?= $o->jumlah; ?>" data-harga="<?= $o->harga; ?>" data-payment="<?= $o->payment; ?>"> <i class="bi bi-basket3"></i></a>
                                        <a href="#" class="btn btn-danger btn-deleted" data-id="<?= $o->id; ?>"><i class="fa fa-trash"></i></a>
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