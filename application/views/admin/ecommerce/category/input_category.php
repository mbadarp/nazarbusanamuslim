<!-- Standard modal -->
<div id="inputKategoriModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Entri Data Kategori </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form class="form-horizontal" action="<?= base_url('admin/category/inputKategori') ?>" method="POST">
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">Nama Kategori</label>
                        <div class="col-9">
                            <input type="text" name="category" id="category" class="form-control" autocomplete="off" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->