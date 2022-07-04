 <!-- Modal Edit Product-->
 <form action="/Message/update" method="post" enctype="multipart/form-data">
     <?= csrf_field(); ?>
     <div class="modal fade" id="editModalSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Pesan Masuk</h5>

                 </div>
                 <div class="modal-body">
                     <div class="card">
                         <div class="card-body">
                             <h5 class="card-title" class="form-control nama">From : <label class="nama"></label>
                                 <img class="user_image" id="pict" width="45%" style="float:right;width:80px;height:80px;" alt="Profile" class="rounded-circle">
                                 <br>
                                 <span class="date_in"></span>

                                 <br>

                             </h5>

                             <!-- < !-- Quill Editor Bubble -->
                             <h4>SUBJECT : <span class="subjek"></span>
                             </h4>

                             <div class="col-lg-12">

                                 <textarea class="form-control pesan" style="position:relative;" rows="10" readonly></textarea>

                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <input type="hidden" name="id_msg" class="id_msg">
                     <button type="submit" class="btn btn-danger">CLOSE</button>
                 </div>
             </div>
         </div>
     </div>

 </form>
 <!-- End Modal Edit Product-->
 <!-- Modal Delete Product-->
 <form action="/Message/delete" method="post" enctype="multipart/form-data">
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
                             <center>Kamu yakin ingin menghapus Pesan dari list ? Data tidak bisa dikembalikan</center>
                         </h5>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <input type="hidden" name="id_msg" class="id_msg">



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
         $('.btn-read').on('click', function() {
             // get data from button edit
             const id_msg = $(this).data('id_msg');
             const date_in = $(this).data('date_in');
             const nama = $(this).data('nama');
             const email = $(this).data('email');
             const subjek = $(this).data('subjek');
             const pesan = $(this).data('pesan');
             const status_msg = $(this).data('status_msg');
             const user_image = $(this).data('user_image');
             // Set data to Form Edit
             $('.id_msg').val(id_msg);
             $('.date_in').text(date_in);
             $('.nama').text(nama);
             $('.email').text(email);
             $('.subjek').text(subjek);
             $('.pesan').text(pesan);
             $('#pict').attr("src", "img/" + user_image);
             // Call Modal Edit
             $('#editModalSub').modal({
                 backdrop: 'static',
                 keyboard: false
             })
             $('#editModalSub').modal('show');

         });

         $('.btn-delete').on('click', function() {
             // get data from button edit
             const id_msg = $(this).data('id_msg');

             // Set data to Form Edit
             $('.id_msg').val(id_msg);

             // $('.gambar').attr("src", "imgproduk/" + gambar);

             // Call Modal Edit
             $('#deleteModal').modal('show');
         });

     });
 </script>