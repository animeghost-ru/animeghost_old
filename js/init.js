$("#chosen").chosen({no_results_text: "Oops, nothing found!"});

$(document).on("click", "[login-submit]", function(e) {
	$('#input').fadeOut(500);
    
    $('#gif').fadeIn(500);
	/*e.preventDefault();
	mail = $('input[id=newMail]').val();
	passwd = $('input[id=newPasswd]').val();
	fa2code = $('input[id=fa2code]').val();
	$.post("//"+document.domain+"/public/login.php", { 'mail': mail, 'passwd': passwd, 'fa2code': fa2code, 'csrf': '1' }, function(json){
		data = JSON.parse(json);
		if(data.err == 'ok'){
			document.location.href="/";
		}else{
			$("#loginMes").html("<font color=red>"+data.mes+"</font>");
		}
	});*/
});