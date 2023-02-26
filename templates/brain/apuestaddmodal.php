<?php  
  include_once 'classes/class.confrontation.php';   
  $datos[] = [
    'id_user' => $_SESSION['id'], 
    'id_confrontation' => $_POST['id'],
    'monto' => $_POST['amount'],
    'estado' => "process"
];  
  $mensaje = Apuesta::insertApuesta($datos);
?>

<div class="d-flex justify-content-center align-self-center">
    <div id="buyHashAjaxContent" style="overflow: hidden;">
        <div class="custom-col web">
            <div class="single-portfolio-box">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <ul class="info mt-5">
                            <li class="text-black">
                                <?= $mensaje[0]['message1'] ?><br> <?= $mensaje[0]['message2'] ?>
                            </li>
                        </ul>
                        <ul class="info mt-5">
                            <li>
                                <button type="button" class="btn btn-danger btn-xs mt-2" onclick="regresar()"
                                    id="regresar">Regresar</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4" style="align-self: center; text-align: -webkit-center;">
                        <?php 
                    if($mensaje[0]['code'] =='0') {   ?>
                        <img style="width:120px;height:auto;" src="templates/brain/assets/img/Yes_Check_Circle.png"
                            alt="CKEditor Sample">
                        <?php  } else {  ?>
                        <img style=" width:120px;height:auto;" src="templates/brain/assets/img/cancelar.jpg"
                            alt="CKEditor Sample">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function regresar() {
    document.getElementById('regresar').disabled = true;
    document.getElementById('regresar').innerText = "";
    document.getElementById('regresar').innerText = "Please wait";
    window.location.replace("apuesta");
}
</script>