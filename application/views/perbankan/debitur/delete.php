<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Hapus Users</h4>
</div>
<div class="modal-body">
    <p>Apakah anda yakin ingin menghapus User ini?</p>
    <div class="form-group">
        <input type="hidden" class="form-control" id="id_debitur" placeholder="" name="id_debitur" value="<?= $debitur; ?>">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn pull-left" data-dismiss="modal">No</button>
    <button type="submit" name="submit" class="btn btn-danger">Yes</button>
</div>