function depositarnext() {  
	let amountTh = document.getElementById('depositHashAmount').value; 
	  
	if (amountTh=="") {
		document.getElementById('buyHashAlertDanger').style.display='';
		$('#buyHashAlertDanger').html('<strong>Error!</strong> TH Amount field cannot be empty.');
	}

	if (amountTh!="") {
      document.getElementById('depositarnext').disabled = true;
	  document.getElementById('depositarnext').innerText = "";
	  document.getElementById('depositarnext').innerText = "Please wait";
		$.ajax({
			data: {"amount" : $("#amount").val()  },
			type: "post",
			url: "depositarnext",
			success: function(e){
				if (e!=1) {
					$("#buyHashAjaxContent").html("");
					$("#buyHashAjaxContent").html(e);
				}
				if (e==1) {
					document.getElementById('buyHashAlertDanger').style.display='';
					$('#buyHashAlertDanger').html('<strong>Error!</strong> Make sure you enter the information correctly.');
				}
				
			},
			error: function (xhr, ajaxOptions, thrownError) {
				console.log(xhr);
				console.log(ajaxOptions);
				console.log(thrownError);
			}
		});
	}
	setTimeout(function(){
		//document.getElementById('depositarnext').disabled = false;
	//	document.getElementById('depositarnext').innerText = "";
		//document.getElementById('depositarnext').innerText = "Next";
	},10000);
}


function cancelDeposit() {
	 clearInterval(timer);
	 clearInterval(checkPaymentInterval);
	document.getElementById('cancelDeposit').disabled = true;
	document.getElementById('cancelDeposit').innerText = "";
	document.getElementById('cancelDeposit').innerText = "Please wait";
setTimeout(function(){
		document.getElementById('cancelDeposit').disabled = false;
		document.getElementById('cancelDeposit').innerText = "";
		document.getElementById('cancelDeposit').innerText = "Cancel";
	},8000);
	$.ajax({
		data: {"1":"1"},
		type: "post",
		url: "depositarcancel",
		success: function(e){
			$("#buyHashAjaxContent").html("");
		 	$("#buyHashAjaxContent").html(e);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(xhr);
			console.log(ajaxOptions);
			console.log(thrownError);
		}
	});
}