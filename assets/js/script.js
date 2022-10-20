$(function () {
	const base_url = "http://localhost:8080/ci3_mlm";
	//could be used anywhere with same ajax like on preference page
	$('#modal-ajax form').on('submit', function (e) {
		e.preventDefault();
		var url = $('#modal-ajax form').attr('action');
		$.ajax({
			url: url,
			type: "POST",
			data: $('#modal-ajax form').serialize(),
			success: function (data) {
				$('#modal-ajax .modal-content form').html(data);
			}
		});
	});

	$('.modal-ajax form').on('click', function () {
		const url = $(this).data('url')
		const postUrl = $(this).data('post-url')
		$('#modal-ajax .modal-content form').attr('action', postUrl);
		$('#modal-ajax .modal-content form').html('');

		$.ajax({
			url: url,
			type: 'get',
			success: function (response) {
				$('#modal-ajax .modal-content form').html(response);
			}
		});
	});

	$('.modal-permohonan').on('click', function () {
		const url = $(this).data('url')
		const postUrl = $(this).data('post-url')
		$('#modal-permohonan .modal-content form').attr('action', postUrl);
		$('#modal-permohonan .modal-content form').html('');

		$.ajax({
			url: url,
			type: 'get',
			success: function (response) {
				$('#modal-permohonan .modal-content form').html(response);
			}
		});
	});

	$('#modal-permohonan form').on('submit', function (e) {
		e.preventDefault();
		var url = $('#modal-permohonan form').attr('action');
		$.ajax({
			url: url,
			type: "POST",
			data: $('#modal-permohonan form').serialize(),
			success: function (data) {
				$('#modal-permohonan .modal-content form').html(data);
			}
		});
	});
	
	//CRUD USER
	$('.modal-users').on('click', function () {
		const url = $(this).data('url')
		const postUrl = $(this).data('post-url')
		$('#modal-users .modal-content form').attr('action', postUrl);
		$('#modal-usersajaxuser .modal-content form').html('');

		$.ajax({
			url: url,
			type: 'get',
			success: function (response) {
				$('#modal-users .modal-content form').html(response);
			}
		});
	});
	
	$('#modal-users form').on('submit', function (e) {
		e.preventDefault();
		var url = $('#modal-users form').attr('action');
		$.ajax({
			url: url,
			type: "POST",
			data: $('#modal-users form').serialize(),
			success: function (data) {
				$('#modal-users .modal-content form').html(data);
			}
		});
	});

	//CRUD USER
	$('.modal-tree').on('click', function () {
		const url = $(this).data('url')
		const postUrl = $(this).data('post-url')
		$('#modal-tree .modal-content form').attr('action', postUrl);
		$('#modal-treeajaxuser .modal-content form').html('');

		$.ajax({
			url: url,
			type: 'get',
			success: function (response) {
				$('#modal-tree .modal-content form').html(response);
			}
		});
	});
	
	$('#modal-tree form').on('submit', function (e) {
		e.preventDefault();
		var url = $('#modal-tree form').attr('action');
		$.ajax({
			url: url,
			type: "POST",
			data: $('#modal-tree form').serialize(),
			success: function (data) {
				$('#modal-tree .modal-content form').html(data);
			}
		});
	});
	
});
