<?php
function verifica_sesion( $id) {
	// Referencia a mi propia aplicación
	$miApp = &get_instance();

	if ( !(	$miApp->session->has_userdata( "id" ) &&
				$miApp->session->id== $id  ) ) {
		// La sesión en inválida
		mensaje( "Sesión inválida", "danger" );
		redirect( base_url() );
	}
}
?>