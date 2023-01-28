<!-- ENTRADA -->

<?php 
if (!empty($_POST["btnentrada"])){
	if (!empty($_POST["txtci"])){
			$ci=$_POST["txtci"];

			$consulta = $conexion->query(" select count(*) as 'total' from persona where ci='$ci' ");
			$id = $conexion->query(" select id_persona from persona where ci='$ci'");
			if ($consulta->fetch_object()->total > 0) {
				$fecha=date("Y-m-d h:i:s");
				$id_persona= $id->fetch_object()->id_persona;
				$sql = $conexion->query(" insert into asistencia (id_persona, entrada)values($id_persona,'$fecha')");
				if ($sql == true) {
					?>
		<script>
			$(function notificacion(){
				new PNotify({
					title: "CORRECTO",
					type: "success",
					text: "Hola, Bienvenido",
					styling: "bootstrap3"
				})
			})
		</script>
		<?php 
				} else {
					?>
				<script>
				$(function notificacion(){
				new PNotify({
				title: "ERROR",
				type: "error",
				text: "Error al registrar entrada",
				styling: "bootstrap3"
				})
				})
				</script>
				<?php
				}
				
			} else {
				?>
				<script>
			$(function notificacion(){
				new PNotify({
					title: "INCORRECTO",
					type: "error",
					text: "La cédula ingresada no existe",
					styling: "bootstrap3"
				})
			})
				</script>
				<?php
			}
			
	} else {
		?>
	<script>
	$(function notificacion(){
	new PNotify({
	title: "INCORRECTO",
	type: "error",
	text: "Ingrese el numero de cédula",
	styling: "bootstrap3"
	})
	})
	</script>
	<?php
	}
	?>
	<script>
		setTimeout(() =>{
			window.history.replaceState(null, null, window.location.pathname);
		}, 0);
	</script>

<?php
}


?>
<!-- SALIDAAA -->
<?php 
if (!empty($_POST["btnsalida"])){
	if (!empty($_POST["txtci"])){
			$ci=$_POST["txtci"];

			$consulta = $conexion->query(" select count(*) as 'total' from persona where ci='$ci' ");
			$id = $conexion->query(" select id_persona from persona where ci='$ci'");
			if ($consulta->fetch_object()->total > 0) {
				$fecha=date("Y-m-d h:i:s");
				$id_persona = $id->fetch_object()->id_persona;
				$busqueda = $conexion->query(" select id_asistencia from asistencia where id_persona=$id_persona order by id_asistencia desc limit 2");
				$id_asistencia = $busqueda->fetch_object()->id_asistencia;
				$sql = $conexion->query(" update asistencia set salida='$fecha' where id_asistencia=$id_asistencia");
				if ($sql == true) {
					?>
		<script>
			$(function notificacion(){
				new PNotify({
					title: "CORRECTO",
					type: "success",
					text: "Adios, vuelve pronto",
					styling: "bootstrap3"
				})
			})
		</script>
		<?php 
				} else {
					?>
				<script>
				$(function notificacion(){
				new PNotify({
				title: "ERROR",
				type: "error",
				text: "Error al registrar salida",
				styling: "bootstrap3"
				})
				})
				</script>
				<?php
				}
				
			} else {
				?>
				<script>
			$(function notificacion(){
				new PNotify({
					title: "INCORRECTO",
					type: "error",
					text: "La cédula ingresada no existe",
					styling: "bootstrap3"
				})
			})
				</script>
				<?php
			}
			
	} else {
		?>
	<script>
	$(function notificacion(){
	new PNotify({
	title: "INCORRECTO",
	type: "error",
	text: "Ingrese el numero de cédula",
	styling: "bootstrap3"
	})
	})
	</script>
	<?php
	}
	?>
	<script>
		setTimeout(() =>{
			window.history.replaceState(null, null, window.location.pathname);
		}, 0);
	</script>

<?php
}


?>