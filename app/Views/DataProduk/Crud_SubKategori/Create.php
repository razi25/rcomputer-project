<!-- Modal Add Product-->
<form action="/Tabel_Kategori/saveSub" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModalSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Sub Kategori</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <input type="hidden" name="kategori_id" class="id">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" style="position:relative;">NAMA SUB KATEGORI:</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="subkategori">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('.btn-addsub').on('click', function() {
            const kategori_id = $(this).data('id');
            $('.id').val(kategori_id);
            $('#addModalSub').modal('show');
        });
    });
</script>