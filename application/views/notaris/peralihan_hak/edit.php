<script src="<?= base_url('public/'); ?>js/separatoradd.js"></script>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">Tambah Data Peralihan Hak</h4>
</div>
<div class="modal-body">
	<div class="box-body">
		<div class="row col-sm-12">
			<div class="col-sm-6">
				<input type="hidden" name="id" value="<?php echo $agunan['id'] ?>">
				<div class="form-group <?php form_error('nik_1') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">NIK 1*</label>
					<div class="col-sm-8">
						<input type="number" class="form-control" value="<?= set_value('nik_1', $agunan['nik_1']); ?>" id="nik_1" name="nik_1">
						<?= form_error('nik_1') ? '<span class="help-block text-danger">' . form_error('nik_1') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('nama_1') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Nama 1*</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="<?= set_value('nama_1', $agunan['nama_1']); ?>" id="nama_1" name="nama_1">
						<?= form_error('nama_1') ? '<span class="help-block text-danger">' . form_error('nama_1') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('tempat_lahir_1') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Tempat Lahir 1*</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="<?= set_value('tempat_lahir_1', $agunan['tempat_lahir_1']); ?>" id="tempat_lahir_1" name="tempat_lahir_1">
						<?= form_error('tempat_lahir_1') ? '<span class="help-block text-danger">' . form_error('tempat_lahir_1') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('tgl_lahir_1') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Tanggal Lahir 1*</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" value="<?= set_value('tgl_lahir_1', $agunan['tgl_lahir_1']); ?>" id="tgl_lahir_1" name="tgl_lahir_1">
						<?= form_error('tgl_lahir_1') ? '<span class="help-block text-danger">' . form_error('tgl_lahir_1') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Jenis Kelamin 1*</label>
					<div class="col-sm-8">
						<select class="form-control" id="jk_1" name="jk_1">
							<option value="Laki-Laki" <?php if (set_value('jk_1', $agunan["jk_1"]) == "Laki-Laki") echo 'selected'; ?>>Laki-Laki</option>
							<option value="Perempuan" <?php if (set_value('jk_1', $agunan["jk_1"]) == "Perempuan") echo 'selected'; ?>>Perempuan</option>
						</select>
					</div>
				</div>
				<div class="form-group <?php form_error('alamat_1') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Alamat*</label>
					<div class="col-sm-8">
						<textarea rows="3" class="form-control" id="alamat_1" name="alamat_1"><?= set_value("alamat_1", $agunan['alamat_1']);; ?></textarea>
						<?= form_error('alamat_1') ? '<span class="help-block text-danger">' . form_error('alamat_1') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('status_pekerjaan_1') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Status Pekerjaan 1*</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="<?= set_value("status_pekerjaan_1", $agunan['status_pekerjaan_1']); ?>" id="status_pekerjaan_1" name="status_pekerjaan_1">
						<?= form_error('status_pekerjaan_1') ? '<span class="help-block text-danger">' . form_error('status_pekerjaan_1') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('tgl_ktp_1') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Tanggal KTP 1*</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" value="<?= set_value('tgl_ktp_1', $agunan['tgl_ktp_1']); ?>" id="tgl_ktp_1" name="tgl_ktp_1">
						<?= form_error('tgl_ktp_1') ? '<span class="help-block text-danger">' . form_error('tgl_ktp_1') . '</span>' : ""; ?>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group <?php form_error('nik_2') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">NIK 2*</label>
					<div class="col-sm-8">
						<input type="number" class="form-control" value="<?= set_value('nik_2', $agunan['nik_2']); ?>" id="nik_2" name="nik_2">
						<?= form_error('nik_2') ? '<span class="help-block text-danger">' . form_error('nik_2') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('nama_2') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Nama 2*</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="<?= set_value('nama_2', $agunan['nama_2']); ?>" id="nama_2" name="nama_2">
						<?= form_error('nama_2') ? '<span class="help-block text-danger">' . form_error('nama_2') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('tempat_lahir_2') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Tempat Lahir 2*</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="<?= set_value('tempat_lahir_2', $agunan['tempat_lahir_2']); ?>" id="tempat_lahir_2" name="tempat_lahir_2">
						<?= form_error('tempat_lahir_2') ? '<span class="help-block text-danger">' . form_error('tempat_lahir_2') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('tgl_lahir_2') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Tanggal Lahir 2*</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" value="<?= set_value('tgl_lahir_2', $agunan['tgl_lahir_2']); ?>" id="tgl_lahir_2" name="tgl_lahir_2">
						<?= form_error('tgl_lahir_2') ? '<span class="help-block text-danger">' . form_error('tgl_lahir_2') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Jenis Kelamin 2*</label>
					<div class="col-sm-8">
						<select class="form-control" id="jk_2" name="jk_2">
							<option value="Laki-Laki" <?php if (set_value('jk_2', $agunan["jk_2"]) == "Laki-Laki") echo 'selected'; ?>>Laki-Laki</option>
							<option value="Perempuan" <?php if (set_value('jk_2', $agunan["jk_2"]) == "Perempuan") echo 'selected'; ?>>Perempuan</option>
						</select>
					</div>
				</div>
				<div class="form-group <?php form_error('alamat_2') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Alamat*</label>
					<div class="col-sm-8">
						<textarea rows="3" class="form-control" id="alamat_2" name="alamat_2"><?= set_value("alamat_2", $agunan['alamat_2']); ?></textarea>
						<?= form_error('alamat_2') ? '<span class="help-block text-danger">' . form_error('alamat_2') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('status_pekerjaan_2') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Status Pekerjaan 2*</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="<?= set_value("status_pekerjaan_2", $agunan['status_pekerjaan_2']); ?>" id="status_pekerjaan_2" name="status_pekerjaan_2">
						<?= form_error('status_pekerjaan_2') ? '<span class="help-block text-danger">' . form_error('status_pekerjaan_2') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('tgl_ktp_2') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Tanggal KTP 2*</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" value="<?= set_value('tgl_ktp_2', $agunan['tgl_ktp_2']); ?>" id="tgl_ktp_2" name="tgl_ktp_2">
						<?= form_error('tgl_ktp_2') ? '<span class="help-block text-danger">' . form_error('tgl_ktp_2') . '</span>' : ""; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary" name="tambah">Save</button>
</div>