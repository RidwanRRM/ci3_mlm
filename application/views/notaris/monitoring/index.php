<!-- <script src="<?= base_url('public/'); ?>js/separator.js"></script> -->
<!-- <script src="<?php echo site_url('public/js/separator.js'); ?>" type="text/javascript"></script> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">

<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script src="<?php echo base_url(); ?>public/js/jquery.form.js" type="text/javascript"></script>
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
<script type="text/javascript">
	$(function() {
		$("#btn_search").click(function() {
			var bulan = $('#bulan').val();
			var tahun = $('#tahun').val();

			if ((bulan == '00') || (tahun == '0000')) {
				alert('Bulan atau Tahun harus diisi..');
				return false;
			}
		});
	});
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
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title col-sm-8" style="padding-left: 0;">
							MONITORING
						</h3>
					</div>
					<div class="form-horizontal">
						<form action="<?= base_url('index.php/notaris/monitoring'); ?>" method="post">
							<div class="box-body">
								<table border="1" width="500px" bordercolor="#FFFFFF">
									<tr>
										<th width="100px">
											<label>No SPK</label>
										</th>
										<th width="300px" colspan="2">
											<select class="form-control" id="no_spk" name="no_spk">
												<option value=""> -- Pilih No SPK -- </option>
												<?php foreach ($spk as $a) : ?>
													<option value="<?= $a['no_spk']; ?>" <?php if (set_value('no_spk') == $a['no_spk']) echo 'selected'; ?>><?= $a['no_spk']; ?></option>
												<?php endforeach; ?>
											</select>
										</th>
									</tr>
									<tr>
										<th width="100px">
											<label>No Surat</label>
										</th>
										<th width="300px" colspan="2">
											<select class="form-control" id="no_surat" name="no_surat">
												<option value=""> -- Pilih No Surat -- </option>
												<?php foreach ($surat as $a) : ?>
													<option value="<?= $a['no_surat']; ?>" <?php if (set_value('no_surat') == $a['no_surat']) echo 'selected'; ?>><?= $a['no_surat']; ?></option>
												<?php endforeach; ?>
											</select>
										</th>
										<th width="100px" rowspan="5">
											<center><button type="submit" class="btn btn-primary" id="btn_search">Search</button></center>
										</th>
									</tr>
								</table>
							</div>
						</form>
					</div>
				</div><!-- /.box -->
			</div>
			<div id="listpoladiv" class="col-md-12">
				<div class="box">
					<div class="box-body no-padding table-scroll">
						<div class="table-wrap">
							<table class="table table-bordered main-table" style="min-width: 1000px;">
								<?php if (count($agunan) != 0) {
								?>
									<thead>
										<tr class="active">
											<th rowspan="2" class="fixed-side">NO</th>
											<th rowspan="2" class="fixed-side" style="width: 200px">NAMA AGUNAN </th>
											<th rowspan="2" class="fixed-side" style="width: 200px">NO SERTIFIKAT</th>
											<th rowspan="2" class="fixed-side">JENIS HAK</th>
											<th rowspan="2">DESA</th>
											<th rowspan="2">NAMA</th>
											<th rowspan="2">TANGGAL SURAT</th>
											<th rowspan="2">NO SURAT</th>
											<th rowspan="2">LUAS (m<sup>2</sup>)</th>
											<th rowspan="2">TGL COVERNOTE</th>
											<th rowspan="2">NO COVERNOTE</th>
											<th rowspan="2">TGL REALISASI</th>
											<th rowspan="2">NO SPK</th>
											<th rowspan="2">JKW PROSES</th>
											<th rowspan="2">TANGGAL LAPORAN</th>
											<th rowspan="2">LAPORAN PROSES</th>
											<!-- <th rowspan="2">TGL REALISASI</th>
										<th rowspan="2">NO SPK</th> -->
											<!-- <th rowspan="2">JKW PROSES</th> -->
										</tr>
									</thead>
									<tbody>

										<?php
										$i = 1;
										foreach ($agunan as $list) :
										?>
											<tr>
												<td class="fixed-side"><?= $i; ?></td>
												<td class="fixed-side"><?= $list['nama_agunan']; ?></td>
												<td class="fixed-side"><?= $list['no_agunan']; ?></td>
												<td class="fixed-side"><?= $list['jenis_hak']; ?></td>
												<td><?= $list['desa']; ?></td>
												<td><?= $list['nama_debitur']; ?></td>
												<td><?= $list['tgl_surat']; ?></td>
												<td><?= $list['no_surat']; ?></td>
												<td><?= $list['luas']; ?></td>
												<td><?php
													if ($list['tgl_covernote'] == '0000-00-00') {
														echo "-";
													} else {
														echo $list['tgl_covernote'];
													}
													?>
												</td>
												<td><?php
													if ($list['no_covernote'] == NULL) {
														echo "-";
													} else {
														echo $list['no_covernote'];
													}
													?>
												</td>
												<td><?php
													if ($list['tgl_realisasi'] == '0000-00-00') {
														echo "-";
													} else {
														echo $list['tgl_realisasi'];
													}
													?>
												</td>
												<td><?php
													if ($list['no_spk'] == NULL) {
														echo "-";
													} else {
														echo $list['no_spk'];
													}
													?>
												</td>
												<td><?php
													if ($list['jkw_proses'] == '0000-00-00') {
														echo "-";
													} else {
														echo $list['jkw_proses'];
													}
													?>
												</td>
												<td><?= $list['tanggal']; ?></td>
												<td><?= $list['proses_bulan']; ?></td>
											</tr>
										<?php
											$i++;
										endforeach;
										?>
									<?php } else {
									echo "<center>Data not found.</center>";
								}
									?>
									</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /.box-header -->


				<!-- /.box-body -->

			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="modal-agunan">
	<div class="modal-dialog" id="modal-alert">
		<div class="modal-content">
			<form action="" class="form-horizontal" method="post"></form>
		</div>
	</div>
</div>