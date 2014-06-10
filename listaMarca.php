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
					 		$marcaControl = new MarcaControl();
							$listarControl=$marcaControl->getMarcas();
						?>
					 	<div class="theTable">
						  	<table id="sf" class="table">
							  	<thead>
									<tr>
										<th>Nombre</th>
										<th>Descripci&oacute;n</th>
										<th>Detalles </th>
									</tr>
								</thead>
								<tbody>
								<?php
									while ($row = mysql_fetch_array($listarControl))
									{
										echo "<tr>";
										$idMarca = $row[0];
										$queryString = "marca=$idMarca";
										$urlVer = "detalleMarca.php?" . $queryString;
										echo "<td>$row[1]</td>";
										echo "<td>$row[2]</td>";
										echo "<td><a href=$urlVer>Ver</a></td>";
										echo "</tr>";
									}
								?>
								</tbody>
						  	</table>
					 	 </div>
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