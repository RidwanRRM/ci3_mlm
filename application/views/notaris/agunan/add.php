<script src="<?= base_url('public/'); ?>js/separatoradd.js"></script>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">Tambah Agunan</h4>
</div>
<div class="modal-body">
	<div class="form-group">
		<div class="box-body">
			<div class="form-group <?php form_error('nama_agunan') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">Nama Agunan*</label>
				<div class="col-sm-8">
					<textarea rows="3" class="form-control" id="nama_agunan" name="nama_agunan"><?= set_value("nama_agunan"); ?></textarea>
					<?= form_error('nama_agunan') ? '<span class="help-block text-danger">' . form_error('nama_agunan') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('no_agunan') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">No Sertifikat*</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" value="<?= set_value('no_agunan') ?>" id="no_agunan" name="no_agunan">
					<?= form_error('no_agunan') ? '<span class="help-block text-danger">' . form_error('no_agunan') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('jenis_hak') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">Jenis Hak*</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="jenis_hak" name="jenis_hak" value="<?= set_value("jenis_hak"); ?>"></input>
					<?= form_error('jenis_hak') ? '<span class="help-block text-danger">' . form_error('jenis_hak') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('desa') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">Desa*</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="desa" name="desa" value="<?= set_value("desa"); ?>"></input>
					<?= form_error('desa') ? '<span class="help-block text-danger">' . form_error('desa') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('nama') ? print 'has-error' : '' ?>">
				<label for="inputEmail3" class="col-sm-4 control-label">Nama Debitur*</label>
				<div class="col-sm-8">
					<select class="form-control" id="nama" name="nama">
						<?php foreach ($debitur as $a) : ?>
							<option value="<?= $a['id_debitur']; ?>" <?php if (set_value('nama') == $a['id_debitur']) echo 'selected'; ?>><?= $a['nama_debitur']; ?></option>
						<?php endforeach; ?>
					</select>
					<?= form_error('nama') ? '<span class="help-block text-danger">' . form_error('nama') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('tgl_surat') ? print 'has-error' : '' ?>">
				<label class=" col-sm-4 control-label">Tanggal Surat*</label>
				<div class="col-sm-8">
					<input type="date" class="datepicker form-control" id="tgl_surat" name="tgl_surat" value="<?= set_value("tgl_surat"); ?>">
					<?= form_error('tgl_surat') ? '<span class="help-block text-danger">' . form_error('tgl_surat') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('no_surat') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">Nomor Surat*</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= set_value("no_surat"); ?>"></input>
					<?= form_error('no_surat') ? '<span class="help-block text-danger">' . form_error('no_surat') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('luas') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">Luas (m<sup>2</sup>)*</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="luas" name="luas" value="<?= set_value("luas"); ?>"></input>
					<?= form_error('luas') ? '<span class="help-block text-danger">' . form_error('luas') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('proses') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">Proses*</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" rows="3" id="pihak_terkait" name="proses" value="<?= set_value("proses"); ?>"></input>
					<?= form_error('proses') ? '<span class="help-block text-danger">' . form_error('proses') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('status') ? print 'has-error' : '' ?>">
				<label for="inputEmail3" class="col-sm-4 control-label">Status*</label>
				<div class="col-sm-8">
					<select class="form-control" id="status" name="status">
						<option value="tidak_bermasalah" <?php if (set_value('status') == "tidak_bermasalah") echo 'selected'; ?>>Tidak Bermasalah</option>
						<option value="bermasalah" <?php if (set_value('status') == "bermasalah") echo 'selected'; ?>>Bermasalah</option>
					</select>
					<?= form_error('status') ? '<span class="help-block text-danger">' . form_error('status') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('tgl_covernote') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">Tanggal Covernote</label>
				<div class="col-sm-8">
					<input type="date" class="form-control" id="tgl_covernote" name="tgl_covernote" value="<?= set_value("tgl_covernote"); ?>"></input>
					<?= form_error('tgl_covernote') ? '<span class="help-block text-danger">' . form_error('tgl_covernote') . '</span>' : ""; ?>
				</div>
			</div>
			<div class="form-group <?php form_error('no_covernote') ? print 'has-error' : '' ?>">
				<label class="col-sm-4 control-label">No Covernote</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" rows="3" id="no_covernote" name="no_covernote" value="<?= set_value("no_covernote"); ?>"></input>
					<?= form_error('no_covernote') ? '<span class="help-block text-danger">' . form_error('no_covernote') . '</span>' : ""; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary" name="tambah">Save</button>
	</div>