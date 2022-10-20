<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/bower_components/Ionicons/css/ionicons.min.css">
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
            <i class="fa fa-users"></i> <span>Perhitungan Bonus</span>
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
                        <!-- <div class="box-tools">
                            <button type="button" class="btn btn-success modal-users" data-toggle="modal" data-target="#modal-users" data-url="<?= base_url('index.php/Admin/addMember'); ?>" data-post-url="<?= base_url('index.php/Admin/TambahMember'); ?>">
                                <i class="fa fa-plus"></i> <span>Add</span>
                            </button>
                        </div> -->
                    </div>
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
                                        <b>Member ID</b>
                                    </th>
                                    <th>
                                        <b>Name</b>
                                    </th>
                                    <th>
                                        <b>Level</b>
                                    </th>
                                    <th>
                                        <b>Bonus</b>
                                    </th>
                                    <th>
                                        <b>Action</b>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($users as $list) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $list['username']; ?></td>
                                        <td><?= $list['member_id']; ?></td>
                                        <td><?= $list['nama']; ?></td>
                                        <td>Level <?= $list['level']; ?></td>
                                        <?php if ($list['bonus'] == 0 || $list['bonus'] == '') { ?>
                                            <td>$0</td>
                                        <?php } else { ?>
                                            <td>$<?= $list['bonus']; ?></td>
                                        <?php } ?>
                                        <td>
                                            <button type="button" class="btn btn-primary modal-users" data-toggle="modal" data-target="#modal-users" data-url="<?= base_url('index.php/Admin/countBonus/' . $list['id_users']); ?>" data-post-url="<?= base_url('index.php/Admin/hitungBonus'); ?>">
                                                <!-- <i class="fa fa-pencil"></i> <span>Edit</span> -->
                                                <span>Hitung</span>
                                            </button>
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
<div class="modal fade" id="modal-users" role="dialog">
    <div class="modal-dialog" id="modal-alert">
        <div class="modal-content">
            <form action="" class="form-horizontal" method="post"></form>
        </div>
    </div>
</div>