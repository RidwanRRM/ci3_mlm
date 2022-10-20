<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<!--<title>Attend Mgmt</title>-->
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- <link rel="icon" href="<?php echo base_url(); ?>adminlte/dist/img/favicon.ico" type="image/x-icon"> -->
	<!-- Bootstrap 3.3.4 -->
	<link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- FontAwesome 4.3.0 -->
	<link href="<?php echo base_url(); ?>public/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons 2.0.0 -->
	<!-- <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
	<link href="<?php echo base_url(); ?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins
			folder instead of downloading all of them to reduce the load. -->
	<link href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<!-- iCheck -->
	<link href="<?php echo base_url(); ?>public/plugins/iCheck/flat/red.css" rel="stylesheet" type="text/css" />
	<!-- Morris chart -->
	<link href="<?php echo base_url(); ?>public/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- jvectormap -->
	<link href="<?php echo base_url(); ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
	<!-- Date Picker -->
	<link href="<?php echo base_url(); ?>public/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
	<!-- Daterange picker -->
	<link href="<?php echo base_url(); ?>public/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
	<!-- bootstrap wysihtml5 - text editor -->
	<link href="<?php echo base_url(); ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

	<link type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap-datepicker.min.css" rel="stylesheet" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<!-- jQuery 2.1.4 -->
	<script src="<?php echo base_url(); ?>public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- DATA TABES SCRIPT -->
	<!-- <script src="<?php echo base_url(); ?>public/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>public/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script> -->
	<script src="<?php echo base_url(); ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- Slimscroll -->
	<script src="<?php echo base_url(); ?>public/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- FastClick -->
	<script src='<?php echo base_url(); ?>public/plugins/fastclick/fastclick.min.js'></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>public/dist/js/app.min.js" type="text/javascript"></script>

	<!-- public for demo purposes -->
	<script src="<?php echo base_url(); ?>public/dist/js/demo.js" type="text/javascript"></script>
	<!-- jQuery 3 -->
	<!-- <script src="<?php echo base_url(); ?>public/bower_components/jquery/dist/jquery.min.js"></script> -->
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://unpkg.com/jquery-stickytable@3.0.0/dist/jquery-stickytable.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/jquery-stickytable@3.0.0/dist/jquery-stickytable.css">
	<!-- <script src="<?php echo base_url(); ?>public/dist/node_modules/dist/jquery-stickytable.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/node_modules/dist/jquery-stickytable.css"> -->

	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_export.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_export.min.js"></script>
	<link href="<?php echo base_url(); ?>public/css/amcharts_export.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/pie.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/serial.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap-datepicker.min.js"></script>

	<!-- REQUIRED FOR REQUEST DOWNLOAD FILE -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_blob.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_fabric.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_pdfmake.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_vfs_fonts.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_jszip.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_xlsx.js"></script>

	<!-- REQUIRED FOR DOWNLOAD -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/amcharts_FileSaver.js"></script>

	<script type="text/javascript" src="<?= base_url('assets/'); ?>js/script.js"></script>


	<script type="text/javascript">
		function getMonth() {
			var now = new Date();
			var bulan = now.getMonth() + 1;
			return bulan < 10 ? '0' + bulan : bulan;
		} // ('' + month) for string result
		function getDate() {
			var now = new Date();
			var tanggal = now.getDate();
			return tanggal < 10 ? '0' + tanggal : tanggal;
		} // ('' + month) for string result
		function getHours() {
			var now = new Date();
			var jam = now.getHours();
			return jam < 10 ? '0' + jam : jam;
		} // ('' + month) for string result	
		function getMinutes() {
			var now = new Date();
			var menit = now.getMinutes();
			return menit < 10 ? '0' + menit : menit;
		} // ('' + month) for string result	
		function getSeconds() {
			var now = new Date();
			var detik = now.getSeconds();
			return detik < 10 ? '0' + detik : detik;
		} // ('' + month) for string result
		function datetime() {
			var now = new Date();
			var tgl = now.getFullYear() + "-" +
				getMonth() + "-" +
				getDate() + " " +
				getHours() + ":" +
				getMinutes() + ":" +
				getSeconds();
			$("#time").val(tgl);
		}
	</script>


	<script type="text/javascript">
		//set timezone
		<?php date_default_timezone_set('Asia/Jakarta'); ?>
		//buat object date berdasarkan waktu di server
		var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
		//buat object date berdasarkan waktu di client
		var clientTime = new Date();
		//hitung selisih
		var Diff = serverTime.getTime() - clientTime.getTime();

		//fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
		function displayServerTime() {
			//buat object date berdasarkan waktu di client
			var clientTime = new Date();
			//alert(clientTime);
			//exit();
			//buat object date dengan menghitung selisih waktu client dan server
			var time = new Date(clientTime.getTime() + Diff);
			//ambil nilai jam
			var sh = clientTime.getHours().toString();
			//ambil nilai menit
			var sm = clientTime.getMinutes().toString();
			//ambil nilai detik
			var ss = clientTime.getSeconds().toString();

			var curr_date = clientTime.getDate();
			var curr_month = clientTime.getMonth() + 1; //Months are zero based
			var curr_year = clientTime.getFullYear();
			//tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
			//				document.getElementById("clock").innerHTML = curr_date + "-" + curr_month + "-" + curr_year + " " + (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);

			var isi = curr_date + "-" + curr_month + "-" + curr_year + " " + (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);

			$("#clockz").val(isi);

			//document.getElementById("clockz").val(curr_date + "-" + curr_month + "-" + curr_year + " " + (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss));
		}

		/*
		var myclose = false;
		function HandleOnClose()
		{
			if (myclose==true) 
			{
				alert('Anda');
				return false;
			}   
		}
		*/

		const base_url = "http://localhost/rpd";
	</script>



