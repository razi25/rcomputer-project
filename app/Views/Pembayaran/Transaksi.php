<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<script src="<?= base_url() ?>/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>

<main id="main" class="main">


    <div class="pagetitle">
        <h1>Detail Pembayaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/Pesanan/index') ?>">Tabel Pemesanan</a></li>
                <li class="breadcrumb-item active">Detail Pembayaran</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pembayaran Barang</h5>
                        <?php foreach ($pembayaran as $pb) : ?>
                            <form action="/Pembayaran/updatereject/<?= $pb->id; ?>" method="post" enctype="multipart/form-data">

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">DATE IN</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="date_in" class="form-control" value="<?= $pb->Tanggal; ?>" readonly>
                                        <!-- <input type="datetime-local" name="date_in" class="form-control" value="<?php echo date("Y-m-d\TH:i:s", strtotime($pb->Tanggal)); ?>"> -->
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">ID ORDER</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" style="position:relative;" name="id_order" value="ORD<?= $pb->id; ?>" readonly>



                                    </div>

                                    <label class="col-sm-3 col-form-label">KODE PRODUK</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="kode_id" style="position:relative; right: 40px;" value="RCOM<?= $pb->kode_id; ?>" readonly>


                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">PRODUK</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="produk" value="<?= $pb->produk; ?>" readonly>

                                    </div>
                                    <img src="/imgproduk/<?= $pb->gambar; ?>" class="costum-file-label" style="position:relative;width:150px;height:100px;" alt="Image Produk">

                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">STATUS</label>
                                    <div class="col-sm-4">
                                        <select name="status" id="state" class="form-select status" required>
                                            <option selected value="pending">Pending</option>
                                            <option value="success">Success</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="<?= $pb->id; ?>">
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" style="position: relative;float:right" class="btn btn-danger">REJECT</button>
                                        <a href="<?= base_url('/pesanan'); ?>" class="btn btn-primary">BACK</a>


                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                    </div>

                </div>
            </div>

            <div class="col-lg-6" id="form1" style="display: none;">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <!-- Advanced Form Elements -->
                        <form action="/Pembayaran/save/<?= $pb->id; ?>" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">PELANGGAN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pelanggan" value="<?= $pb->pelanggan; ?>">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">ALAMAT</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="floatingTextarea" name="alamat" style="height: 100px;"><?= $pb->alamat; ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">PAYMENT</label>
                                <div class="col-sm-4">
                                    <select class="form-select" aria-label="Default select example" name="payment" required>
                                        <option selected value="<?= $pb->payment; ?>"><?= $pb->payment; ?></option>
                                        <option value="cash">cash</option>
                                        <option value="transfer">transfer</option>
                                    </select>

                                </div>
                                <label class="col-sm-2 col-form-label">DATE OUT</label>
                                <div class="col-sm-4">
                                    <input type="datetime-local" class="form-control" name="date_out" value="<?= date('Y-m-d H:i:s') ?>" required>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">JUMLAH</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control" id="jumlah" value="<?= $pb->jumlah; ?>" oninput="myFunction()" name="jumlah" max="<?= $pb->stok; ?>" min="1" required>

                                </div>
                                /<?= $pb->stok; ?>
                                <label class="col-sm-3 col-form-label">* HARGA SATUAN</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="hargaSatuan" value="<?= $pb->pis; ?>" readonly>


                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">HARGA</label>
                                <div class="col-sm-10">
                                    <span id="harga1" name="harga" class="form-control" value=""><?= $pb->price; ?></span>

                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">DISKON</label>
                                <div class="col-sm-10">

                                    <input type="number" name="diskon" class="form-control" id="inputDiskon" oninput="myFunction()" max="<?= $pb->price; ?>" min="0" placeholder="tidak melebihi harga barang">
                                </div>
                            </div>



                            <hr>


                            <h4>Total Price: <span id="totalPrice" name="total"><?= $pb->price; ?></span></h4>
                            <input type="hidden" name="id" value="<?= $pb->id; ?>">
                            <input type="hidden" name="kode" value="<?= $pb->kode_id; ?>">
                            <input type="hidden" name="stok" value="<?= $pb->stok; ?>">
                            <input type="hidden" name="admin" value="<?= user()->username; ?>">
                            <input type="hidden" name="id_order" value="ORD<?= $pb->id; ?>">
                            <input type="hidden" name="kode_id" value="<?= $pb->kode_id; ?>">
                            <input type="hidden" name="date_in" value="<?= $pb->Tanggal; ?>">
                            <input type="hidden" name="produk" value="<?= $pb->produk; ?>">
                            <input type="hidden" name="harga" id="harga2" value="<?= $pb->price; ?>">
                            <input type="hidden" name="total" id="totalPrice1" value="<?= $pb->price; ?>">
                            <input type="hidden" name="gambar" value="<?= $pb->gambar; ?>">
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success" style="position: relative;float:right">CONFIRM</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
        <script>
            function myFunction() {
                var jumlah = document.getElementById("jumlah").value;
                var hargasatuan = document.getElementById("hargaSatuan").value;
                var diskon = document.getElementById("inputDiskon").value;
                var harga = jumlah * hargasatuan;
                var total = jumlah * hargasatuan - diskon;
                document.getElementById("harga1").innerHTML = harga;
                document.getElementById("totalPrice").innerHTML = total;
                document.getElementById("harga2").value = harga;
                document.getElementById("totalPrice1").value = total;

            }
        </script>


        <script>
            function hanyaAngka(event) {
                var angka = (event.which) ? event.which : event.keyCode
                if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                    return false;
                return true;
            }
        </script>
        <script>
            $(document).ready(function() {
                $("#state").change(function() {
                    // foo is the id of the other select box 
                    if ($(this).val() != "pending") {
                        $("#form1").show();
                    } else {
                        $("#form1").hide();
                    }
                });
            });
        </script>
    </section>


</main><!-- End #main -->

<?= $this->endSection(); ?>