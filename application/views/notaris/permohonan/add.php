<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">Pengajuan Permohonan</h4>
</div>
<div class="modal-body">
	<div class="form-group">
		<div class="box-body">
			<div class="form-group <?php form_error('id') ? print 'has-error' : '' ?>">
				<label for="inputEmail3" class="col-sm-4 control-label">Pilih No Covernote*</label>
				<div class="col-sm-8">
					<select class="form-control" id="id" name="id">
						<?php foreach ($agunan as $a) : ?>
							<option value="<?= $a['id']; ?>" <?php if (set_value('id') == $a['id']) echo 'selected'; ?>><?= $a['no_covernote']; ?></option>
						<?php endforeach; ?>
					</select>
					<?= form_error('id') ? '<span class="help-block text-danger">' . form_error('id') . '</span>' : ""; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary" name="tambah">Save</button>
	</div>