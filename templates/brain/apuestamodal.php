<?php  include_once 'classes/class.confrontation.php'; ?>
<?php 
$code = Apuesta::request('codigo');
$row = $row = Apuesta::getWhereCodigo($code); 
?>

<div class="d-flex justify-content-center align-self-center">
    <div id="buyHashAjaxContent" style="overflow: hidden;">
        <div class="custom-col web">
            <div class="single-portfolio-box">
                <div class="mb-13 text-center">
                    <h1 class="fs-2hx fw-bold mb-5">
                        <div style="vertical-align: inherit;">
                            <h2 style="vertical-align: inherit;">Elige tu apuesta
                            </h2>
                        </div>
                    </h1>
                </div>

                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label style="vertical-align: inherit;">
                            Tipo de moneda
                        </label>
                        <input type="text" class="form-control" value="USDT" disabled="true">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label style="vertical-align: inherit;">
                            Total de dinero
                        </label>
                        <input type="text" class="form-control" value="<?= User::userData('credits') ?>"
                            disabled="true">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label style="vertical-align: inherit;">
                            Profit
                        </label>
                        <input type="text" class="form-control" name="profit" id="profit"
                            value=" <?= $row[0]['profit'] ."%" ?> " disabled="true">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label style="vertical-align: inherit;">
                            Monto
                        </label>
                        <input type="text" class="form-control" name="amount" id="amount" min="1" max="9999999"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                            onkeyup="calcularGanancia()" required>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label style="vertical-align: inherit;">
                            Ganancia
                        </label>
                        <input type="text" class="form-control" name="ganancia" id="ganancia" disabled="true">
                    </div>
                </div>
                <ul style="justify-content:center;" class="info mt-5">
                    <li>
                        <button type="button" id="cancelApuesta" class="btn btn-danger btn-xs mt-2"
                            onclick="cancelApuesta()">Cancel</button>
                        <button type="submit" id="Submit" onclick="return confirmapuesta()"
                            class="btn btn-success btn-xs mt-2">Save
                            changes</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
var input = document.getElementById("amount");

// Agregamos un EventListener para detectar cuando se ingresa un valor
input.addEventListener("input", function() {
    // Obtenemos el valor actual del campo de texto
    var value = input.value;

    // Verificamos si el valor no está vacío
    if (value.length > 0) {
        console.log("Se ha ingresado un valor en el campo de texto: " + value);
    }
});

function calcularGanancia() {
    var inpGanancia = document.getElementById('ganancia');
    var inpMonto = document.getElementById('amount');

    var amountval = $('#amount').val();
    var saldoval = <?= User::userData('credits') ?>;
    var profitval = <?=$row[0]['profit']  ?>;

    var totalcal = amountval * (profitval / 100);
    inpGanancia.value = totalcal.toFixed(2);

    if (amountval > saldoval) {
        alert('no cuentas con el saldo suficiente..')
        inpMonto.value = '';
        inpGanancia.value = '';
    }
}

function confirmapuesta() {
    var amountval = $('#amount').val(); 
    if (amountval == '') {
        alert("Por favor, complete el campo 'Monto'");
        return false;
    } else {
        if (amountval > 0) { 
            document.getElementById('Submit').disabled = true;
            document.getElementById('Submit').innerText = "";
            document.getElementById('Submit').innerText = "Please wait";
            $.ajax({
                data: {
                    "id": <?=$row[0]['id'] ?>,
                    "amount": $('#amount').val()
                },
                type: "POST",
                url: "apuestaddmodal",
                success: function(e) {
                    $("#buyHashAjaxContent").html(e);

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(xhr);
                    console.log(ajaxOptions);
                    console.log(thrownError);
                }
            });
            return true; 
    } else {
        alert("no cuentas con el saldo suficiente..");
        return false;
    }

}
}

function cancelApuesta() {
    document.getElementById('cancelApuesta').disabled = true;
    document.getElementById('cancelApuesta').innerText = "";
    document.getElementById('cancelApuesta').innerText = "Please wait";
    window.location.replace("apuesta");
}
</script>