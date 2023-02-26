<?php  
  include_once 'classes/class.retirar.php';   
  $datos[] = [
    'id_user' => $_SESSION['id'], 
    'monto' => $_POST['amount'],
    'estado' => "process"
]; 
  RetirarBrain::insertRetirar($datos);
?>
<div class="d-flex justify-content-center align-self-center">
    <div id="buyHashAjaxContent" style="overflow: hidden;">
        <div class="custom-col web">
            <div class="single-portfolio-box">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <ul class="info mt-5">
                            <li class="text-black">
                                Se creo la solicitud de retiro. <br> La transacción se realizara en breve...
                            </li>
                        </ul>
                        <ul class="info mt-5">
                            <li>
                                <button type="button" class="btn btn-danger btn-xs mt-2" onclick="cancelWithdraw()"
                                    id="cancelDeposit">Regresar</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4"><img style="width:120px;height:auto;"
                            src="templates/brain/assets/img/Yes_Check_Circle.png" alt="CKEditor Sample">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>