</head>
<!--<body class="skin-red sidebar-mini" onLoad="datetime(); setInterval('datetime()', 1000 )">-->

<body class="skin-blue-light sidebar-mini" onload="setInterval('displayServerTime()', 1000);">

	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<?php
			$url = 'admin/users';

			?>
			<a href="<?php echo base_url(); ?>index.php/<?= $url; ?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>MLM</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b><sup></sup>MULTI LEVEL MARKETING</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">

							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<!-- start message -->
											<a href="#">
												<div class="pull-left">
													<!--<img src="" class="img-circle" alt="User Image"/>-->
												</div>
												<h4>
													Support Team
													<small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<p>Test</p>
											</a>
										</li><!-- end message -->
										<li>
											<a href="#">
												<div class="pull-left">
													<!--<img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>-->
												</div>
												<h4>
													EmphireISH Design Team
													<small><i class="fa fa-clock-o"></i> 2 hours</small>
												</h4>
												<p>Percobaan</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">See All Messages</a></li>
							</ul>
						</li>
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">

							<ul class="dropdown-menu">
								<li class="header">You have <?php echo @$notification; ?> notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="<?php echo base_url() ?>index.php/home/roster_viewtukar">
												<i class="fa fa-users text-aqua"></i> <?php echo @$notification; ?> new request change shift
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<!-- User Account: style can be found in dropdown.less -->


						<div class="navbar-custom-menu">
							<ul class="nav navbar-nav">
								<!-- Messages: style can be found in dropdown.less-->

								<!-- User Account Menu -->
								<li class="dropdown user user-menu">
									<!-- Menu Toggle Button -->
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<!-- The user image in the navbar-->
										<img src="<?php echo base_url(); ?>public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
										<!-- hidden-xs hides the username on small devices so only the image appears. -->
										<span class="hidden-xs"><?php echo $this->session->userdata('logged_in')['nama']; ?></span>
									</a>
									<ul class="dropdown-menu">
										<!-- The user image in the menu -->
										<li class="user-header">
											<img src="<?php echo base_url(); ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
											<p>
												<?php echo $this->session->userdata('logged_in')['nama']; ?>
												<small><?php if ($level == 1) {
															echo "Administrator";
														} else if ($level == 2) {
															echo "Notaris";
														} else if ($level == 3) {
															echo "Perbankan";
														} else if ($level == 4) {
															echo "Non Bank";
														}

														?></small>
											</p>
										</li>
										<!-- Menu Footer-->
										<li class="user-footer">
											<div class="pull-left">
												<button type="button" class="btn btn-default modal-form" data-toggle="modal" data-target="#modal-ajax" data-url="<?php echo base_url(); ?>index.php/home/change_password" data-post-url="<?php echo base_url(); ?>index.php/verifylogin/new_password">Change Password</button>
												<!-- <a href="<?php echo base_url(); ?>index.php/home/change_password" class="btn btn-default btn-flat">Change Password</a> -->
											</div>
											<div class="pull-right">
												<a href="<?php echo base_url(); ?>index.php/home/logout/" class="btn btn-default btn-flat">Sign Out</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-custom-menu -->
						<!-- Control Sidebar Toggle Button -->
						<!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
					</ul>
				</div>
			</nav>
		</header>