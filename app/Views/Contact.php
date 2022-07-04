<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Contact</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

        <div class="row gy-4">

            <div class="col-xl-6">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>Jalan Meredeka No. 8,<br>Lhokseumawe, NAD</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>0889 889 889</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>rcom@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Everyday<br>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                </div>

            </div>
            <?php if (in_groups('user')) : ?>
                <div class="col-xl-6">
                    <div class="card p-4">
                        <form action="contact/save" method="post">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="nama" class="form-control" placeholder="Your Name" value="<?= user()->username; ?>" required readonly>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" value="<?= user()->email; ?>" required readonly>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subjek" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea id="my-textarea" maxlength="300" class="form-control" name="pesan" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div>
                                    <span style="float: right;">/ 300</span>
                                    <label style="float: right;" for="my-textarea">0</label>

                                </div>

                                <?php if (session()->getFlashdata('pesan')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('pesan'); ?>

                                    </div>
                                <?php endif; ?>
                                <div class="col-md-12 text-center">
                                    <!-- <button class="btn btn-primary" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <div class="alert alert-danger" role="alert">Send Message Error, Try Again!!!</div>
                                <div class="alert alert-success" role="alert">Your message has been sent. Thank you!</div> -->

                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            <?php endif; ?>
        </div>

    </section>

</main><!-- End #main -->
<script>
    ta = document.querySelector("textarea");
    count = document.querySelector("label");

    ta.addEventListener("input", function(e) {
        count.innerHTML = this.value.length;
    });
</script>
<?= $this->endSection(); ?>