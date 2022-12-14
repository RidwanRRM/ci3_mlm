<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Multi Level Marketing - Login</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/iCheck/square/blue.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<b>MULTI LEVEL MARKETING</b>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<?php
			if (!$this->session->csrf_token) {
				$this->session->csrf_token = hash('sha1', time());
			} ?>
			<?php echo form_open('verifylogin', array('class' => 'form-horizontal')); ?>
			<input type="hidden" name="token" value="<?= $this->session->csrf_token ?>" />
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Username</label>
				<div class="col-sm-8">
					<input type="username" name="username" class="form-control" placeholder="Username" maxlength="30" />
					<?php if (form_error('username')) { ?>
						<span class="help-block text-danger">
							<?= form_error('username'); ?>
						</span>
					<?php } ?>
				</div>
			</div>
			<div class="form-group has-feedback <?php form_error('password') ? print 'has-error' : '' ?>">
				<label for="inputPassword3" class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
					<input type="password" name="password" class="form-control" placeholder="Password" maxlength="30" />
					<?php if (form_error('password')) { ?>
						<span class="help-block text-danger">
							<?= form_error('password'); ?>
						</span>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
			<?php form_close(); ?>
		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->
	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>public/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url(); ?>public/plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>

</html>