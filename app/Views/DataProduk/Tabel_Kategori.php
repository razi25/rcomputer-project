<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">
    <script src="<?= base_url() ?>/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
    <div class="pagetitle">
        <h1>Kategori Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content">


        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- Kategori -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="box-title">Kategori Utama</h3>
                        <div class="box-body">

                            <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New Kategori</button>

                            <table class="table table-striped table-bordered table-hover datatab">
                                <thead>
                                    <th>No.</th>
                                    <th>Kategori</th>
                                    <th width="20%">Aksi</th>

                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kategori as $k) : ?>

                                        <tr>

                                            <td><?= $i; ?></td>
                                            <td><a href="<?= base_url() ?>/Tabel_Kategori/<?= $k->id; ?>"><?= $k->kategori; ?></td></a>

                                            <td>
                                                <a href="#" class="btn btn-outline-primary btn-edit" data-id="<?= $k->id; ?>" data-kategori="<?= $k->kategori; ?>"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-delete" data-id="<?= $k->id; ?>"><i class="fa fa-trash"></i></a>
                                                <button type="button" class="btn btn-outline-success mb-2 btn-addsub" data-toggle="modal" data-target="#addModalSub" data-id="<?= $k->id; ?>" data-backdrop="false"> <i class="ri-add-circle-fill fa-lg"></i></button>
                                                <?= $this->include('DataProduk/Crud_Kategori/Button'); ?>
                                                <?= $this->include('DataProduk/Crud_SubKategori/Create'); ?>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                        </div>
                        <?= $this->include('DataProduk/Crud_Kategori/Create'); ?>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>




            <div class="col-md-6">

                <!-- Kategori -->

                <div class="card">
                    <div class="card-body">


                        <h3 class="box-title">Sub Kategori</h3>
                        <div class="box-body">



                            <div style="height:50px;"></div>
                            <table class="table table-striped table-bordered table-hover datatab">

                                <thead>

                                    <th>No.</th>
                                    <th>Sub Kategori</th>
                                    <th width="20%">Aksi</th>

                                </thead>
                                <tbody>


                                    <?php $i = 1; ?>

                                    <?php foreach ($subkategori as $kk) : ?>

                                        <tr>

                                            <td><?= $i; ?></td>
                                            <td><?= $kk->subkategori; ?></td>


                                            <td>
                                                <a href="#" class="btn btn-info btn-editsub" data-id_sub="<?= $kk->id_sub; ?>" data-subkategori="<?= $kk->subkategori; ?>" data-kategori_id="<?= $kk->kategori_id; ?>"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-deletesub" data-id_sub="<?= $kk->id_sub; ?>" data-kategori_id="<?= $kk->kategori_id; ?>"><i class="fa fa-trash"></i></a>
                                                <?= $this->include('DataProduk/Crud_SubKategori/Button'); ?>
                                            </td>

                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- jQuery 3 -->

</main><!-- End #main -->

<?= $this->endSection(); ?>