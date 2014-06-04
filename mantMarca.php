<!DOCTYPE HTML>
<html>
	<?php
			include ("head.php");
	?>
	<body>
		<!---start-wrap---->
		<!---start-header---->
		<?php
			include ("header.php");
		?>
		<!---//End-header---->
		<!--- start-content---->
		<div class="content contact-main">
			<!----start-contact---->
			<div class="contact-info">
					 <div class="wrap">
					 	<?php
					 		include ("control/MarcaControl.php");
					 		include ("classes/Marca.php");
							if(array_key_exists('nombre',$_POST))
							{
								$marcaControl = new MarcaControl();
								$marca = new Marca();
								$nombre=$_POST['nombre'];
								$descripcion=$_POST['mensaje'];
								$marca->setNombre($nombre);
								$marca->setDescripcion($descripcion);
								$marcaControl->agregarMarca($marca);
								//echo "<div id='msj' class='alert alert-success' style='display:block'>La marca fue agregada.</div>";
							}
						?>
					 	<form method="post" action="mantMarca.php">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" class="text" name="nombre" id="nombre" value="Nombre de la marca" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre de la marca';}">
								</div>
								<div class="text2">
				                   <textarea value="Mensaje:" name="mensaje" id="mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje';}">Mensaje</textarea>
				                </div>
				               <span><input type="submit" class="" name="submit" value="Guardar nueva Marca"></span>
				                <div class="clear"></div>
				               </div>
			           </form>
		           </div>
			</div>
			<!----//End-contact---->
		</div>
		<!---- start-bottom-grids---->
		<?php
			include ("enlaces.php");
		?>
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
		<?php
			include ("footer.php");
		?>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>