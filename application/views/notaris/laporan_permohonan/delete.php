<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Hapus Agunan</h4>
</div>
<div class="modal-body">
    <p>Apakah kamu yakin ingin menghapus data ini?</p>
    <div class="form-group">
        <input type="hidden" class="form-control" id="hid" placeholder="" name="id" value="<?= $agunan; ?>">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn pull-left" data-dismiss="modal">No</button>
    <button type="submit" name="submit" class="btn btn-danger">Yes</button>
</div>