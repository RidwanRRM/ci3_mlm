<script>
	function jenisDebiturCheck() {
		if (document.getElementById('bank').checked) {
			document.getElementById('ifBank').style.display = 'block';
			document.getElementById('ifNonBank').style.display = 'none';
			document.getElementById('laporan').style.display = 'block';
		} else if (document.getElementById('non_bank').checked) {
			document.getElementById('ifNonBank').style.display = 'block';
			document.getElementById('ifBank').style.display = 'none';
			document.getElementById('laporan').style.display = 'block';
		}


	}
</script>
<script src="<?= base_url('public/'); ?>js/separatoradd.js"></script>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">Tambah Laporan Proses</h4>
</div>
<div class="modal-body">
	<div class="form-group">
		<div class="box-body">
			<div class="form-group">
				<label class="col-sm-4 control-label">Pilih Jenis Debitur*</label>
				<div class="col-sm-8">
					<div class="radio">
						<input type="radio" onclick="javascript:jenisDebiturCheck();" name="jenis_debitur" value="bank" id="bank"> Bank </input>
					</div>
					<div class="radio">
						<input type="radio" onclick="javascript:jenisDebiturCheck();" name="jenis_debitur" value="non_bank" id="non_bank"> Non Bank </input>
					</div>
				</div>
			</div>
			<div class="box-body" id="ifBank" style="display:none">
				<div class="form-group <?php form_error('no_spk') ? print 'has-error' : '' ?>">
					<label for="inputEmail3" id="form1" class="col-sm-4 control-label">Pilih No SPK*</label>
					<div class="col-sm-8">
						<select class="form-control" id="form1" name="no_spk">
							<?php foreach ($spk as $a) : ?>
								<option value="<?= $a['no_spk']; ?>" <?php if (set_value('no_spk') == $a['no_spk']) echo 'selected'; ?>><?= $a['no_spk']; ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('no_spk') ? '<span class="help-block text-danger">' . form_error('no_spk') . '</span>' : ""; ?>
					</div>
				</div>
			</div>
			<div class="box-body" id="ifNonBank" style="display:none">
				<div class="form-group <?php form_error('no_surat') ? print 'has-error' : '' ?>">
					<label for="inputEmail3" id="form2" class="col-sm-4 control-label">Pilih No Sertifikat*</label>
					<div class="col-sm-8">
						<select class="form-control" id="form2" name="no_surat">
							<?php foreach ($surat as $a) : ?>
								<option value="<?= $a['no_surat']; ?>" <?php if (set_value('no_surat') == $a['no_surat']) echo 'selected'; ?>><?= $a['no_surat']; ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('no_spk') ? '<span class="help-block text-danger">' . form_error('no_surat') . '</span>' : ""; ?>
					</div>
				</div>
			</div>
			<div class="box-body" id="laporan" style="display:none">
				<div class="form-group <?php form_error('tanggal') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Tanggal Laporan*</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value("tanggal"); ?>"></input>
						<?= form_error('tanggal') ? '<span class="help-block text-danger">' . form_error('tanggal') . '</span>' : ""; ?>
					</div>
				</div>
				<div class="form-group <?php form_error('proses_bulan') ? print 'has-error' : '' ?>">
					<label class="col-sm-4 control-label">Laporan Proses*</label>
					<div class="col-sm-8">
						<textarea rows="3" class="form-control" id="proses_bulan" name="proses_bulan"><?= set_value("proses_bulan"); ?></textarea>
						<?= form_error('proses_bulan') ? '<span class="help-block text-danger">' . form_error('proses_bulan') . '</span>' : ""; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary" name="tambah">Save</button>
</div>