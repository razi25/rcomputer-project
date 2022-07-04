<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<script src="<?= base_url() ?>/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data User</li>
                <li class="breadcrumb-item active">Detail User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <form action="/Admin/updatestatus/<?= $user->userid; ?>" method="post" enctype="multipart/form-data">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= base_url('img/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?= $user->username; ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h4><?= $user->username; ?></h4>
                                        </li>

                                        <li class="list-group-item"><?= $user->email; ?></li>

                                        <?php if ($user->active == '1') {
                                            $active = 'Active';
                                        } else {
                                            $active = 'Non Active';
                                        } ?>

                                        <select class="form-select" name="status" id="status">
                                            <option value="<?= $user->active; ?>" selected style='display:none;'> <?= $active; ?></option>
                                            <option value="1">Active</option>
                                            <option value="0">Non Active</option>

                                        </select>

                                        <li class="list-group-item">
                                            <span class="badge bg-<?= ($user->name == 'admin') ? 'success' : 'primary' ?>"><?= $user->name; ?></span>
                                        </li>
                                        <input type="hidden" name="userid" value="<?= $user->userid; ?>">
                                        <li class="list-group-item"><a href="<?= base_url('admin'); ?>">&laquo;back to user list</a>
                                            <button type="submit" id="submit" value="submit" class="btn btn-success" style="float: right;display:none;">UPDATE</button>
                                        </li>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                var status = document.getElementById("status").value;
                $("#status").change(function() {
                    // foo is the id of the other select box 
                    if ($(this).val() != status) {
                        $("#submit").show();
                    } else {
                        $("#submit").hide();
                    }
                });
            });
        </script>
    </section>
</main><!-- End #main -->


<?= $this->endSection(); ?>