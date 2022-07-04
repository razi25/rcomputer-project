<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">
    <script src="<?= base_url() ?>/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>

    <div class="pagetitle">
        <h1>Data Tables Service Barang</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data Servis</li>
                <li class="breadcrumb-item active">Table Servis</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Servis Barang</h5>

                    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
                    <div style="height:50px;"></div>

                    <table class="table table-striped table-bordered table-hover datatable" id="datable">
                        <thead>

                            <th>No.</th>
                            <th width="8%">Date In</th>
                            <th>Pemilik</th>
                            <th>Barang</th>
                            <th>Kerusakan</th>
                            <th>Perbaikan</th>
                            <th>Date Out</th>
                            <th>Biaya</th>
                            <th>Keterangan</th>
                            <th width="15%">Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($servis as $s) : ?>

                                <tr>

                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $s->date_in; ?></td>
                                    <td><?= $s->pemilik; ?></td>
                                    <td><?= $s->barang; ?></td>
                                    <td><?= $s->kerusakan; ?></td>
                                    <td><?= $s->perbaikan; ?></td>
                                    <td><?= $s->date_out; ?></td>
                                    <td><?= $s->biaya; ?></td>
                                    <td><?php if ($s->keterangan == 'pending') {
                                            $keterangan = 'bg-warning';
                                        } else if ($s->keterangan == 'rejected') {
                                            $keterangan = 'bg-danger';
                                        } else {
                                            $keterangan = 'bg-success';
                                        } ?>
                                        <span class="badge <?= $keterangan; ?>"><?= $s->keterangan; ?></span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-lg btn-edit" data-id="<?= $s->id; ?>" data-date_in="<?= $s->date_in; ?>" data-pemilik="<?= $s->pemilik; ?>" data-barang="<?= $s->barang; ?>" data-kerusakan="<?= $s->kerusakan; ?>" data-perbaikan="<?= $s->perbaikan; ?>" data-date_out="<?= $s->date_out; ?>" data-biaya="<?= $s->biaya; ?>" data-keterangan="<?= $s->keterangan; ?>"><i class="bi bi-tools"></i></a>
                                        <a href="#" class="btn btn-danger btn-lg btn-delete" data-id="<?= $s->id; ?>"><i class="fa fa-trash"></i></a>
                                        <?= $this->include('DataServis/Crud_Servis/Button'); ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?= $this->include('DataServis/Crud_Servis/Create'); ?>
            </div>
        </div>
    </div>
    </section>


</main><!-- End #main -->

<?= $this->endSection(); ?>