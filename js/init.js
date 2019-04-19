$("#chosen").chosen({no_results_text: "Oops, nothing found!"});

$(document).on("click", "[login-submit]", function(e) {
	//$('#input').fadeOut(500);

    //$('#gif').fadeIn(500);
	e.preventDefault();
	mail = $('input[id=login]').val();
	passwd = $('input[id=pass]').val();
	$.post("//"+document.domain+"/public/login.php", { 'login': mail, 'pass': passwd}, function(json){
		data = JSON.parse(json);
		if(data.err == 'ok'){
			document.location.href="/";
		}else{
			$("#loginMes").html("<font color=red>"+data.mes+"</font>");
		}
	});
});
