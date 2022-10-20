<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Edit User</h4>
    <input type="hidden" name="id_users" value="<?php echo $user['id_users'] ?>">
</div>
<div class="modal-body">
    <div class="form-group">
        <div class="box-body">
            <div class="form-group <?php form_error('username') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Username* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="uusername" name="username" value="<?php echo set_value('username', $user['username']); ?>">
                    <?= form_error('username'); ?>
                </div>
            </div>
            <div class="form-group <?php form_error('nama') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Nama* </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama', $user['nama']); ?>">
                    <span class="help-block text-danger">
                        <?= form_error('nama'); ?>
                    </span>
                </div>
            </div>
            <div class="form-group <?php form_error('password') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Password </label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="help-block text-danger">
                        <?= form_error('password'); ?>
                    </span>
                </div><!-- /.form group -->
            </div>
            <div class="form-group <?php form_error('password_confirm') ? print 'has-error' : '' ?>">
                <label class="col-sm-4 control-label">Password Confirmation </label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                    <span class="help-block text-danger">
                        <?= form_error('password_confirm'); ?>
                    </span>
                </div><!-- /.form group -->
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>