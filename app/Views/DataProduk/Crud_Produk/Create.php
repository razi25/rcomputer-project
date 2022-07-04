<!-- Modal Add Product-->
<form action="/Tabel_Produk/save" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative;">NAMA PRODUK:</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="produk" required>
                            </div>
                        </div>
                        <div style="height:20px;"></div>
                        <div class="row">
                            <div class="col-lg-10">
                                <label class="control-label" style="position:relative;">KATEGORI:</label>
                            </div>
                            <div class="col-lg-6">
                                <select name="kategori_id" id="kategori" class="form-control" required>
                                    <option value="">Select Category</option>
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
                                <select class="form-control" id="subkategori" name="subkategori_id" style="position:relative; left: 380px; bottom: 62px;" required>
                                    <option value="">Select Sub Kategori</option>
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
                                <textarea class="form-control" name="keterangan" placeholder="RAM : 
PROCESSOR :
DLL:" maxlength="255" style="position:relative; bottom: 25px; height: 8em;" required></textarea>
                            </div>
                        </div>
                        <div style="height:20px;"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="control-label" style="position:relative; bottom: 30px;">STOK:</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="stok" style="position:relative; bottom: 30px;" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="control-label" style="position:relative; left: 385px; bottom: 92px">HARGA:</label>
                                    <div class="col-lg-6">
                                        <input type="text" id="rupiah1" class="form-control" name="harga" placeholder="Rp" style="position:relative; left: 380px; bottom: 92px;" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="control-label" style="position:relative; bottom: 75px">GAMBAR:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImg()" style="position:relative; bottom: 72px">

                                    <label for="gambar"></label>
                                    <div>

                                        <img src="/imgproduk/default.png" class="costum-file-label img-preview" width="45%" style="position:relative; bottom: 75px">

                                    </div>
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
<!-- End Modal Add Product-->
<script>
    function previewImg() {


        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.costum-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const $fileGambar = new FileReader();
        $fileGambar.readAsDataURL(gambar.files[0]);
        $fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>