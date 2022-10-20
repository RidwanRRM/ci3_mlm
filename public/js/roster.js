$(document).keypress(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		if ($('#tgl').val() == ""){
			custom_alert("Tanggal harus diisi..","Peringatan");
		}else{
			show_data();
		}
	}
});

$(document).ready(function(){
	$('#overlay').hide();
	$("#tglroster").datepicker({dateFormat:"yy-mm-dd"});

	$("#tglroster").change(function(){
		if($('#tglroster').val() == ""){
			custom_alert("Tanggal harus diisi..","Peringatan");
			return;
		}else{
			//custom_alert($('#tglroster').val(),"Peringatan");
			//return;
			
			show_data();
		}
	});

});

function simpanform(){
	var url = "schedule_simpan.php";
	var query = $("#form1").serialize();
	$.post(url,query, function(response){
		custom_alert(response,"Informasi");
		clearbox();
		show_data();
	});
}

function clearbox(){
	$('#id').val('');
	$('#nik').val('');
	$('#xnama').val('');
	$('#polaawal').val('');
	$('#polatukar').val('');
	$('#xtgl').val('');	
}

function show_data(){
	$('#overlay').show();
	var tglroster = $('#tglroster').val();
	var url = "<?php echo base_url() ?>" + "index.php/home/roster_submit";
	alert (url);
	$.post(url, {tglroster: tglroster}, function(response){
		$('#overlay').hide();
		$('#listroster tbody').html(response)
	});
}

$(function(){
	var items="<option value=''>-Pilih Pola-</option>";
    $.getJSON("schedule_select.php",function(data){
		$.each(data,function(index,item) 
        {
          items+="<option value='"+item.pola+" - "+item.jammasuk+"'>"+item.pola+" - "+item.jammasuk+"</option>";
        });
        $("#polatukar").html(items);

	});
});


function custom_alert(output_msg, title_msg)
{
    if (!title_msg)
        title_msg = 'Alert';

    if (!output_msg)
        output_msg = 'No Message to Display.';

    $("<div></div>").html(output_msg).dialog({
        title: title_msg,
        resizable: false,
        modal: true,
        buttons: {
            "OK": function() {
                $( this ).dialog( "close" );
            }
        }
    });
}