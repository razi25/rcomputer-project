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
                <li class="breadcrumb-item"><a href="<?= base_url('/Message/index') ?>">Data Pesan</a></li>
                <li class="breadcrumb-item active">Pesan Masuk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="row">
        <form action="/Message/update/<?= $message->id; ?>" method="post">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">From : <?= $message->nama; ?>
                            <img src="<?= base_url() ?>/img/<?= $message->user_image; ?>" style="float:right;width:80px;height:80px;" alt="Profile" class="rounded-circle">
                            <br>
                            <span> <?= $message->date_in; ?></span>
                        </h5>

                        <!-- < !-- Quill Editor Bubble -->
                        <h4>SUBJECT : <?= $message->subjek; ?></h4>

                        <div class="col-lg-12">

                            <textarea class="form-control" style="position:relative;" rows="10" readonly><?= $message->pesan; ?></textarea>

                        </div>
                        <!-- < !-- End Quill Editor Bubble -->
                        <br>
                        <input type="hidden" name="id" class="id" value="<?= $message->id; ?>">
                        <button type="submit" class="btn btn-danger">BACK</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </section>
</main>

<!--End #main -->
<?= $this->endSection(); ?> -->