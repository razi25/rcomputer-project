<!-- Modal Add Product-->
<form action="/Tabel_Kategori/save" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" style="position:relative;">NAMA KATEGORI:</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="kategori">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>