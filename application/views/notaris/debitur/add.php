<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Tambah Debitur</h4>
</div>
<div class="modal-body">
    <div class="form-group">
        <div class="box-body">
            <div class="form-group <?php form_error('nik') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">NIK* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>">
                    <?= form_error('nik') ? '<span class="help-block text-danger">' . form_error('nik') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('nama_debitur') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Nama*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_debitur" name="nama_debitur" value="<?= set_value('nama_debitur'); ?>">
                    <?= form_error('nama_debitur') ? '<span class="help-block text-danger">' . form_error('nama_debitur') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('tempat_lahir') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Tempat Lahir* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    <span class="help-block text-danger">
                        <?= form_error('tempat_lahir') ? '<span class="help-block text-danger">' . form_error('tempat_lahir') . '</span>' : ""; ?>
                    </span>
                </div>
            </div>
            <div class="form-group <?php form_error('tgl_lahir') ? print 'has-error' : '' ?>">
                <label class=" col-sm-4 control-label">Tanggal Lahir*</label>
                <div class="col-sm-8">
                    <input type="date" class="datepicker form-control" id="tgl_lahir" name="tgl_lahir" value="<?= set_value("tgl_lahir"); ?>">
                    <?= form_error('tgl_lahir') ? '<span class="help-block text-danger">' . form_error('tgl_lahir') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Jenis Kelamin*</label>
                <div class="col-sm-8">
                    <select class="form-control" id="jk" name="jk">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
            </div>
            <div class="form-group <?php form_error('alamat') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Alamat*</label>
                <div class="col-sm-8">
                    <textarea rows="3" class="form-control" id="alamat" name="alamat"><?= set_value("alamat"); ?></textarea>
                    <?= form_error('alamat') ? '<span class="help-block text-danger">' . form_error('alamat') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('status_pekerjaan') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Status Pekerjaan* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status_pekerjaan" name="status_pekerjaan">
                    <span class="help-block text-danger">
                        <?= form_error('status_pekerjaan') ? '<span class="help-block text-danger">' . form_error('status_pekerjaan') . '</span>' : ""; ?>
                    </span>
                </div>
            </div>
            <div class="form-group <?php form_error('tgl_ktp') ? print 'has-error' : '' ?>">
                <label class=" col-sm-4 control-label">Tanggal KTP*</label>
                <div class="col-sm-8">
                    <input type="date" class="datepicker form-control" id="tgl_ktp" name="tgl_ktp" value="<?= set_value("tgl_ktp"); ?>">
                    <?= form_error('tgl_ktp') ? '<span class="help-block text-danger">' . form_error('tgl_ktp') . '</span>' : ""; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save</button>
</div>