$(document).ready(function(){
	shortcut.add("F1", function() {
		isValidLogin("login");
	});	
	
	shortcut.add("F12", function() {
		isValidLogin("logout");
	});		
		
});

function clLogin(){
	isValidLogin("login");
}
	
function clLogout(){
	isValidLogin("logout");
}

function isValidLogin(action)
{
	hideshow('loading',1);
	error(0);
	
	$.ajax({
		type: "POST",
		url: "http://192.168.56.101/att_mgmt/index.php/presensi/isValidLogin",
		data: {status:action},
		contentType: "json",
		success: function(msg){
			if(parseInt(msg.status)==1)
			{
				window.location=msg.txt;
			}
			else if(parseInt(msg.status)==0)
			{
				error(1,msg.txt);
			}
		hideshow('loading',0);
		}
	});
	
}


function hideshow(el,act)
{
	if(act) $('#'+el).css('visibility','visible');
	else $('#'+el).css('visibility','hidden');
}

function error(act,txt)
{
	hideshow('error',act);
	if(txt) $('#error').html(txt);
}

function custom_confirm(output_msg, title_msg, action){
	hideshow('loading',0);
	
    if (!title_msg)
        title_msg = 'Alert';

    if (!output_msg)
        output_msg = 'No Message to Display.';

    $("<div></div>").html(output_msg).dialog({
        title: title_msg,
        resizable: false,
        modal: true,
        buttons: {
            "LOGIN": function() {
				$.ajax({
					type: "POST",
					url: "isValidLogin.php?action=login",
					data: $('#regForm').serialize(),
					dataType: "json",
					success: function(msg){
						
						if(parseInt(msg.status)==1)
						{
							window.location=msg.txt;
							
						}
						else if(parseInt(msg.status)==0)
						{
							error(1,msg.txt);
						}
					}
				});
				$( this ).dialog( "close" );
            },
			"LOGOUT": function() {
				$.ajax({
					type: "POST",
					url: "isValidLogin.php?action=logout",
					data: $('#regForm').serialize(),
					dataType: "json",
					success: function(msg){
						
						if(parseInt(msg.status)==1)
						{
							window.location=msg.txt;
							
						}
						else if(parseInt(msg.status)==0)
						{
							error(1,msg.txt);
						}
					}
				});
				$( this ).dialog( "close" );
			}
        }
    });
}

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
            "Ok": function() {
                $( this ).dialog( "close" );
            }
        }
    });
}
