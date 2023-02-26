<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
	$_SESSION['title'] = '';
	$_SESSION['slogan'] = '';
	$_SESSION['news'] ='';
?>
<aside class="right-side">
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<div class="col-md-8">
				<!--earning graph start-->
				<section class="panel">
					<header class="panel-heading">
						<b>   EL PANEL DE PERSONAL UTILIZADO EN  <?= $config['hotelName'] ?> Hotel.</b><br>
					</header>
					<div class="panel-body">
						<?php 
							
						?>
						Bienvenido a <?= $config['hotelName'] ?> Hotel's Housekeeping<b></b>!<br>
						Use el Panel de administración como debe ser, las reglas son las reglas y se han acordado arreglos.						
                        <br>Todo lo que haces aquí lo podemos averiguar.
						<br>
						<br>
						<br>Puede ser que no todo funcione y que haya pocas funciones.
						<br>¡Vamos a construir tranquilamente y crecer más y más durante los meses!!
						<br>
						<br>
						Si algo no funciona, debe informarlo al propietario de<b> <?= $config['hotelName'] ?> Owner</b>.
						<br>¡Entonces él puede hacer algo para arreglarlo/mejorarlo!
					</div>
				</section>
				<!--earning graph end-->
			</div>
			<div class="col-lg-4">
				<!--chat start-->
				<section class="panel">
					<header class="panel-heading">
						<b>   Usando el Panel de administración </b>
					</header>
					<div class="panel-body">
						<div class="alert alert-block alert-danger">
							<button data-dismiss="alert" class="close close-sm" type="button">
								<i class="fa fa-times"></i>
							</button>
							<strong>El panel de Administraciòn no está destinado a perder el tiempo, sino a facilitar el manejo de las cosas. Si te atrapan jugando en el Panel de Administraciòn de <?= $config['hotelName'] ?>, Tu rango sera dado de baja.
							</div>
						</div>
					</section>
				</div>
			</div>
			<?php
				include_once "includes/footer.php";
				include_once "includes/script.php";
			?>					