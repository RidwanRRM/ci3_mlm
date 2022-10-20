<script src="<?= base_url('public/'); ?>js/separatoradd.js"></script>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">Data Proses</h4>
</div>
<div class="modal-body">
	<div class="form-group">
		<div class="box-body">
			<input type="hidden" name="id" value="<?= $agunan["id"]; ?>">
			<div class="form-group <?php form_error('jkw_proses') ? print 'has-error' : '' ?>">
				<label class=" col-sm-4 control-label">Jangka Waktu Proses*</label>
				<div class="col-sm-8">
					<input type="date" class="datepicker form-control" id="jkw_proses" name="jkw_proses" value="<?= set_value("jkw_proses", $agunan['jkw_proses']); ?>">
					<?= form_error('jkw_proses') ? '<span class="help-block text-danger">' . form_error('jkw_proses') . '</span>' : ""; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary" name="tambah">Save</button>
</div>