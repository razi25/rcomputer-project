<!-- Modal Detail Product-->
<form action="" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Product</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-4">
                            <label class="control-label" style="position:relative;">NAMA PRODUK:</label>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control produk" name="produk" placeholder="Product Name" readonly>
                        </div>
                    </div>
                    <div style="height:20px;"></div>
                    <div class="row">
                        <div class="col-lg-10">
                            <label class="control-label" style="position:relative;">KATEGORI:</label>
                        </div>
                        <div class="col-lg-6">
                            <select name="kategori_id" id="editkategori" class="form-control kategori_id" disabled>
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
                                    <option class="<?= $row->kategori_id; ?>" value="<?= $row->id_sub; ?>" disabled><?= $row->subkategori; ?></option>
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
DLL:" maxlength="255" style="position:relative; bottom: 25px; height: 8em;" disabled></textarea>

                        </div>
                    </div>
                    <div style="height:20px;"></div>
                    <div class="row">
                        <div class="col-lg-10">
                            <label class="control-label" style="position:relative; bottom: 30px;">STOK:</label>
                            <div class="col-lg-7">
                                <input type="number" class="form-control stok" name="stok" placeholder="stok" style="position:relative; bottom: 30px;" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <label class="control-label" style="position:relative; left: 385px; bottom: 92px">HARGA:</label>
                                <div class="col-lg-7">
                                    <input type="text" id="rupiah2" class="form-control harga" name="harga" placeholder="harga" style="position:relative; left: 380px; bottom: 92px;" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <label class="control-label" style="position:relative; bottom: 75px">GAMBAR:</label>
                            </div>
                            <div class="col-lg-6">

                                <img src="" class="costum-file-label" id="pictdetail" width="45%" style="position:relative; bottom: 60px">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kode" class="kode">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-danger bi bi-printer">Print</button>
                </div>
            </div>

        </div>
    </div>

</form>
<!-- End Modal Detail Product-->
<script>
    $(document).ready(function() {

        // get Detail Product
        $('.btn-detail').on('click', function() {
            // get data from button Detail
            const kode = $(this).data('kode');
            const produk = $(this).data('produk');
            const kategori = $(this).data('kategori_id');
            const subkategori = $(this).data('subkategori_id');
            const keterangan = $(this).data('keterangan');
            const stok = $(this).data('stok');
            const harga = $(this).data('harga');
            const gambar = $(this).data('gambar');



            // Set data to Form Detail
            $('.kode').val(kode);
            $('.produk').val(produk);
            $('.kategori_id').val(kategori).trigger('change');
            $('.subkategori_id').val(subkategori).trigger('change');
            $('.keterangan').val(keterangan);
            $('.stok').val(stok);
            $('.harga').val(harga);
            $('#pictdetail').attr("src", "imgproduk/" + gambar);

            // Call Modal Detail
            $('#detailModal').modal('show');
        });


    });
</script>