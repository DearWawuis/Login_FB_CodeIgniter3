<!-- Josjim207 All Rigths Reserved 2023-->
<div class="container">
	<div class="row">
		<div class="col-xl-6">
				<h1>Bienvenido, </h1>
				<h2><?= $userData["user_data"]["first_name"] ?> <?= $userData["user_data"]["last_name"] ?></h2>
				<div class="card">
            	<img src="<?= $userData["user_data"]['picture']['data']['url'] ?>" alt="Profile Picture" height="220px" width="220px" class="border border-white rounded-circle img-thumbnail">
           		 	<div class="card-body">
						<h4 class="card-title">Datos del usuario</h4>
						<p class="card-text">Nombre: <?= $userData["user_data"]["first_name"] ?></p>
						<p class="card-text">Apellidos: <?= $userData["user_data"]["last_name"] ?></p>
						<p class="card-text">ID: <?= $userData["user_data"]["id"] ?></p>
						<p class="card-text">Correo: <?= $userData["user_data"]["email"] ?></p>
					</div>
				</div>
				<!-- Josjim207 All Rigths Reserved 2023-->

			<br>
			<span>
			<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-accesos" id="btn-accesos">
				<i class="fas fa-eye"></i>
				Login's
			</button>

			<a href="<?=base_url() ?>user_authentication/cerrar/"
			class="btn btn-primary">
				<i class="fas fa-sign-out"></i>
				Logout
			</a>
			</span>
		
		</div>
		<!-- Josjim207 All Rigths Reserved 2023-->

		<!-- Columna para los enlaces -->
		<div class="col-xl-4" id="apartados">
				<br>  
				<!-- Apartado 1 -->
				<h2>Practica 1 - <p><a href="http://dtai.uteq.edu.mx/~josjim207/AWI4/practica1/app/">Enlace a Practica 1</a></p></h2>

				<!-- Apartado 2 -->
				<h2>Practica 2 - <p><a href="http://dtai.uteq.edu.mx/~josjim207/AWI4/practica2/app/">Enlace a Practica 2</a></p></h2>

				<!-- Apartado 3 -->
				<h2>Practica 3 - <p><a href="http://dtai.uteq.edu.mx/~josjim207/AWI4/practica3/">Enlace a Practica 3</a></p></h2>

				<!-- Apartado 4 -->
				<h2>Practica 4 - <p><a href="http://dtai.uteq.edu.mx/~josjim207/AWI4/practica4/app/">Enlace a Practica 4</a></p></h2>

				<!-- Apartado 5 -->
				<h2>Practica 5 - <p><a href="http://dtai.uteq.edu.mx/~josjim207/AWI4/practica5/app/">Enlace a Practica 5</a></p></h2>
		</div>
	</div>
</div>


<!-- MODAL ACCESOS -->
<div class="modal" tabindex="-1" id="modal-accesos">
	<div class="modal-dialog modal-md modal-dialog-centeredl">
		<div class="modal-content">
			<div class="modal-header bg-dark text-white">
				<h1 class="modal-title fs-5 text-white">Acceso</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<table class="table table-hover" id="tabla-accesos">
					<thead>
						<tr class="bg-dark text-white text-center">
							<th>Usuario</th>
							<th>Fecha / Hora</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
					<i class="fas fa-times"></i>
					Cerrar
				</button>
			</div>
		</div>
	</div>
</div>

<script>
	var appData = {
		uri_ws : "<?= base_url() ?>../webservice/",
		uri_app : "<?= base_url() ?>",
		usuario : "<?= $this->session->userData["user_data"][ "first_name" ] ?> <?= $this->session->userData["user_data"][ "last_name" ] ?>"
	}
</script>

<?php

