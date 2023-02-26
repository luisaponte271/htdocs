<!--
Developed by
 _   _   _   _   _____   _____  __    __  _   __   _  
| | | | | | | | /  ___| /  _  \ \ \  / / | | |  \ | |
| |_| | | | | | | |     | | | |  \ \/ /  | | |   \| |
|  _  | | | | | | |  _  | | | |   \  /   | | | |\   |
| | | | | |_| | | |_| | | |_| |   / /    | | | | \  |
|_| |_| \_____/ \_____/ \_____/  /_/     |_| |_|  \_|

-----------------------------------------------------
      EDITADO Y LANZADO CON <3 by SrThrone
          www.youtube.com/SrThroneIT
-----------------------------------------------------
-->
<!DOCTYPE html>
<html lang="es" dir="es">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $.ajaxSetup({
        cache: true
    });
    setInterval(function() {
        $('#onlinecount').load('/onlinecount');
    }, 1500);
    $("#onlinecount").click(function() {
        $('#onlinecount').load('/onlinecount');
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $.ajaxSetup({
        cache: true
    });
    setInterval(function() {
        $('#roomcount').load('/roomcount');
    }, 5500);
    $("#roomcount").click(function() {
        $('#roomcount').load('/roomcount');
    });
});
</script>

<head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/depositar.css">
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php 
  include_once 'includes/alerts.php';  
?>

<body>
    <div id="container">
        <div class="wrapper">

            <?php include_once 'includes/header.php'; ?>

            <div class="content">
                <div class="wrapper" style="overflow: auto;">
                    <section>
                        <div class="container">
                            <div class="row mbr-justify-content-center">
                                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                    <div class="d-flex flex-column flex-column-fluid">
                                        <div id="kt_app_content" class="app-content flex-column-fluid">
                                            <div id="kt_app_content_container" class="app-container container-fluissd">
                                                <br>
                                                <h1 class="text-black">
                                                    <div style="vertical-align: inherit;">
                                                        <h1 style="vertical-align: inherit;">Agregar depósito</h1>
                                                    </div>
                                                </h1>
                                                <div class="card" id="kt_pricing">
                                                    <div class="card-body p-lg-17"
                                                        style="padding: 2rem 0rem !important;">
                                                        <div class="container">
                                                            <div class="mb-13 text-center">
                                                                <h1 class="fs-2hx fw-bold mb-5">
                                                                    <div style="vertical-align: inherit;">
                                                                        <h1 style="vertical-align: inherit;">Comprar
                                                                            USDT </h1>
                                                                    </div>
                                                                </h1>
                                                            </div>

                                                            <div
                                                                class="d-flex justify-content-center align-self-center">
                                                                <div id="buyHashAjaxContent" style="overflow: hidden;">
                                                                    <div class="col-lg-12 alert alert-danger mt-2"
                                                                        role="alert" id="buyHashAlertDanger"
                                                                        style="display:none;"></div>

                                                                    <div class="col-md-12 mt-2">
                                                                        <div class="form-group">
                                                                            <label style="vertical-align: inherit;">
                                                                                Cantidad de USDT que desea comprar
                                                                            </label>
                                                                            <input type="text" required="" id="amount"
                                                                                min="1" max="9999999"
                                                                                class="form-control"
                                                                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label style="vertical-align: inherit;">
                                                                                La moneda que quieres pagar
                                                                            </label>
                                                                            <input type="text" required=""
                                                                                id="depositHashAmount" min="1"
                                                                                value="Tether (USDT)" max="9999999"
                                                                                class="form-control" disabled>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 mt-2">
                                                                        <div
                                                                            class="btn-box justify-content-end text-center">
                                                                            <button type="submit"
                                                                                class="btn btn-success"
                                                                                onclick="depositarnext()"
                                                                                id="depositarnext">Próximo</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="templates/brain/js/depositar.js"></script>