<?= $this->extend('auth/Template/index'); ?>
<?= $this->section('contentLogin'); ?>
<div class="container">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

  <!-- font awesome  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="<?= base_url('login') ?>" class="logo d-flex align-items-center w-auto">
              <img src="<?= base_url() ?>/template/assets/img/logo.png" alt="">
              <span class="d-none d-lg-block">R-COMPUTER</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <form action="<?= route_to('login') ?>" method="post" class="user">
                <?= csrf_field() ?>
                <div class="pt-4 pb-2">
                  <h2 class="card-title text-center pb-0 fs-4"><?= lang('Auth.loginTitle') ?></h2>

                </div>
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form class="row g-3 needs-validation" novalidate>

                  <div class="col-12">

                    <?php if ($config->validFields === ['email']) : ?>
                      <div class="form-group">
                        <label for="login"><?= lang('Auth.email') ?></label>
                        <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                        <div class="invalid-feedback">
                          <?= session('errors.login') ?>
                        </div>
                      </div>
                    <?php else : ?>
                      <div class="form-group">

                        <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                          <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <div class="pt-4 pb-2">
                      <div class="col-12">
                        <label for="password"><?= lang('Auth.password') ?></label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                          </div>
                          <input type="password" id="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" required ria-label="password" aria-describedby="basic-addon1">
                          <div class="input-group-append">
                            <span class="input-group-text" onclick="password_show_hide();">
                              <i class="fas fa-eye" id="show_eye"></i>
                              <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                            </span>
                          </div>
                          <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pt-4 pb-2">
                    <?php if ($config->allowRemembering) : ?>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                          <?= lang('Auth.rememberMe') ?>
                        </label>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                  </div>
                  <div class="pt-4 pb-2">
                    <div class="col-12">
                      <?php if ($config->allowRegistration) : ?>
                        <p class="text-center small"><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                      <?php endif; ?>
                      <?php if ($config->activeResetter) : ?>
                        <p class="text-center small"><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                      <?php endif; ?>
                    </div>
                  </div>
                </form>

            </div>
          </div>

          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>

        </div>
      </div>
    </div>

  </section>
  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>

</div>
<?= $this->endSection(); ?>