<?= $this->extend('auth/Template/index'); ?>
<?= $this->section('contentLogin'); ?>
<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="<?= base_url('login') ?>" class="logo d-flex align-items-center w-auto">
              <img src="<?= base_url() ?>/template/assets/img/logo.png" alt="">
              <span class="d-none d-lg-block">R - COMPUTER</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">
              <?= view('Myth\Auth\Views\_message_block') ?>
              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4"><?= lang('Auth.register') ?></h5>
                <p class="text-center small">Enter your personal details to create account</p>
              </div>

              <form action="<?= route_to('register') ?>" method="post" class="row g-3 needs-validation" novalidate>
                <?= csrf_field() ?>



                <div class="col-12">
                  <label for="email"><?= lang('Auth.email') ?></label>
                  <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" id="yourEmail" value="<?= old('email') ?>" required>
                  <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                  <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                </div>

                <div class="col-12">
                  <label for="username"><?= lang('Auth.username') ?></label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id=" yourUsername" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required>
                    <div class="invalid-feedback">Please choose a username.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="password"><?= lang('Auth.password') ?></label>
                  <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" id="yourPassword" required>
                  <div class="invalid-feedback">Please enter your password!</div>
                </div>
                <div class="col-12">
                  <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                  <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" required>
                  <div class="invalid-feedback">Please Repeat your password!</div>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.register') ?></button>
                </div>
                <div class="col-12">
                  <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                </div>
              </form>

            </div>
          </div>



        </div>
      </div>
    </div>

  </section>

</div>
<?= $this->endSection(); ?>