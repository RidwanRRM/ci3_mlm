<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Tambah Member</h4>
</div>
<div class="modal-body">
    <div class="form-group">
        <div class="box-body">
            <div class="form-group <?php form_error('username') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Username* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                    <?= form_error('username') ? '<span class="help-block text-danger">' . form_error('username') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('nama') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Nama*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama') ? '<span class="help-block text-danger">' . form_error('nama') . '</span>' : ""; ?>
                </div>
            </div>
            <div class="form-group <?php form_error('password') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Password* </label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="help-block text-danger">
                        <?= form_error('password'); ?>
                    </span>
                </div>
            </div>
            <div class="form-group <?php form_error('password_confirm') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Password Confirmation* </label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                    <span class="help-block text-danger">
                        <?= form_error('password_confirm'); ?>
                    </span>
                </div>
            </div>
            <div class="form-group <?php form_error('parent') ? print 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">Parent*</label>
                <div class="col-sm-8">
                    <select class="form-control" id="parent" name="parent">
                        <option value="">Pilih Parent</option>
                        <?php foreach ($parent as $a) : ?>
                            <option value="<?= $a['id_users']; ?>" <?php if (set_value('parent') == $a['id_users']) echo 'selected'; ?>><?= $a['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('parent') ? '<span class="help-block text-danger">' . form_error('parent') . '</span>' : ""; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>