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

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>   -->
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/apuesta.css">

    <title><?= $config['hotelName'] ?>: <?= User::userData('username') ?></title>
</head>
<?php  
  include_once 'classes/class.confrontation.php';
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
                                                        <h1 style="vertical-align: inherit;">Lista de enfrentamientos
                                                        </h1>
                                                    </div>
                                                </h1>
                                                <div class="card" id="kt_pricing">
                                                    <div class="card-body p-lg-17"
                                                        style="padding: 2rem 0rem !important;">
                                                        <div class="container">
                                                            <div id="buyHashAjaxContent" style="overflow: hidden;">
                                                                <div class="mb-13 text-center">
                                                                    <h1 class="fs-2hx fw-bold mb-5">
                                                                        <div style="vertical-align: inherit;">
                                                                            <h1 style="vertical-align: inherit;">Equipos
                                                                            </h1>
                                                                        </div>
                                                                    </h1>
                                                                </div>

                                                                <div class="justify-content-center align-self-center">
                                                                    <?php  $credits =  User::userData('credits'); 
                                                                         if($credits<0) { 
                                                                    ?>
                                                                    <div class="col-md-12">
                                                                        <div style="background-color:#addbba ;"
                                                                            class="alert alert-secondary" role="alert">
                                                                            Recuerda que no cuentas con el saldo
                                                                            suficiente para
                                                                            apostar, seleccionar lo
                                                                            sgte para recargar <a
                                                                                class="btn btn-sm btn-warning text-black"
                                                                                href="depositar">Buy</a>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <?php    
                                                                        $f_404 = 0;
                                                                        $row = Apuesta::getAll(); 
                                                                        if(Apuesta::exists(count($row))){   
                                                                            for($indice=0;$indice<count($row);$indice++){    
                                                                                 if(!Apuesta::endApuesta($row[$indice]))  {   ?>
                                                                            <div class="col-sm-4">
                                                                                <div style="background-color: antiquewhite; border-style: ridge;"
                                                                                    class="card-body">
                                                                                    <h5 style="text-align: -webkit-center;"
                                                                                        class="card-title">
                                                                                        <?php echo $row[$indice]['title']; ?>
                                                                                    </h5>
                                                                                    <div
                                                                                        class="row justify-content-md-center">
                                                                                        <div class="col-md ">
                                                                                            <div
                                                                                                style="text-align: -webkit-center;">
                                                                                                <div
                                                                                                    class="text-center col-md-4 columna-img-center columna-img-tamaño">
                                                                                                    <?php $img = base64_encode($row[$indice]['teamimgblob']);  
                                                                                                                    echo '<img class="img-apuesta" src="data:image/jpeg;base64,'.$img.'" alt="..."/>';?>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="text-center col-md-4 columna-txt">
                                                                                                    <p><?php echo $row[$indice]['team']; ?>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <div class="text-center">
                                                                                                <table class="table">
                                                                                                    <thead
                                                                                                        style="border-style: hidden; ">
                                                                                                        <tr>
                                                                                                            <td><b
                                                                                                                    class="apuesta">start<b>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                            </td>
                                                                                                            <td><b
                                                                                                                    class="apuesta">end
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td
                                                                                                                style="border-bottom-width: inherit;">
                                                                                                                <?php echo Apuesta::convertirHora($row[$indice]['date_hour_start']); ?>
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="border-bottom-width: inherit;">
                                                                                                                <b>-</b>
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="border-bottom-width: inherit;">
                                                                                                                <?php echo Apuesta::convertirHora($row[$indice]['date_hour_end']); ?>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <button type="button"
                                                                                                    id="apuesta<?=  $indice; ?>"
                                                                                                    class="btn btn-primary"
                                                                                                    onclick="apuestaModal('<?=  $indice; ?>','<?=  $row[$indice]['codigo']; ?>');">
                                                                                                    Apuesta
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- cerrar llave if -->
                                                                            <?php    }   else { $f_404++;    }  ?>

                                                                            <!-- cerrar llave for -->
                                                                            <?php   } ?>
                                                                            <?php 
                                                                        if($f_404==count($row)) {  ?>

                                                                            <div style="text-align: -webkit-center;"
                                                                                class="col-12">
                                                                                <img style="width: 140px;"
                                                                                    src="templates/brain/assets/img/1f97a.png"
                                                                                    alt="..." />
                                                                                <img style="width: 80px; position: fixed;"
                                                                                    src="templates/brain/assets/img/message.png"
                                                                                    alt="..." />
                                                                            </div>

                                                                            <?php  }
                                                                    ?>

                                                                        </div>
                                                                    </div>
                                                                    <!-- cerrar llave cantidad< 0-->
                                                                    <?php   }  else {  ?>

                                                                    <div style="text-align: -webkit-center;"
                                                                        class="col-12">
                                                                        <img style="width: 140px;"
                                                                            src="templates/brain/assets/img/1f97a.png"
                                                                            alt="..." />
                                                                        <img style="width: 80px; position: fixed;"
                                                                            src="templates/brain/assets/img/message.png"
                                                                            alt="..." />
                                                                    </div>
                                                                    <?php  } ?>
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
<?php 
           
?>

<script src="templates/brain/js/boostrap-bundle.min.js"></script> 
<script>
function apuestaModal($x, $codigo) {
    document.getElementById('apuesta' + $x).disabled = true;
    document.getElementById('apuesta' + $x).innerText = "";
    document.getElementById('apuesta' + $x).innerText = "Please wait";
    $.ajax({
        data: {
            "codigo": $codigo
        },
        type: "get",
        url: "apuestamodal",
        success: function(e) {
            $("#buyHashAjaxContent").html(e);
            //  if (e != 1) {
            //      $("#buyHashAjaxContent").html("");
            //      $("#buyHashAjaxContent").html(e);
            //  }
            //  if (e == 1) {
            //      document.getElementById('buyHashAlertDanger').style.display = '';
            //      $('#buyHashAlertDanger').html(
            //          '<strong>Error!</strong> Make sure you enter the information correctly.');
            //  }

        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(xhr);
            console.log(ajaxOptions);
            console.log(thrownError);
        }
    });
    // setTimeout(function() {
    //     document.getElementById('apuesta').disabled = false;
    //     document.getElementById('apuesta').innerText = "";
    //     document.getElementById('apuesta').innerText = "Apuesta";
    // }, 10000);
}
</script>