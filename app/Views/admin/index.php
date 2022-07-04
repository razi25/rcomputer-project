<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data User</li>
                <li class="breadcrumb-item active">Table User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data User</h5>

                    <table class="table table-striped table-bordered table-hover datatable" id="datable">
                        <thead>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th width="8%" style="text-align:center">Job</th>
                            <th width="5%" style="text-align:center">Role</th>
                            <th width="5%">Aktif</th>
                            <th width="10%">Action</th>

                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $user) : ?>

                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $user->username; ?></td>
                                    <td><?= $user->email; ?></td>
                                    <td style="text-align:center"><?php if ($user->job == 'Teknisi') {
                                                                        $job = 'bg-warning';
                                                                    } else if ($user->job == 'Admin Data') {
                                                                        $status = 'bg-info';
                                                                    } else {
                                                                        $job = 'bg-danger';
                                                                    } ?>
                                        <span class="badge <?= $job; ?>"><?= $user->job; ?></span>
                                    </td>
                                    <td style="text-align:center"><?php if ($user->name == 'user') {
                                                                        $name = 'text-primary';
                                                                    } else {
                                                                        $name = 'text-danger';
                                                                    } ?>
                                        <span class="<?= $name; ?>"><?= $user->name; ?></span>
                                    </td>
                                    <td style="text-align:center"><?php if ($user->active == '1') {
                                                                        $active = 'bi-check-circle-fill text-success';
                                                                    } else {
                                                                        $active = 'bi-x-circle-fill text-danger';
                                                                    } ?>
                                        <span class="bi <?= $active; ?> fa-2x"></span>
                                    </td>



                                    <td>


                                        <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-success btn-sm">Detail</a>

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
    <script>
        $(document).ready(function() {
            var DT1 = $('#datatable').DataTable();
            $(".selectAll").on("click", function(e) {
                if ($(this).is(":checked")) {
                    DT1.rows().select();
                } else {
                    DT1.rows().deselect();
                }
            });

        });
    </script>

</main><!-- End #main -->


<?= $this->endSection(); ?>