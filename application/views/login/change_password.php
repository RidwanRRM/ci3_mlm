<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">Change your password</h4>
</div>
<div class="modal-body">
	<div class="box-body">
		<input type="hidden" name="username" value="<?php echo $username; ?>" />
		<div class="form-group has-feedback <?php form_error('password') ? print 'has-error' : '' ?>">
			<input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>" placeholder="New Password" />
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="help-block text-danger">
				<?= form_error('password'); ?>
			</span>
		</div>
		<div class="form-group has-feedback <?php form_error('npassword') ? print 'has-error' : '' ?>">
			<input type="password" name="npassword" class="form-control" <?= set_value('npassword'); ?> placeholder="Re-type Password" />
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="help-block text-danger">
				<?= form_error('npassword'); ?>
			</span>
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary" id="btn_update">Update</button>
</div>