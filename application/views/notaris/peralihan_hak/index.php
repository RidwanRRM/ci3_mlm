<!-- <script src="<?= base_url('public/'); ?>js/separator.js"></script> -->
<!-- <script src="<?php echo site_url('public/js/separator.js'); ?>" type="text/javascript"></script> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
<style>
	th {
		text-align: center;
	}

	.table>tbody>tr.active>td,
	.table>tbody>tr.active>th,
	.table>tbody>tr>td.active,
	.table>tbody>tr>th.active,
	.table>tfoot>tr.active>td,
	.table>tfoot>tr.active>th,
	.table>tfoot>tr>td.active,
	.table>tfoot>tr>th.active,
	.table>thead>tr.active>td,
	.table>thead>tr.active>th,
	.table>thead>tr>td.active,
	.table>thead>tr>th.active {
		background-color: #f5f5f5;
		border: 1px solid #fff;
	}

	.table-scroll {
		position: relative;
		/*max-width:600px;*/
		margin: auto;
		overflow: hidden;
		/*border:1px solid #000;*/
	}

	.table-wrap {
		width: 100%;
		overflow: auto;
	}

	.table-scroll table {
		width: 100%;
		margin: auto;
		border-collapse: separate;
		border-spacing: 0;
	}

	.table-scroll th,
	.table-scroll td {
		padding: 5px 10px;
		/*border:1px solid #000;*/
		background: #fff;
		white-space: nowrap;
		vertical-align: top;
	}

	.table-scroll thead,
	.table-scroll tfoot {
		/*background:#f9f9f9;*/
	}

	.clone {
		position: absolute;
		top: 0;
		left: 0;
		pointer-events: none;
	}

	.clone th,
	.clone td {
		visibility: hidden
	}

	.clone td,
	.clone th {
		border-color: transparent
	}

	.clone tbody th {
		visibility: visible;
		color: red;
	}

	.clone .fixed-side {
		visibility: visible;
	}

	.clone thead,
	.clone tfoot {
		background: transparent;
	}

	.clone td.fixed-side.action-button {
		pointer-events: visible;
	}

	.kegiatan-mendag td,
	div.kegiatan-mendag {
		/*border-bottom: 5px solid #00c0ef !important;*/
		background-color: #00c0ef !important;
	}

	.kegiatan-dirjen td,
	div.kegiatan-dirjen {
		/*border-bottom: 5px solid #00a65a !important;*/
		background-color: #f39c12 !important;
	}

	.kegiatan-sesditjen td,
	div.kegiatan-sesditjen {
		/*border-bottom: 5px solid #00c0ef !important;*/
		background-color: #d58ce2 !important;
	}

	.kegiatan-direktur td,
	div.kegiatan-direktur {
		/*border-bottom: 5px solid #00a65a !important;*/
		background-color: #f72585 !important;
	}

	.currency {
		position: relative;
		display: table;
	}

	.currency span {
		display: table-cell;
		width: 1%;
	}

	.currency span:first-child {
		margin-right: 5px;
		display: block;
	}
</style>

<script src="<?php echo base_url(); ?>public/dist/js/freeze-table.js"></script>
<script>
	// $(document).ready(function() {
	// 	$(".table-wrap").freezeTable({
	// 		'scrollBar': true,
	// 		'columnNum': 5,
	// 	});
	// })
</script>

