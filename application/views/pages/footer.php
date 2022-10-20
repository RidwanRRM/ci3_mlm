<footer class="main-footer">
	<div class="container">
		<strong>Copyright &copy; 2022 <a href="https://github.com/ridwanrrm">RidwanRRM</a>.</strong> All rights reserved.
	</div><!-- /.container -->
</footer>
</div><!-- ./wrapper -->


<div class="modal fade" id="modal-ajax">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal" action="" method="post"></form>
		</div>
	</div>
</div>

</body>

</html>
<!-- jQuery 3 -->
<!-- <script src="<?php echo base_url(); ?>public/bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?php echo base_url(); ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="<?php echo base_url(); ?>public/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- <script src="<?php echo base_url(); ?>public/bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/dist/js/demo.js"></script>
<!-- <script src="https://code.jquery.com/jquery-2.2.4.js"></script> -->
<script type="text/javascript">
	jQuery("#bagian_kantor").change(function() {
		if (jQuery("#bagian_kantor").val() == "Add new") {
			jQuery("#bagian_kantor-input").attr("disabled", false)
		} else {
			jQuery("#bagian_kantor-input").attr("disabled", true)
		}
	});
	jQuery("#ubagian_kantor").change(function() {
		if (jQuery("#ubagian_kantor").val() == "Add new") {
			jQuery("#ubagian_kantor-input").attr("disabled", false)
		} else {
			jQuery("#ubagian_kantor-input").attr("disabled", true)
		}
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".main-table").each(function() {
			$(this).clone(true).appendTo($(this).parents('.table-scroll')).addClass('clone');
		});
	});
</script>