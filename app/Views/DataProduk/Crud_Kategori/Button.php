 <!-- Modal Edit Product-->
 <form action="/Tabel_Kategori/update" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Edit Kategori Produk</h5>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">

                     <div class="row">
                         <div class="col-lg-4">
                             <label class="control-label" style="position:relative;">NAMA KATEGORI:</label>
                         </div>
                         <div class="col-lg-12">
                             <input type="text" class="form-control kategori" name="kategori" placeholder="Product Name">
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
 <form action="/Tabel_Kategori/delete" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Delete Kategori Produk</h5>
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
             const kategori = $(this).data('kategori');

             // Set data to Form Edit
             $('.id').val(id);
             $('.kategori').val(kategori);

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