<!-- Modal Add Product-->
<form action="/Tabel_Servis/save" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Servis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative;">Pemilik :</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="pemilik" required>
                            </div>
                        </div>
                        <div style="height:20px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative;">Barang :</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="barang" required>
                            </div>
                        </div>

                        <div style="height:20px;"></div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="control-label" style="position:relative;">Kerusakan :</label>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" name="kerusakan" placeholder="Install Ulang, 
Padam, 
Ganti HDD" maxlength="255" style="position:relative; bottom: 25px; height: 8em;" required></textarea>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<!-- End Modal Add Servis-->