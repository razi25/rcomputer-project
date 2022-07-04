 <!-- Modal Edit Product-->
 <form action="/Tabel_Servis/update/" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Edit Barang Service</h5>
                     <div class="col-lg-4">
                         <input type="date" class="form-control date_in" name="date_in" required>
                     </div>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">



                     <div class="row">
                         <div class="col-lg-12">
                             <label class="control-label" style="position:relative;">Pemilik :</label>
                             <label class="control-label" style="position:relative;left: 315px;">Barang :</label>
                         </div>
                         <div class="col-lg-5">
                             <input type="text" class="form-control pemilik" name="pemilik" required>
                             <input type="text" class="form-control barang" name="barang" style="position:relative;left: 380px;bottom: 39px;" required>
                         </div>
                     </div>


                     <div class="row">
                         <div class="col-lg-3">
                             <label class="control-label" style="position:relative;">Kerusakan :</label>
                         </div>
                         <div style="height:30px;"></div>
                         <div class="col-lg-11">
                             <textarea class="form-control kerusakan" name="kerusakan" placeholder="Install Ulang, 
Padam, 
Ganti HDD" maxlength="255" style="position:relative; bottom: 25px; height: 8em;" required></textarea>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-lg-3">
                             <label class="control-label" style="position:relative;">Perbaikan :</label>
                         </div>
                         <div style="height:30px;"></div>
                         <div class="col-lg-11">
                             <textarea class="form-control perbaikan" name="perbaikan" placeholder="Install Ulang, 
Service, 
Bongkar" maxlength="255" style="position:relative; bottom: 25px; height: 8em;" required></textarea>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-12">
                             <label class="control-label" style="position:relative;">Keterangan :</label>
                             <label class="control-label" style="position:relative;left: 280px;">Date Out :</label>
                         </div>
                         <div class="col-lg-5">
                             <select name="keterangan" id="keterangan" class="form-control keterangan" required>
                                 <option selected value="success">Success</option>
                                 <option value="pending">Pending</option>
                                 <option value="rejected">Rejected</option>

                             </select>
                             <input type="date" class="form-control" name="date_out" style="position:relative;left: 380px;bottom: 39px;" value="<?= date('Y-m-d') ?>" required>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-2">
                             <label class="control-label" style="position:relative;">Biaya :</label>
                         </div>
                         <div class="col-lg-4">
                             <input type="text" id="biaya" class="form-control biaya" name="biaya" style="position:relative;right: 80px;" disabled>

                         </div>
                     </div>
                 </div>


                 <div class="modal-footer">
                     <input type="hidden" name="id" class="id">

                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Update</button>
                 </div>
             </div>
         </div>
     </div>
 </form>
 <!-- End Modal Edit Product-->

 <!-- Modal Delete Product-->
 <form action="/Tabel_Servis/delete" method="post" enctype="multipart/form-data">
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
                     <input type="hidden" name="id" class="id">


                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                     <button type="submit" class="btn btn-primary">Yes</button>
                 </div>
             </div>
         </div>
     </div>
 </form>
 <!-- End Modal Delete Product-->

 <script>
     $(document).ready(function() {

         // get Edit Product
         $('.btn-edit').on('click', function() {
             // get data from button edit
             const id = $(this).data('id');
             const date_in = $(this).data('date_in');
             const pemilik = $(this).data('pemilik');
             const barang = $(this).data('barang');
             const kerusakan = $(this).data('kerusakan');
             const perbaikan = $(this).data('perbaikan');
             const date_out = $(this).data('date_out');
             const biaya = $(this).data('biaya');
             const keterangan = $(this).data('keterangan');



             // Set data to Form Edit
             $('.id').val(id);
             $('.date_in').val(date_in);
             $('.pemilik').val(pemilik);
             $('.barang').val(barang);
             $('.kerusakan').val(kerusakan);
             $('.perbaikan').val(perbaikan);
             $('.date_out').val(date_out);
             $('.biaya').val(biaya);
             $('.keterangan').val(keterangan);



             // Call Modal Edit
             $('#editModal').modal('show');
         });

         // get Delete Product
         $('.btn-delete').on('click', function() {
             // get data from button edit
             const id = $(this).data('id');

             // Set data to Form Edit
             $('.id').val(id);



             // Call Modal Edit
             $('#deleteModal').modal('show');
         });

     });
 </script>
 <script>
     $(document).on('change', '#keterangan', function() {
         var shouldEnable = $(this).val() !== 'success';
         $('#biaya').prop('disabled', shouldEnable);
         $('.biaya').val('');
     });
 </script>