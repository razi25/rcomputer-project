 <!-- Modal Edit Product-->
 <form action="/Tabel_Produk/update/" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">

                     <input type="hidden" name="gambarlama" id="gambarlama" class="gambar">

                     <div class="row">
                         <div class="col-lg-4">
                             <label class="control-label" style="position:relative;">NAMA PRODUK:</label>
                         </div>
                         <div class="col-lg-12">
                             <input type="text" class="form-control produk" name="produk" placeholder="Product Name">
                         </div>
                     </div>
                     <div style="height:20px;"></div>
                     <div class="row">
                         <div class="col-lg-10">
                             <label class="control-label" style="position:relative;">KATEGORI:</label>
                         </div>
                         <div class="col-lg-6">
                             <select name="kategori_id" id="editkategori" class="form-control kategori_id">
                                 <?php foreach ($kategori as $row) : ?>
                                     <option value="<?= $row->id; ?>"><?= $row->kategori; ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-10">
                             <label class="control-label" style="position:relative; left: 380px; bottom: 63px;">SUB KATEGORI:</label>
                         </div>
                         <div class="col-lg-6">
                             <select class="form-control subkategori_id" id="editsubkategori" name="subkategori_id" style="position:relative; left: 380px; bottom: 62px;">
                                 <?php foreach ($subkategori as $row) : ?>
                                     <option class="<?= $row->kategori_id; ?>" value="<?= $row->id_sub; ?>"><?= $row->subkategori; ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-lg-3">
                             <label class="control-label" style="position:relative; bottom: 30px;">KETERANGAN:</label>
                         </div>
                         <div class="col-lg-12">
                             <textarea class="form-control keterangan" name="keterangan" placeholder="RAM : 
