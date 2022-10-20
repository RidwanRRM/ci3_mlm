<link href="<?echo base_url();?>public/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- DATA TABES SCRIPT -->
<script src="<?php echo base_url(); ?>public/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function() {
		$('#listpola').dataTable({
			"bRetrieve": true,
			"bServerside": true,
			"bProcessing": true,
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": false,
			"bSort": true,
			"bInfo": true,
			"bAutoWidth": true,
			"bJQueryUI": false
		});
	});
</script>
<!-- Full Width Column -->
<div class="content-wrapper">
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Job Order
				<small>List</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Job Order</a></li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-default">
				<div class="box-header with-border">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-clock-o"></i>
							</div>
							<input type="text" class="form-control pull-right" id="date_ot" placeholder="Search.." />
						</div><!-- /.input group -->
					</div><!-- /.form group -->
				</div>
				<div class="box-body">
					<table id="listpola" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No JO</th>
								<th>Project</th>
								<th>Persyaratan</th>
								<th>Deskripsi</th>
								<th>Bekerja</th>
								<th>Lokasi</th>
								<th>Updater</th>
								<th>Last Update</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (count($transjo)) {
								foreach ($transjo as $key => $list) {
									echo "<tr>";
									echo "<td>" . $list['nojo'] . "</td>";
									echo "<td>" . $list['project'] . "</td>";
									echo "<td>" . $list['syarat'] . "</td>";
									echo "<td>" . $list['deskripsi'] . "</td>";
									echo "<td>" . $list['bekerja'] . "</td>";
									echo "<td>" . $list['lokasi'] . "</td>";
									echo "<td>" . $list['upd'] . "</td>";
									echo "<td>" . $list['lup'] . "</td>";
									echo "<td>
										<button type='submit' class='btn btn-primary btn-block btn-sm' id='btndetail' >DETAIL</button>
										<button type='submit' class='btn btn-warning btn-block btn-sm' id='btnedit' >EDIT</button></td>";
									echo "</tr>";
								}
							}
							?>
						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</section><!-- /.content -->
	</div><!-- /.container -->
</div><!-- /.content-wrapper -->