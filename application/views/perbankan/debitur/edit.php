<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Edit Debitur</h4>
</div>
<div class="modal-body">
    <div class="form-group">
        <div class="box-body">
            <input type="hidden" name="id_debitur" value="<?= $debitur["id_debitur"]; ?>">
            <div class="form-group <?php form_error('nik') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">NIK* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo set_value('nik', $debitur['nik']); ?>">
                    <?= form_error('nik') ? '<span class="help-block text-danger">' . form_error('nik') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('nama_debitur') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Nama*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_debitur" name="nama_debitur" value="<?php echo set_value('nama_debitur', $debitur['nama_debitur']); ?>">
                    <?= form_error('nama_debitur') ? '<span class="help-block text-danger">' . form_error('nama_debitur') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('tempat_lahir') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Tempat Lahir* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo set_value('tempat_lahir', $debitur['tempat_lahir']); ?>">
                    <span class="help-block text-danger">
                        <?= form_error('tempat_lahir') ? '<span class="help-block text-danger">' . form_error('tempat_lahir') . '</span>' : ""; ?>
                    </span>
                </div>
            </div>
            <div class="form-group <?php form_error('tgl_lahir') ? print 'has-error' : '' ?>">
                <label class=" col-sm-4 control-label">Tanggal Lahir*</label>
                <div class="col-sm-8">
                    <input type="date" class="datepicker form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo set_value("tgl_lahir", $debitur['tgl_lahir']); ?>">
                    <?= form_error('tgl_lahir') ? '<span class="help-block text-danger">' . form_error('tgl_lahir') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Jenis Kelamin*</label>
                <div class="col-sm-8">
                    <select class="form-control" id="jk" name="jk">
                        <option value="Pria" <?php if (set_value('jk', $debitur["jk"]) == "Pria") echo 'selected'; ?>>Pria</option>
                        <option value="Wanita" <?php if (set_value('jk', $debitur["jk"]) == "Wanita") echo 'selected'; ?>>Wanita</option>
                    </select>
                </div>
            </div>
            <div class="form-group <?php form_error('alamat') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Alamat*</label>
                <div class="col-sm-8">
                    <textarea rows="3" class="form-control" id="alamat" name="alamat"> <?php echo set_value("alamat", $debitur['alamat']); ?></textarea>
                    <?= form_error('alamat') ? '<span class="help-block text-danger">' . form_error('alamat') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('status_pekerjaan') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Status Pekerjaan* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status_pekerjaan" name="status_pekerjaan" value="<?php echo set_value("status_pekerjaan", $debitur['status_pekerjaan']); ?>">
                    <span class="help-block text-danger">
                        <?= form_error('status_pekerjaan') ? '<span class="help-block text-danger">' . form_error('status_pekerjaan') . '</span>' : ""; ?>
                    </span>
                </div>
            </div>
            <div class="form-group <?php form_error('tgl_ktp') ? print 'has-error' : '' ?>">
                <label class=" col-sm-4 control-label">Tanggal KTP*</label>
                <div class="col-sm-8">
                    <input type="date" class="datepicker form-control" id="tgl_ktp" name="tgl_ktp" value="<?php echo set_value("tgl_ktp", $debitur['tgl_ktp']); ?>">
                    <?= form_error('tgl_ktp') ? '<span class="help-block text-danger">' . form_error('tgl_ktp') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('notaris') ? print 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">Notaris*</label>
                <div class="col-sm-8">
                    <select class="form-control" id="notaris" name="notaris">
                        <?php foreach ($notaris as $a) : ?>
                            <option value="<?= $a['username']; ?>" <?php if (set_value('notaris') == $a['username']) echo 'selected'; ?>><?= $a['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('notaris') ? '<span class="help-block text-danger">' . form_error('notaris') . '</span>' : ""; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>