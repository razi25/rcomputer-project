 <!-- Modal Edit Product-->
 <form action="/Tabel_Kategori/updateSub" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="editModalSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Edit Sub Kategori</h5>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">

                     <div class="row">
                         <div class="col-lg-4">
                             <label class="control-label" style="position:relative;">NAMA SUB KATEGORI:</label>
                         </div>
                         <div class="col-lg-12">
                             <input type="text" class="form-control subkategori" name="subkategori" placeholder="Sub Kategori Name">
                         </div>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <input type="hidden" name="id_sub" class="id_sub">
                     <input type="hidden" name="kategori_id" class="kategori_id">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Update</button>
                 </div>
             </div>


         </div>
     </div>

 </form>
 <!-- End Modal Edit Product-->

 <!-- Modal Delete Product-->
 <form action="/Tabel_Kategori/deleteSub" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="deleteModalSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Delete Sub Kategori</h5>
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
                     <input type="hidden" name="id_sub" class="id_sub">
                     <input type="hidden" name="kategori_id" class="kategori_id">
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
         $('.btn-editsub').on('click', function() {
             // get data from button edit
             const id_sub = $(this).data('id_sub');
             const subkategori = $(this).data('subkategori');
             const kategori_id = $(this).data('kategori_id');
             // Set data to Form Edit
             $('.id_sub').val(id_sub);
             $('.subkategori').val(subkategori);
             $('.kategori_id').val(kategori_id);

             // Call Modal Edit
             $('#editModalSub').modal('show');
         });

         // get Delete Product
         $('.btn-deletesub').on('click', function() {
             // get data from button edit
             const id_sub = $(this).data('id_sub');
             const kategori_id = $(this).data('kategori_id');
             // Set data to Form Edit
             $('.id_sub').val(id_sub);
             $('.kategori_id').val(kategori_id);

             // Call Modal Edit
             $('#deleteModalSub').modal('show');
         });

     });
 </script>