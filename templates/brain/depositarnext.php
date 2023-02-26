<?php  
  include_once 'classes/class.depositar.php';  
  $wallet_rand = DepositarBrain::getCodeAleatorio();
  $datos[] = [
    'id_user' => $_SESSION['id'],
    'id_wallet' => $wallet_rand[0]['id'],
    'codigo' => $wallet_rand[0]['codigo'],
    'amount' => $_REQUEST['amount'],
    'estado' => "process",
    'date_end' => DepositarBrain::fechaEnd()
]; 
  DepositarBrain::insertDepositarTemp($datos);
?>

<div class="d-flex justify-content-center align-self-center">
    <div id="buyHashAjaxContent" style="overflow: hidden;">
        <div class="custom-col web">
            <div class="single-portfolio-box">
                <div class="part-txt" style="padding: 15px;">
                    <b class="categoria"><span id="timer-minutes">00<span class="label">
                                Min.</span></span> <span id="timer-seconds">00<span class="label">
                                Sec.</span></span></b><br>
                    <ul class="mt-3 info">
                        <li class="section-title"
                            style="font-size: 18px !important;margin-bottom: 0px !important;color: #edaa29 !important;">
                            <span style="color:#000000 !important;font-size: 18px;font-weight: 400;">Coin:</span><br>
                            USDT
                        </li>
                        <li class="section-title"
                            style="font-size: 18px !important;margin-bottom: 0px !important;color: #edaa29 !important;">
                            <span style="color:#000000 !important;font-size: 18px;font-weight: 400;">Network:</span><br>
                            TRON (TRC-20)
                        </li>
                    </ul>
                    <ul class="info" style="justify-content: space-evenly !important;">
                        <li class="section-title"
                            style="font-size: 18px !important;margin-bottom: 0px !important;color: #edaa29 !important;">
                            <span style="color:#000000 !important;font-size: 18px;font-weight: 400;">Amount:</span><br>
                            <?php  echo $_REQUEST['amount']?> Usdt
                        </li>
                    </ul>
                    <span
                        style="-webkit-background-clip: text;background-clip: text;color:#000000;margin-left: 0px !important;margin-bottom: 5px !important;font-weight: bold !important;">Payment
                        Wallet</span>
                    <div class="input-group mb-3 form-group">
                        <input readonly="" type="text" class="form-control" id="codewallet"
                            value=<?php echo $datos[0]['codigo'] ?> id="walletInputCopy">
                    </div>
                </div>

                <ul class="info mt-5">
                    <li class="text-black">
                        Por favor realizar la transferencia a la siguiente cuenta wallet, <br> Si tienes algunas dudas
                        en la transferencia favor de consultar a soporte.
                    </li>
                </ul>
                <ul class="info mt-5">
                    <li>
                        <button type="button" class="btn btn-danger btn-xs mt-2" onclick="cancelDeposit()"
                            id="cancelDeposit">Cancel</button>
                    </li>
                </ul>

            </div>
        </div>
        <script type="text/javascript">
        var actual = new Date();
        actual.setMinutes(actual.getMinutes() + 30);
        var endDate = actual.getTime();

        var timer = setInterval(function() {
            let now = new Date().getTime();
            let t = endDate - now;
            if (t >= 0) {
                let days = Math.floor(t / (1000 * 60 * 60 * 24));
                let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((t % (1000 * 60)) / 1000);

                document.getElementById("timer-minutes").innerHTML = ("0" + minutes).slice(-2) +
                    "<span class='label'> Min.</span>";

                document.getElementById("timer-seconds").innerHTML = ("0" + seconds).slice(-2) +
                    "<span class='label'> Sec.</span>";
            } else {
                document.getElementById("timer").innerHTML = "Time Expired.";
                clearInterval(checkPaymentInterval);
            }

        }, 1000);

        checkPaymentInterval = setInterval(checkPayment, 5000);

        function checkPayment() {

            $.ajax({
                data: {
                    "id": convertHexadecimal($("#codewallet").val())
                },
                type: "post",
                url: "checkPayment",
                success: function(e) {
                    console.log('g');
                    console.log('test:', e);
                    if (e == 0) {
                        console.log('redireccionar', e);
                        clearInterval(checkPaymentInterval);
                        window.location.replace("depositar");
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(xhr);
                    console.log(ajaxOptions);
                    console.log(thrownError);
                }
            });
        }

        function convertHexadecimal(variable_) {
            let hex = '';
            for (let i = 0; i < variable_.length; i++) {
                hex += variable_.charCodeAt(i).toString(16);
            }
            return hex;
        }
        </script>

    </div>
</div>