PROCESSOR :
DLL:" maxlength="255" style="position:relative; bottom: 25px; height: 8em;"></textarea>

                         </div>
                     </div>
                     <div style="height:20px;"></div>
                     <div class="row">
                         <div class="col-lg-10">
                             <label class="control-label" style="position:relative; bottom: 30px;">STOK:</label>
                             <div class="col-lg-7">
                                 <input type="number" class="form-control stok" name="stok" placeholder="stok" style="position:relative; bottom: 30px;">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-lg-10">
                                 <label class="control-label" style="position:relative; left: 385px; bottom: 92px">HARGA:</label>
                                 <div class="col-lg-7">
                                     <input type="text" id="rupiah2" class="form-control harga" name="harga" placeholder="harga" style="position:relative; left: 380px; bottom: 92px;">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-lg-12">
                                 <label class="control-label" style="position:relative; bottom: 75px">GAMBAR:</label>
                             </div>
                             <div class="col-lg-6">

                                 <input type="file" class="form-control" name="gambar" style="position:relative;bottom: 70px">

                                 <label for="gambar"></label>

                                 <img class="gambarlama" src="" class="costum-file-label" id="pict" width="45%" style="position:relative; bottom: 60px">
                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <input type="hidden" name="kode" class="kode">

                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Update</button>
                 </div>
             </div>

         </div>
     </div>

 </form>
 <!-- End Modal Edit Product-->
 <!-- Modal Order Product-->
 <form action="/Tabel_Produk/order/" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Order Product</i> </h5>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <div class="row">
                         <label class="control-label col-lg-4" style="position:relative;">KODE BARANG:</label>
                         <label class="control-label  col-lg-4" style="position:relative;">NAMA PRODUK:</label>
                     </div>

                     <div class="row">
                         <div class=" col-lg-4">
                             <input type="text" class="form-control kode" name="kode" readonly>

                         </div>
                         <div class=" col-lg-6">
                             <input type="text" class="form-control produk" name="produk" readonly>

                         </div>

                     </div>
                     <div style="height:20px;"></div>
                     <div class="row">
                         <div class="col-lg-4">
                             <label class="control-label" style="position:relative;">NAMA PELANGGAN:</label>
                         </div>
                         <div class="col-lg-10">
                             <input type="text" class="form-control pelanggan" name="pelanggan" placeholder="Pelanggan Name" required>
                         </div>
                     </div>
                     <div style="height:20px;"></div>
                     <div class="row">
                         <div class="col-lg-4">
                             <label class="control-label" style="position:relative;">ALAMAT:</label>
                         </div>
                         <div class="col-lg-10">

                             <textarea id="my-textarea" maxlength="255" class="form-control alamat" name="alamat" rows="3" placeholder="Jl. Merdeka No. 8 ....." required></textarea>
                         </div>

                     </div>
                     <div style="height:20px;"></div>
                     <div class="row">
                         <img class="costum-file-label col-lg-3 gambar" id="pict1" width="45%" style="position:relative;">
                         <label class="control-label col-lg-4" style="position:relative;left: 60px;">JUMLAH:</label>
                         <div class="col-lg-2">
                             <input type="number" class="form-control" name="jumlah" placeholder="jumlah" min="1" value="1" id="jumlah" oninput="myFunction()" onchange="myFunction1()" style="position:relative;right: 130px;" required>
                             <input type="text" class="form-control stok" id="stok" style="position:relative; bottom: 38px;left: 20px;" disabled>
                             <h3> <label class="control-label" style="position:relative; right: 10px; bottom: 75px">/</label></h3>
                         </div>
                     </div>
                     <div class="row" style="position:relative;left: 265px;bottom:60px">
                         <label class="control-label col-lg-4" style="position:relative;">HARGA :</label>

                     </div>

                     <div class="row" style="position:relative;left: 265px;bottom:60px">
                         <div class=" col-lg-4">
                             <input type="number" id="hargaSatuan" class="form-control harga" placeholder="harga" style="position:relative;" disabled>

                         </div>

                     </div>
                     <div style="height:20px;"></div>
                     <div class="row" style="position:relative;left: 265px;bottom:60px">

                         <label class="control-label  col-lg-4" style="position:relative;">TOTAL HARGA:</label>
                     </div>
                     <div class="row" style="position:relative;left: 265px;bottom:60px">
                         <div class=" col-lg-4">
                             <input type="text" id="harga1" class="form-control harga" name="harga" placeholder="Total harga" style="position:relative;" readonly>

                         </div>

                     </div>

                     <div style="height:20px;"></div>
                     <div class="row" style="position:relative;left: 265px;bottom:60px">

                         <label class="control-label  col-lg-4" style="position:relative;">METODE PEMBAYARAN :</label>
                     </div>
                     <div class="row">
                         <div class=" col-lg-3" style="position:relative;left: 265px;bottom:60px">
                             <select class="form-select" aria-label="Default select example" name="payment" required>
                                 <option selected value="cash">CASH</option>
                                 <option value="transfer">TRANSFER</option>


                             </select>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <input type="hidden" name="kode" class="kode">

                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                 </div>
             </div>
         </div>

 </form>
 <!-- End Modal Order Product-->
 <!-- Modal Delete Product-->
 <form action="/Tabel_Produk/delete" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">


                     <div class="container-fluid">
                         <h5>
                             <center>Kamu yakin ingin menghapus Data dari list ? Data tidak bisa dikembalikan</center>
                         </h5>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <input type="hidden" name="kode" class="kode">

                     <input type="hidden" src="" name="gambar" class="gambar">

                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                     <button type="submit" class="btn btn-primary">Yes</button>
                 </div>
             </div>
         </div>
     </div>
 </form>
 <!-- End Modal Delete Product-->
 <script type="text/javascript">
     $(function() {
         $(":file").change(function() {
             if (this.files && this.files[0]) {
                 var reader = new FileReader();
                 reader.onload = imageIsLoaded;
                 reader.readAsDataURL(this.files[0]);
             }
         });
     });

     function imageIsLoaded(e) {
         $('.gambarlama').attr('src', e.target.result);
     };
 </script>

 <script>
     $(document).ready(function() {

         // get Edit Product
         $('.btn-edit').on('click', function() {
             // get data from button edit
             const kode = $(this).data('kode');
             const produk = $(this).data('produk');
             const kategori = $(this).data('kategori_id');
             const subkategori = $(this).data('subkategori_id');
             const keterangan = $(this).data('keterangan');
             const stok = $(this).data('stok');
             const harga = $(this).data('harga');
             const gambar = $(this).data('gambar');
             const gambarlama = $(this).data('gambar');


             // Set data to Form Edit
             $('.kode').val(kode);
             $('.produk').val(produk);
             $('.kategori_id').val(kategori).trigger('change');
             $('.subkategori_id').val(subkategori).trigger('change');
             $('.keterangan').val(keterangan);
             $('.stok').val(stok);
             $('.harga').val(harga);
             $('#pict').attr("src", "imgproduk/" + gambar);
             $('.gambar').val(gambarlama);
             // Call Modal Edit
             $('#editModal').modal('show');
         });

         // get Order Product
         $('.btn-order').on('click', function() {
             // get data from button order
             const kode = $(this).data('kode');
             const produk = $(this).data('produk');
             const pelanggan = $(this).data('pelanggan');
             const jumlah = $(this).data('jumlah');
             const stok = $(this).data('stok');
             const alamat = $(this).data('alamat');
             const payment = $(this).data('payment');
             const harga = $(this).data('harga');
             const status = $(this).data('status');
             const gambar = $(this).data('gambar');

             // Set data to Form Order
             $('.kode').val(kode);
             $('.produk').val(produk);
             $('.pelanggan').val(pelanggan);
             $('.jumlah').val(jumlah);
             $('.stok').val(stok);
             $('.alamat').val(alamat);
             $('.payment').val(payment);
             $('.harga').val(harga);
             $('.status').val(status);
             $('#pict1').attr("src", "imgproduk/" + gambar);

             // Call Modal Edit
             $('#orderModal').modal('show');
         });
         // get Delete Product
         $('.btn-delete').on('click', function() {
             // get data from button edit
             const kode = $(this).data('kode');
             const gambar = $(this).data('gambar');
             // Set data to Form Edit
             $('.kode').val(kode);
             $('.gambar').val(gambar);
             // $('.gambar').attr("src", "imgproduk/" + gambar);

             // Call Modal Edit
             $('#deleteModal').modal('show');
         });

     });
 </script>
 <script>
     function myFunction() {
         var jumlah = document.getElementById("jumlah").value;
         var hargasatuan = document.getElementById("hargaSatuan").value;
         var harga = jumlah * hargasatuan;
         document.getElementById("harga1").value = harga;

     }
 </script>
 <script>
     function myFunction1() {
         $(document).ready(function() {
             var stok = document.getElementById("stok").value;
             document.getElementById("jumlah").max = stok;
         });
     }
 </script>