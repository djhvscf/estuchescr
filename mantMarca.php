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
								$isValidForm = false;
								if (!empty($_POST["nombre"]) && $_POST["nombre"] != '' && $_POST["nombre"] != 'Nombre de la marca') 
								{
									if (!empty($_POST["descripcion"]) && $_POST["descripcion"] != '' && $_POST["descripcion"] != 'Descripcion') 
									{
										if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
										{
											$isValidForm = true;
										}
									} 
								}
								
								if($isValidForm)
								{
									$marcaControl = new MarcaControl();
									$marca = new Marca();
									$nombre=$_POST['nombre'];
									$descripcion=$_POST['descripcion'];
									$marca->setNombre($nombre);
									$marca->setDescripcion($descripcion);
									$id = $marcaControl->agregarMarca($marca);
									$mensaje = "<div id='msj' class='alert alert-success' style='display:block'>La marca fue agregada.</div>";
									$fotografiaControl = new FotografiaControl();
									$isInserted = $fotografiaControl->subirFotografia($_FILES["userfile"],$id, "idMarca");
									if(!$isInserted)
									{
										$mensaje = "<div id='msj' class='alert alert-error' style='display:block'>Ocurrió un error guardando la fotografia.</div>";
									}
								}else {
									$mensaje = "<div id='msj' class='alert alert-error' style='display:block'>Todos los campos son requeridos</div>";
								}
								echo $mensaje;
							}
						?>
					 	<form method="post" id="formMarca" action="mantMarca.php" enctype="multipart/form-data">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" class="text" name="nombre" id="nombre" value="Nombre de la marca" onfocus="if (this.value == 'Nombre de la marca'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Nombre de la marca';}">
								</div>
								<div class="text2">
				                   <textarea value="Descripcion" name="descripcion" id="descripcion" onfocus="if (this.value == 'Descripcion'){this.value = '';}" onblur="if (this.value == '') {this.value = 'Descripcion';}">Descripcion</textarea>
				                </div>
				                <div class="text2">
			                     	<span class="btn btn-success fileinput-button">
					                    <span>Agregar foto</span>
				                     	<input name="userfile" type="file" onchange="readURL(this);"> 
					                </span>
								</div>
								<div class="text2" style="margin-left: 13%; margin-top: -4%;">
			                     	<img id="photo" src="web/images/imageDefault.png" alt="your image" />
								</div>
				               <span>
				               		<input type="submit" class="" name="submit" value="Guardar nueva Marca" style="margin-top: 4%;">
			               		</span>
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