<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url(); ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p><?php echo $this->session->userdata('logged_in')['nama']; ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<!-- <form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..." />
				<span class="input-group-btn">
					<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form> -->
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header"></li>
			<?php if ($level == 0) { ?>
				</li>
				<li class="<?= (@$menu == 'users') ? 'active' : ""; ?>">
					<a href="<?php echo base_url(); ?>index.php/admin/users/">
						<i class="fa fa-user-plus"></i> <span>Users</span>
					</a>
				</li>
			<?php } ?>
			<li class="treeview<?= menu_active(@$menu, 'admin'); ?>">
				<a href="#">
					<i class=" fa fa-dashboard"></i>
					<span>Admin Panel</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li <?= sub_menu_active(@$menu, @$sub_menu, 'admin', 'perhitungan_bonus'); ?>><a href="<?php echo base_url(); ?>index.php/admin/perhitungan_bonus"><i class="fa fa-circle-o"></i> Perhitungan Bonus</a></li>
					<li <?= sub_menu_active(@$menu, @$sub_menu, 'admin', 'registrasi_member'); ?>><a href="<?php echo base_url(); ?>index.php/admin/registrasi_member"><i class="fa fa-circle-o"></i> Registrasi Member</a></li>
					<li <?= sub_menu_active(@$menu, @$sub_menu, 'admin', 'migrasi'); ?>><a href="<?php echo base_url(); ?>index.php/admin/migrasi"><i class="fa fa-circle-o"></i> Migrasi Member/ Pindah Parent</a></li>
				</ul>
			</li>
			<li class="<?= (@$menu == 'tree_view') ? 'active' : ""; ?>">
				<a href="<?php echo base_url(); ?>index.php/admin/tree_view/">
					<i class="fa fa-users"></i> <span>Tree View</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>