<div class="content-wrapper">
	<section class="content-header">
		<!-- <h1> -->
		<!-- <i class="fa fa-table"></i> <span>Lembar Kerja</span> -->
		<!-- <small>preview of simple tables</small> -->
		<!-- </h1> -->
		<?php if ($this->session->flashdata('flash')) : ?>
			<div>
				<br>
				<div id="div1" class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Alert!</h4>
					<?= $this->session->flashdata('flash'); ?>.
				</div>
			</div>
		<?php endif; ?>
		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger" role="alert">
				<?= validation_errors(); ?>
			</div>
		<?php endif; ?>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title col-sm-8" style="padding-left: 0;">
							DATA AGUNAN
						</h3>
						<div class="box-header">
							<div class="box-tools">
								<button type="button" class="btn btn-success modal-peralihan_hak" data-toggle="modal" data-target="#modal-peralihan_hak" data-url="<?= base_url('index.php/notaris/addPeralihan'); ?>" data-post-url="<?= base_url('index.php/notaris/TambahPeralihan'); ?>">
									<i class="fa fa-plus"></i> <span>Add</span>
								</button>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding table-scroll">
						<div class="table-wrap">
							<table class="table table-bordered main-table" style="min-width: 1000px;">
								<?php //if (count($agunan) != 0) { 
								?>
								<thead>
									<tr class="active">
										<th colspan="2" rowspan="1" class="fixed-side">ACTION</th>
										<th rowspan="2" class="fixed-side">NO</th>
										<th rowspan="2" class="fixed-side" style="width: 200px">NIK 1 </th>
										<th rowspan="2" class="fixed-side" style="width: 200px">NAMA 1</th>
										<th rowspan="2" class="fixed-side" style="width: 200px">NIK 2 </th>
										<th rowspan="2" class="fixed-side" style="width: 200px">NAMA 2</th>
										<th rowspan="2">TMP LAHIR 1</th>
										<th rowspan="2">TGL LAHIR 1</th>
										<th rowspan="2">JENIS KELAMIN 1</th>
										<th rowspan="2">ALAMAT 1</th>
										<th rowspan="2">STATUS PEKERJAAN 1</th>
										<th rowspan="2">TGL_KTP 1</th>
										<th rowspan="2">TMP LAHIR 2</th>
										<th rowspan="2">TGL LAHIR 2</th>
										<th rowspan="2">JENIS KELAMIN 2</th>
										<th rowspan="2">ALAMAT 2</th>
										<th rowspan="2">STATUS PEKERJAAN 2</th>
										<th rowspan="2">TGL_KTP 2</th>
										<th rowspan="2">UPDATED ON</th>
										<th rowspan="2">UPDATED BY</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($agunan as $list) :
									?>
										<tr>
											<td class="fixed-side action-button">
												<button type="button" class="btn btn-danger modal-peralihan_hak" data-toggle="modal" data-target="#modal-peralihan_hak" data-url="<?= base_url('index.php/notaris/deletePeralihan/' . $list['id']); ?>" data-post-url="<?= base_url('index.php/notaris/HapusDataPeralihan'); ?>">
													<i class="fa fa-eraser"></i>
												</button>
											</td>
											<td class="fixed-side action-button">
												<button type="button" class="btn btn-primary modal-peralihan_hak" data-toggle="modal" data-target="#modal-peralihan_hak" data-url="<?= base_url('index.php/notaris/editPeralihan/' . $list['id']); ?>" data-post-url="<?= base_url('index.php/notaris/UbahDataPeralihan'); ?>">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
											<td class="fixed-side"><?= $i; ?></td>
											<td class="fixed-side"><?= $list['nik_1']; ?></td>
											<td class="fixed-side"><?= $list['nama_1']; ?></td>
											<td class="fixed-side"><?= $list['nik_2']; ?></td>
											<td class="fixed-side"><?= $list['nama_2']; ?></td>
											<td><?= $list['tempat_lahir_1']; ?></td>
											<td><?= $list['tgl_lahir_1']; ?></td>
											<td><?= $list['jk_1']; ?></td>
											<td><?= $list['alamat_1']; ?></td>
											<td><?= $list['status_pekerjaan_1']; ?></td>
											<td><?= $list['tgl_ktp_1']; ?></td>
											<td><?= $list['tempat_lahir_2']; ?></td>
											<td><?= $list['tgl_lahir_2']; ?></td>
											<td><?= $list['jk_2']; ?></td>
											<td><?= $list['alamat_2']; ?></td>
											<td><?= $list['status_pekerjaan_2']; ?></td>
											<td><?= $list['tgl_ktp_2']; ?></td>
											<td><?= $list['upd_date']; ?></td>
											<td><?= $list['nama']; ?></td>
										</tr>
									<?php
										$i++;
									endforeach;
									?>
									<?php //} else {
									//echo "<center>Data not found.</center>";
									//} 
									?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="modal-peralihan_hak">
	<div class="modal-dialog modal-lg" id="modal-alert">
		<div class="modal-content">
			<form action="" class="form-horizontal" method="post"></form>
		</div>
	</div>
</div>