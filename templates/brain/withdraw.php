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
    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php 
  include_once 'includes/alerts.php';
?>

<body>
    <div id="container">
        <div class="wrapper">

            <?php include_once 'includes/header.php'; 
                       include_once 'classes/class.userbrain.php'; 
                       include_once 'classes/class.retirar.php';   
                      $retirar = RetirarBrain::get(); 
            ?>

            <div class="content">
                <div class="wrapper" style="overflow: auto;">
                    <section>
                        <div class="container">
                            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                                <!--begin::Content wrapper-->
                                <div class="d-flex flex-column flex-column-fluid">
                                    <!--begin::Content-->
                                    <div id="kt_app_content" class="app-content flex-column-fluid">
                                        <!--begin::Content container-->
                                        <div id="kt_app_content_container" class="app-container container-fluissd"><br>
                                            <h1 class="text-black">Retirar</h1>
                                            <div class="card" id="kt_pricing">
                                                <div class="card-body p-lg-17" style="padding: 2rem 0rem !important;">
                                                    <div class="container">
                                                        <div class="mb-13 text-center">
                                                            <h1 class="fs-2hx fw-bold mb-5">Conseguir retirar</h1>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-self-center">
                                                            <div id="buyHashAjaxContent">
                                                                <h3 style="font-size: 1.35rem;">Info</h3>
                                                                <p style="font-size: 0.9rem;">
                                                                    El límite mínimo de retiro es de <span
                                                                        class="text-warning">$2</span>. <br>
                                                                    Puedes crear una solicitud una vez cada <span
                                                                        class="text-warning">1 day</span>. <br>
                                                                    Los retiros son automáticos, se procesan dentro
                                                                    un promedio de <u>15 minutes</u><br>
                                                                    después del sistema
                                                                    proporciona los controles necesarios.
                                                                </p>
                                                                <span style="font-size: 0.9rem;"
                                                                    class="text-black">Saldo Retirable: <span
                                                                        style="color:green;"
                                                                        id="wBalance">$0.73</span></span><br>
                                                                <div class="col-md-12 mt-5">
                                                                    <div class="form-group">
                                                                        <label>El saldo que deseas retirar</label>
                                                                        <input class="form-control" type="text"
                                                                            id="wAmount" min="1" max="9999999"
                                                                            onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                                            placeholder="e.g 1000" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-2">
                                                                    <div class="form-group">
                                                                        <label>Tu Billetera</label>
                                                                        <input class="form-control" type="text"
                                                                            id="wWallet" readonly="true"
                                                                            value=<?php  UserBrain::getBilletera($_SESSION['id']); ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-2">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            La moneda que quieres que te paguen</label>
                                                                        <select id="wCoin" class="form-select"
                                                                            required=""
                                                                            onchange="calculatorFee('0.06392','1','318.6','1','23793.1','38','2','0.0175','2','0.0004')"
                                                                            disabled>
                                                                            <option value="0">Tether (USDT) 4% Fee
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mt-3 mb-3">
                                                                    <div class="btn-box justify-content-end">
                                                                        <button type="button"
                                                                            class="btn btn-warning text-black"
                                                                            onclick="withdrawNext('38','2','0.0175','2','0.0004')"
                                                                            id="withdrawNext">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row gy-5 g-xl-10 mt-3">
                                                <div class="col-xl-12 mb-5 mb-xl-10">
                                                    <div class="card card-flush h-xl-100">
                                                        <div class="card-header pt-7">
                                                            <h3 class="card-title align-items-start flex-column">
                                                                <span class="card-label fw-bold text-gray-800">Tus
                                                                    solicitudes de retiros</span>
                                                            </h3>
                                                        </div>
                                                        <div class="card-body pt-2">
                                                            <div id="kt_table_widget_4_table_wrapper"
                                                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                <?php  if(count($retirar) > 0) { ?>
                                                                <br>
                                                                <div class="table-responsive">
                                                                    <table class="table table-row-dashed"
                                                                        style="font-size:14px !important;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">USD Amount</th>
                                                                                <th scope="col">Coin Amount</th>
                                                                                <th scope="col">Status</th>
                                                                                <th scope="col">Add Time</th>
                                                                                <th scope="col">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php 
                                                                              for($i=0;$i<count($retirar);$i++){ ?>
                                                                            <tr>
                                                                                <td><?php echo $retirar[$i]['monto']; ?>
                                                                                </td>
                                                                                <td><?php echo "USDT" ?>
                                                                                </td>
                                                                                <td><?php echo $retirar[$i]['estado']; ?>
                                                                                </td>
                                                                                <td><?php echo $retirar[$i]['date_created']; ?>
                                                                                </td>
                                                                                <td><?php
                                                                                 if ($retirar[$i]['estado'] == "process") {
                                                                                    echo "<img style='width:20px;' src='templates/brain/assets/img/pendiente.jpg'>";
                                                                                  } else if  ($retirar[$i]['estado'] == "success"){ 
                                                                                    echo "<img style='width:20px;' src='templates/brain/assets/img/sucess.png'>";
                                                                                  } 
                                                                                  else {
                                                                                    echo "<img style='width:20px;' src='templates/brain/assets/img/cancelar.jpg'>";
                                                                                  } 
                                                                             ?></td>
                                                                            </tr>
                                                                            <?php  } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <?php } else { ?>
                                                                <span class="text-warning mt-2">No tienes ninguno
                                                                    petición de retiro.</span>
                                                                <?php } ?>
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
<script src="templates/brain/js/withdraw.js"></script>

