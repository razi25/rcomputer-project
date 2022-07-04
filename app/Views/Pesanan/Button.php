 <!-- Modal Delete Pesanan-->
 <form action="/Pesanan/delete" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Delete Pesanan</h5>
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
 <!-- End Modal Delete Pesanan-->



 <script>
     $(document).ready(function() {

         // get Delete Pesanan
         $('.btn-deleted').on('click', function() {
             // get data from button delete
             const id = $(this).data('id');

             // Set data to Form delete
             $('.id').val(id);


             // Call Modal delete
             $('#deleteModal').modal('show');
         });

     });
 </script>