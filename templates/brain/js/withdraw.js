function getWithdraws() {
	$("#withdrawResult").html('<span class="text-warning mt-2">Loading...</span>');
	setTimeout(function () {$.ajax({
		data: {"1":"1"},
		type: "post",
		url: "ajax/checkWithdraw.php",
		success: function(e){
			$("#withdrawResult").html("");
			$("#withdrawResult").html(e);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(xhr);
			console.log(ajaxOptions);
			console.log(thrownError);
		}
	});},1500);
}

function withdrawNext(trxMin,usdtMin,bnbMin,busdMin,btcMin) {
    document.getElementById('withdrawNext').disabled = true;
	let amount = document.getElementById('wAmount').value;
	let paymentCoin = document.getElementById('wCoin').value;
	let wWallet = document.getElementById('wWallet').value;

    if(amount.trim() !== '') {
	$.ajax({
		data: {"wallet":wWallet,"amount":amount,"paymentCoin":paymentCoin,"trxMin":trxMin,"usdtMin":usdtMin,"bnbMin":bnbMin,"busdMin":busdMin,"btcMin":btcMin},
		type: "post",
		url: "withdrawnext",
		success: function(e){ 
            $("#buyHashAjaxContent").html(e);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(xhr);
			console.log(ajaxOptions);
			console.log(thrownError);
		}
	});  
} else { 
    alert('Please input amount');
}
}

  
function cancelWithdraw() {
	$.ajax({
		data: {"1":"1"},
		type: "post",
		url: "withdrawcancel",
		success: function(e){
			if (e==1) {
                window.location.replace("withdraw");
			}
			
		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(xhr);
			console.log(ajaxOptions);
			console.log(thrownError);
		}
	});
}