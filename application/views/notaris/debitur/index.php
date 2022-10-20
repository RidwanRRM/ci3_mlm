<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/select2/dist/css/select2.min.css">
<script type="text/javascript">
    $(document).ready(function() {
        $('#list').dataTable({
            dom: "<'row px-2 px-md-4 pt-4'<'col-md-8'l><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row px-2 px-md-4 pt-4'<'col-md-8'i><'col-md-4'p>>",
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            columnDefs: [{
                targets: -1,
                orderable: false,
                searchable: false
            }],
        });
    });
</script>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-table"></i> <span>Debitur</span>
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
        <?php if ($this->session->flashdata('notif')) : ?>
            <div>
                <br>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    <?= $this->session->flashdata('notif'); ?>.
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
                <div class="box">
                    <div class="box-header">
                        <div class="box-tools">
                            <button type="button" class="btn btn-success modal-debitur-nonbank" data-toggle="modal" data-target="#modal-debitur-nonbank" data-url="<?= base_url('index.php/Notaris/addDebitur'); ?>" data-post-url="<?= base_url('index.php/Notaris/TambahDebitur'); ?>">
                                <i class="fa fa-plus"></i> <span>Add</span>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="list">
                            <thead>
                                <tr>
                                    <th>
                                        <b>#</b>
                                    </th>
                                    <th>
                                        <b>NIK</b>
                                    </th>
                                    <th>
                                        <b>Nama</b>
                                    </th>
                                    <th>
                                        <b>Tempat Lahir</b>
                                    </th>
                                    <th>
                                        <b>Tanggal Lahir</b>
                                    </th>
                                    <th>
                                        <b>Jenis Kelamin</b>
                                    </th>
                                    <th>
                                        <b>Alamat</b>
                                    </th>
                                    <th>
                                        <b>Status Pekerjaan</b>
                                    </th>
                                    <th>
                                        <b>Tanggal KTP</b>
                                    </th>
                                    <th>
                                        <b>Action</b>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($debitur as $list) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $list['nik']; ?></td>
                                        <td><?= $list['nama_debitur']; ?></td>
                                        <td><?= $list['tempat_lahir']; ?></td>
                                        <td><?= $list['tgl_lahir']; ?></td>
                                        <td><?= $list['jk']; ?></td>
                                        <td><?= $list['alamat']; ?></td>
                                        <td><?= $list['status_pekerjaan']; ?></td>
                                        <td><?= $list['tgl_ktp']; ?></td>
                                        <td><?php if ($list['bank'] == "bank_1") {
                                                echo "BPR Pamanukan Bangunarta";
                                            } else if ($list['bank'] == "bank_2") {
                                                echo "BPR NBP 29 Pusakanagara";
                                            } else if ($list['bank'] == "bank_3") {
                                                echo "BPR Pamanukan Bangunarta";
                                            } ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary modal-debitur-nonbank" data-toggle="modal" data-target="#modal-debitur-nonbank" data-url="<?= base_url('index.php/Notaris/editDebitur/' . $list['id_debitur']); ?>" data-post-url="<?= base_url('index.php/Notaris/UbahDebitur'); ?>">
                                                <i class="fa fa-pencil"></i> <span>Edit</span>
                                            </button>
                                            <button type="button" class="btn btn-danger modal-debitur-nonbank" data-toggle="modal" data-target="#modal-debitur-nonbank" data-url="<?= base_url('index.php/Notaris/deleteDebitur/' . $list['id_debitur']); ?>" data-post-url="<?= base_url('index.php/Notaris/HapusDebitur'); ?>">
                                                <i class="fa fa-eraser"></i> <span>Delete</span>
                                        </td>

                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div>
            </div>
    </section>
</div>
<div class="modal fade" id="modal-debitur-nonbank" role="dialog">
    <div class="modal-dialog" id="modal-alert">
        <div class="modal-content">
            <form action="" class="form-horizontal" method="post"></form>
        </div>
    </div>
</div>