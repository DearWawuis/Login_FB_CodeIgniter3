<?php
$recarga = $recarga ?? false;
?>
<!DOCTYPE html>
<html>
<head>
<?php
if ( $recarga ) :
?>	
	<meta http-equiv="refresh" content="5">
<?php
endif;
?>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $titulo ?></title>

	<!-- LA PODEROSISIMA IMAGEN DEL ELDEN SI-->
	<link rel="icon" type="image/x-icon" href="http://dtai.uteq.edu.mx/~josjim207/images/elden.png">
	<link href="<?= base_url() ?>static/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>static/fontawesome/css/all.min.css" rel="stylesheet" />

<?php
if ( isset( $css ) ) :
	foreach( $css as $link ) :
?>

	<link href="<?= base_url() ?>static/css/<?= $link ?>.css" rel="stylesheet" />

<?php
	endforeach;
endif;
?>

	<script src="<?= base_url() ?>static/js/jquery-3.6.3.min.js"></script>
	<script src="<?= base_url() ?>static/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php
// CICLO PARA PONER LOS JS
if ( isset( $js ) ) :
	foreach( $js as $script ) :
?>
	<script src="<?= base_url() ?>static/js/<?= $script ?>.js"></script>
<?php
	endforeach;
endif;
?>

</head>
<body>

	<div id="cargando">
		<h1>
			<i class="fas fa-spinner fa-pulse fa-3x"></i>
			Cargando...
		</h1>
	</div>

	<!--YA NO PLAGEEN PRROS!-->
<div class="container mt-3">
	<h3><?= $titulo ?></h3>