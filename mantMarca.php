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
					 		include ("control/FotografiaControl.php");
					 		include ("classes/Marca.php");
							if(array_key_exists('nombre',$_POST))
							{
								$marcaControl = new MarcaControl();
								$marca = new Marca();
								$nombre=$_POST['nombre'];
								$descripcion=$_POST['descripcion'];
								$marca->setNombre($nombre);
								$marca->setDescripcion($descripcion);
								$id = $marcaControl->agregarMarca($marca);
								$mensaje = "<div id='msj' class='alert alert-success' style='display:block'>La marca fue agregada.</div>";
								if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
								{
									$fotografiaControl = new FotografiaControl();
									$isInserted = $fotografiaControl->subirFotografia($_FILES["userfile"],$id, "idMarca");
									if(!$isInserted)
									{
										$mensaje = "<div id='msj' class='alert alert-success' style='display:block'>Ocurrió un error guardando la fotografia.</div>";
									}
								}
								echo $mensaje;
							}
						?>
					 	<form method="post" id="formMarca" action="mantMarca.php" enctype="multipart/form-data">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" class="text" name="nombre" id="nombre" value="Nombre de la marca" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre de la marca';}">
								</div>
								<div class="contact-to">
			                     	<input name="userfile" type="file">
								</div>
								<div class="text2">
				                   <textarea value="Descripcion" name="descripcion" id="descripcion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Descripcion';}">Descripcion</textarea>
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