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
<script type="text/javascript">
	$(function() {
		$('#tgl_awali').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '0',
			autoclose: true
		});
		$('#tgl_akhiri').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '0',
			autoclose: true
		});

		function load_search() {
			$('#overlay').show();
			var bulan = $('#bulan').val();
			var tahun = $('#tahun').val();
			var reg = $('#reg').val();
			var witel = $('#witel').val();
			var plasa = $('#plasa').val();
			larr = [bulan, tahun, reg, witel, plasa];
			var url = "<?php echo base_url(); ?>index.php/ujian/view_home/";
			$.post(url, {
				larr: larr
			}, function(response) {
				xTable.fnDestroy();
				$('#overlay').hide();
				$('#listpola tbody').html(response);
				$('#listpola').dataTable({
					"bFilter": false,
					"bLengthChange": false,
					"bPaginate": true
				});
			});
		}


		$("#btn_search").click(function() {
			$('#overlay').show();
			var bulan = $('#bulan').val();
			var tahun = $('#tahun').val();
			var reg = $('#reg').val();
			var witel = $('#witel').val();
			var plasa = $('#plasa').val();
			if ((bulan == '') || (tahun == '')) {
				alert('Bulan atau Tahun harus diisi..');
				return false;
			}
			larr = [bulan, tahun, reg, witel, plasa];
			var url = "<?php echo base_url(); ?>index.php/ujian/view_home/";
			$.post(url, {
				larr: larr
			}, function(response) {
				//alert(response);
				xTable.fnDestroy();
				$('#overlay').hide();
				$('#listpola tbody').html(response);
				$('#listpola').dataTable({
					// buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
					// buttons: ['excel'],
					dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'><'col-md-4'f>>" +
						"<'row'<'col-md-12'tr>>" +
						"<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
					lengthMenu: [
						[5, 10, 25, 50, 100, -1],
						[5, 10, 25, 50, 100, "All"]
					],
					// dom: 'Bfrtip',
					columnDefs: [{
						targets: -1,
						orderable: false,
						searchable: false,
						bFilter: false,
						bLenghtChange: false,
						bPaginate: true
					}],
				});
				table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
			});
		});
		var option = {}
		var xTable = $('#listpola').dataTable({
			"bRetrieve": true,
			"bServerside": false,
			"bProcessing": true,
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": false,
			"bSort": false,
			"bInfo": true,
			"bAutoWidth": false,
			"scrollX": true,
			"bJQueryUI": false
		});

		xTable.on('draw.dt', function() {
			$(".btnnilaiuser").click(function() {
				//document.getElementById("frm_lanjut").reset();
				btn = $(this).html();
				var $row = $(this).closest("tr");
				var snilair = $row.find(".snilair").text();

				$("#nilaiuser").val(snilair);
			});

			$(".btnremidial").click(function() {
				btn = $(this).html();
				var $row = $(this).closest("tr");
				var sid = $row.find(".sid").text();
				var sidquiz = $row.find(".sidquiz").text();
				var sperner = $row.find(".sperner").text();
				var slup = $row.find(".slup").text();

				$("#vid").val(sid);
				$("#vidquiz").val(sidquiz);
				$("#pernerz").val(sperner);
				$("#gtgl").val(slup);
			});

			$(".btnnilaitl").click(function() {
				//document.getElementById("frm_lanjut").reset();
				btnnilaitl = $(this).html();
				var $row = $(this).closest("tr");
				var sperner = $row.find(".sperner").text();
				var snama = $row.find(".snama").text();
				var snilair = $row.find(".snilair").text();

				$("#pernertl").val(sperner);
				$("#namatl").val(snama);
				$("#nilaitl").val(snilair);
			});


			/*			$(".btnremidial").click(function(){
							
							btnnilaitl = $(this).html();
							var $row = $(this).closest("tr");
							var sidx	 	= $row.find(".sidx").text();
							
							$("#cid").val(sidx);
						});*/



		});

		$(".btnnilaiuser").click(function() {
			//document.getElementById("frm_lanjut").reset();
			btn = $(this).html();
			var $row = $(this).closest("tr");
			var snilair = $row.find(".snilair").text();

			$("#nilaiuser").val(snilair);
		});

		$(".btnremidial").click(function() {
			btn = $(this).html();
			var $row = $(this).closest("tr");
			var sid = $row.find(".sid").text();
			var sidquiz = $row.find(".sidquiz").text();
			var sperner = $row.find(".sperner").text();
			var slup = $row.find(".slup").text();

			$("#vid").val(sid);
			$("#vidquiz").val(sidquiz);
			$("#pernerz").val(sperner);
			$("#gtgl").val(slup);
		});

		$(".btnnilaitl").click(function() {

			btnnilaitl = $(this).html();
			var $row = $(this).closest("tr");
			var sperner = $row.find(".sperner").text();
			var snama = $row.find(".snama").text();
			var snilair = $row.find(".snilair").text();

			$("#pernertl").val(sperner);
			$("#namatl").val(snama);
			$("#nilaitl").val(snilair);
		});

		/*			$(".btnremidial").click(function(){
						
						btnnilaitl = $(this).html();
						var $row = $(this).closest("tr");
						var sidx	 	= $row.find(".sidx").text();
						
						$("#cid").val(sidx);
					});*/


	});

	function custom_alert(output_msg, title_msg) {
		if (!title_msg) title_msg = 'Alert';
		if (!output_msg) output_msg = 'No Message to Display.';
		$("<div></div>").html(output_msg).dialog({
			title: title_msg,
			resizable: false,
			modal: true,
			buttons: {
				"Ok": function() {
					$(this).dialog("close");
				}
			}
		});
	}

	function validAngka(a) {
		if (!/^[0-9.]+$/.test(a.value)) {
			a.value = a.value.substring(0, a.value.length - 1000);
		}
	}
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
							LAPORAN PERMOHONAN
						</h3>
						<div class="box-header">
							<div class="box-tools">
								<button type="button" class="btn btn-success modal-laporan_permohonan" data-toggle="modal" data-target="#modal-laporan_permohonan" data-url="<?= base_url('index.php/Notaris/addLaporan'); ?>" data-post-url="<?= base_url('index.php/Notaris/TambahLaporan'); ?>">
									<i class="fa fa-plus"></i> <span>Add</span>
								</button>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding table-scroll">
						<div class="table-wrap">
							<table class="table table-bordered main-table" style="min-width: 1000px;">
								<?php if (count($agunan) != 0) {
								?>
									<thead>
										<tr class="active">
											<th rowspan="1" class="fixed-side">ACTION</th>
											<th rowspan="2" class="fixed-side">NO</th>
											<th rowspan="2" class="fixed-side" style="width: 200px">NAMA AGUNAN </th>
											<th rowspan="2" class="fixed-side" style="width: 200px">NAMA DEBITUR </th>
											<th rowspan="2" class="fixed-side" style="width: 200px">NO SERTIFIKAT</th>
											<th rowspan="2" class="fixed-side">NO SPK</th>
											<th rowspan="2">PROSES KE </th>
											<th rowspan="2">LAPORAN PROSES</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($agunan as $list) :
										?>
											<tr>
												<td class="fixed-side action-button">
													<button type="button" class="btn btn-danger modal-laporan_permohonan" data-toggle="modal" data-target="#modal-laporan_permohonan" data-url="<?= base_url('index.php/notaris/deleteLaporan/' . $list['id']); ?>" data-post-url="<?= base_url('index.php/notaris/HapusDataLaporan'); ?>">
														<i class="fa fa-eraser"></i>
													</button>
												</td>
												<!-- <td class="fixed-side action-button">
													<button type="button" class="btn btn-primary modal-laporan_permohonan" data-toggle="modal" data-target="#modal-laporan_permohonan" data-url="<?= base_url('index.php/notaris/editLaporan/' . $list['id']); ?>" data-post-url="<?= base_url('index.php/notaris/UbahDataLaporan'); ?>">
														<i class="fa fa-pencil"></i>
													</button>
												</td> -->
												<td class="fixed-side"><?= $i; ?></td>
												<td class="fixed-side"><?= $list['nama_agunan']; ?></td>
												<td class="fixed-side"><?= $list['nama_debitur']; ?></td>
												<td class="fixed-side"><?= $list['no_surat']; ?></td>
												<td class="fixed-side"><?= $list['no_spk']; ?></td>
												<td><?= $list['proses_ke']; ?></td>
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


<div class="modal fade" id="modal-laporan_permohonan">
	<div class="modal-dialog" id="modal-alert">
		<div class="modal-content">
			<form action="" class="form-horizontal" method="post"></form>
		</div>
	</div>
</div>