<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Home">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <section class="section profile">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="<?= base_url('img/' . user()->user_image); ?>" alt="Profile" class="rounded-circle">
                            <h2><?= user()->username; ?></h2>
                            <?php if (in_groups('user')) : ?>
                                <h2><?= user()->job; ?></h2>
                            <?php endif; ?>
                            <h3><?= $user->name; ?></h3>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
        </form>
        <!-- Bordered Tabs -->
        <!-- <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

        </ul> -->
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#profile-overview" type="button" role="tab" aria-controls="home" aria-selected="true">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-edit" type="button" role="tab" aria-controls="profile" aria-selected="false">Edit Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#profile-change-password" type="button" role="tab" aria-controls="contact" aria-selected="false">Change Password</button>
            </li>

        </ul>

        <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">About</p> -->

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?= user()->fullname; ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?= user()->job; ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?= user()->alamat; ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(+62)<?= user()->phone; ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= user()->email; ?></div>
                </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="/UserProfile/update" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="hidden" name="gambarlama" value="<?= user()->user_image; ?>">
                            <img src="<?= base_url('img/' .  user()->user_image); ?>" alt="Profile" id="imgpro" class="costum-file-label img-preview">
                            <div class="pt-2">
                                <label for="img" class="btn btn-info btn-sm"><i class="bi bi-upload"></i></label>
                                <input type="file" id="img" name="gambar" style="display:none" onchange="previewImg()">

                                <!-- <label for="profile" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></label>
                                <input type='button' id="profile" name="gambardefault" style="display:none" onclick="changeImage();"></button> -->

                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="fullname" type="text" class="form-control" id="nama" value="<?= user()->fullname; ?>">

                        </div>
                    </div>
                    <?php if (in_groups('user')) : ?>
                        <div class="row mb-3">
                            <label for="job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                            <div class="col-md-8 col-lg-9">
                                <select class="form-select" aria-label="Default select example" name="job">
                                    <option value="<?= user()->job; ?>" selected style='display:none;'><?= user()->job; ?></option>
                                    <option value="Admin Data">Admin Data</option>
                                    <option value="Teknisi">Teknisi</option>

                                </select>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="phone" type="phone" class="form-control" id="phone" value="<?= user()->phone; ?>">

                        </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">l</textarea>
                      </div>
                    </div> -->
                    <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Address</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="alamat" type="text" class="form-control" id="alamat" value="<?= user()->alamat; ?>">

                        </div>
                    </div>



                    <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="text" class="form-control" id="email" value="<?= user()->email; ?>">

                        </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div> -->

                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form><!-- End Profile Edit Form -->

            </div>



            <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="/UserProfile/updatePassword" method="post" enctype="multipart/form-data">

                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="old-password" type="password" class="form-control" id="old-password">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="new-password" type="password" class="form-control" id="new-password">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="confirm-password" type="password" class="form-control" id="confirm-new-password">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" disabled>Change Password</button>
                    </div>
                </form><!-- End Change Password Form -->

            </div>


        </div><!-- End Bordered Tabs -->


    </section>
    <script>
        function previewImg() {


            const gambar = document.querySelector('#img');
            const gambarLabel = document.querySelector('.costum-file-label');
            const imgPreview = document.querySelector('.img-preview');

            gambarLabel.textContent = gambar.files[0].name;

            const $fileGambar = new FileReader();
            $fileGambar.readAsDataURL(gambar.files[0]);
            $fileGambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
    <!-- membuat gambar profile jadi default tapi masi salah -->
    <!-- <script>
        function changeImage() {
            var img = document.getElementById("imgpro");
            img.src = "img/user.jpg";
            return false;
        }
    </script> -->
</main><!-- End #main -->
<?= $this->endSection(); ?>