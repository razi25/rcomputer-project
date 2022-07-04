<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<script src="<?= base_url() ?>/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>

<main id="main" class="main">


    <div class="pagetitle">
        <h1>Pesan Masuk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data Pesan</li>
                <li class="breadcrumb-item active">Pesan Masuk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Pesan</h5>

                    <table class="table table-striped table-borderless table-hover datatable" id="datable">
                        <!-- <thead>


                            <th width="8%">Date</th>
                            <th width="5%">status</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subjek</th>



                        </thead> -->
                        <tbody>

                            <?php foreach ($message as $ms) : ?>


                                <tr>


                                    <td width="8%"><?= $ms->date_in; ?></td>
                                    <td width="4%" style="text-align:center"><?php if ($ms->status_msg == '1') {
                                                                                    $status_msg = 'bx bx-envelope text-warning';
                                                                                } else {
                                                                                    $status_msg = 'bx bx-envelope-open text-success';
                                                                                } ?>
                                        <span class="<?= $status_msg; ?> fa-2x"></span>
                                    </td>


                                    <td> <a href="#" class="btn btn-read" data-id_msg="<?= $ms->id_msg; ?>" data-date_in="<?= $ms->date_in; ?>" data-nama="<?= $ms->nama; ?>" data-subjek="<?= $ms->subjek; ?>" data-pesan="<?= $ms->pesan; ?>" data-status="<?= $ms->status; ?>" data-user_image="<?= $ms->user_image; ?>"><?= $ms->nama; ?></a></td>
                                    <td> <a href="#" class="btn btn-read" data-id_msg="<?= $ms->id_msg; ?>" data-date_in="<?= $ms->date_in; ?>" data-nama="<?= $ms->nama; ?>" data-subjek="<?= $ms->subjek; ?>" data-pesan="<?= $ms->pesan; ?>" data-status="<?= $ms->status; ?>" data-user_image="<?= $ms->user_image; ?>"><?= $ms->email; ?></a></td>
                                    <td><a href="#" class="btn btn-read" data-id_msg="<?= $ms->id_msg; ?>" data-date_in="<?= $ms->date_in; ?>" data-nama="<?= $ms->nama; ?>" data-subjek="<?= $ms->subjek; ?>" data-pesan="<?= $ms->pesan; ?>" data-status="<?= $ms->status; ?>" data-user_image="<?= $ms->user_image; ?>"> <?= $ms->subjek; ?></a></td>



                                    <td width="4%">
                                        <a href="#" class="btn btn-outline-danger btn-delete" data-id_msg="<?= $ms->id_msg; ?>"><i class="fa fa-trash"></i></a>
                                        <?= $this->include('Message/Button'); ?>
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
<style>
    table tr td a {
        display: block;
        height: 100%;
        width: 100%;
    }

    table tr td {
        padding-left: 0;
        padding-right: 0;
    }
</style>
<?= $this->endSection(); ?>