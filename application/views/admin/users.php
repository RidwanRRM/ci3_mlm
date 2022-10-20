 <!-- Bootstrap 3.3.7 -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/font-awesome/css/font-awesome.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
 <!-- DataTables -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
 <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css">
 <!-- Font Awesome -->
 <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/font-awesome/css/font-awesome.min.css"> -->
 <!-- Ionicons -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
 <script type="text/javascript">
 	$(document).ready(function() {
 		$("#btn_update").click(function() {
 			$('#overlay').show();
 			var nama = $('#unama').val();

 			if (nama == "") {
 				alert("Nama harus di isi");
 				return false;
 			}
 		});
 		$('#list').dataTable({
 			// buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
 			// buttons: ['excel'],
 			dom: "<'row px-2 px-md-4 pt-4'<'col-md-8'l><'col-md-4'f>>" +
 				"<'row'<'col-md-12'tr>>" +
 				"<'row px-2 px-md-4 pt-4'<'col-md-8'i><'col-md-4'p>>",
 			lengthMenu: [
 				[5, 10, 25, 50, 100, -1],
 				[5, 10, 25, 50, 100, "All"]
 			],
 			// dom: 'Bfrtip',
 			columnDefs: [{
 				targets: -1,
 				orderable: false,
 				searchable: false
 			}],
 		});
 		// table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
 	});
 </script>
 <div class="content-wrapper">
 	<section class="content-header">
 		<h1>
 			<i class="fa fa-users"></i> <span>Users</span>
 			<!-- <small>preview of simple tables</small> -->
 		</h1>
 		<?php if ($this->session->flashdata('flash')) : ?>
 			<div>
 				<br>
 				<div class="alert alert-success alert-dismissible">
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
 		<div class="box">
 			<div class="box-body">
 				<table class="table table-bordered table-hover" id="list">
 					<thead>
 						<tr>
 							<th>
 								<b>#</b>
 							</th>
 							<th>
 								<b>Username</b>
 							</th>
 							<th>
 								<b>Name</b>
 							</th>
 							<th>
 								<b>Role</b>
 							</th>
 							<th>
 								<b>Action</b>
 							</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php
							// if (count($preferences)) {
							$i = 1;
							foreach ($users as $list) : ?>
 							<tr>
 								<td><?= $i; ?></td>
 								<td><?= $list['username']; ?></td>
 								<td><?= $list['nama']; ?></td>
 								<td><?php if ($list['level'] == 1) {
											echo "Administrator";
										} else if ($list['level'] == 2) {
											echo "Unit";
										}
										if ($list['level'] == 3) {
											echo "Direktur";
										}
										if ($list['level'] == 4) {
											echo "Sesditjen";
										}
										if ($list['level'] == 5) {
											echo "Dirjen";
										} ?>
 								</td>
 								<td>
 									<button type="button" class="btn btn-primary ubahmodalU" data-toggle="modal" data-target="#UbahData" data-id_users="<?= $list['id_users']; ?>">
 										<i class="fa fa-pencil"></i> <span>Edit</span>
 									</button>
 									<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete">
                                                <i class="fa fa-eraser"></i> <span>Delete</span>
                                            </button> -->
 									<!-- <a href="" class="btn btn-primary fa fa-edit ubahmodalU" data-toggle="modal" data-target="#UbahData" data-id_users="<?= $list['id_users']; ?>"> Ubah</a> -->
 								</td>
 							</tr>
 							<?php $i++; ?>
 						<?php endforeach; ?>
 					</tbody>
 				</table>
 			</div><!-- /.box-body -->

 			<div class="modal fade" id="UbahData" role="dialog">
 				<div class="modal-dialog" id="modal-alert">
 					<div class="modal-content">
 						<div class="modal-header">
 							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 							<h4 class="modal-title">Edit User</h4>
 						</div>
 						<div class="modal-body">
 							<form action="<?= base_url('index.php/Admin/UbahUsers'); ?>" method="post" class="form-horizontal">
 								<div class="box-body">
 									<div class="form-group">
 										<input type="hidden" class="form-control" id="uid_users" name="id_users" readonly>
 										<!-- <label class="col-sm-4 control-label">Username </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </div>
                                                    <input type="text" class="form-control" id="uusername" name="username" readonly>
                                                </div> -->
 									</div>
 									<div class="form-group">
 										<label class="col-sm-4 control-label">Nama </label>
 										<div class="col-sm-8">
 											<input type="text" class="form-control" id="unama" name="nama">
 										</div>
 									</div>

 									<div class="form-group">
 										<label class="col-sm-4 control-label">Password </label>
 										<div class="col-sm-8">
 											<input type="text" class="form-control" id="password" name="password">
 										</div><!-- /.form group -->
 									</div>
 									<div class="form-group">
 										<label class="col-sm-4 control-label">Password Confirmation </label>
 										<div class="col-sm-8">
 											<input type="text" class="form-control" id="password_confirm" name="password_confirm">
 										</div><!-- /.form group -->
 									</div>
 									<div class="form-group">
 										<label class="col-sm-4 control-label">Role</label>
 										<div class="col-sm-8">
 											<select class="form-control" id="ulevel" name="level">
 												<option value="1">Administrator</option>
 												<option value="2">Unit</option>
 												<option value="3">Direktur</option>
 												<option value="4">Sesditjen</option>
 												<option value="5">Dirjen</option>
 											</select>
 										</div>
 									</div>
 								</div>
 						</div>
 						<div class="modal-footer">
 							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
 							<button type="submit" class="btn btn-primary" id="btn_update">Update</button>
 							</form><!-- /.form-horizontal -->
 						</div>
 					</div><!-- /.modal-content -->
 				</div>
 			</div>
 		</div>
 	</section>
 </div>