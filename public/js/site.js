function refresh_files()
{
	$.get('./upload/files/')
	.success(function (data){
		$('#files').html(data);
	});
}