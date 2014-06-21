<!DOCTYPE HTML>
<html>
	<?php
			include ("head.php");
	?>
	<body>
	<?php
	include ("control/ModeloControl.php");
	include ("control/MarcaControl.php");
	$idMarca= $_GET['marca'];
	$marcaControl = new MarcaControl();
	$modeloControl = new ModeloControl();
	$listarModelos=$modeloControl->getModeloByIdMarca($idMarca);
	$nombreMarca = $marcaControl->getNombreMarcaById($idMarca);
	?>
		<!---start-wrap---->
		<!---start-header---->
		<?php
			include ("header.php");
		?>
		<!---//End-header---->
		<!--- start-content---->
		<div style="box-shadow: 6px 0px 8px #888;font-size: 3.2em;position: fixed;width: 100%;z-index: 99; margin-top:-62px;">
			<?php
				echo "<div>";
				echo "<h1 style='margin-top: 13px;color: #4c4c4c;margin-left: 30px; background-color:#FFFFFF;'>$nombreMarca</h1>";				
				echo "</div>";
			?>
		</div>
		<div class="content" style="background-color: #f7f7f7;">
			<div class="wrap">
				<div>
					<div class="product-grids">
						<!--- start-rate---->
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
							<?php
								$rowCount = 1;
								while ($row = mysql_fetch_array($listarModelos))
								{
									$idestuche= $row[0];
									$queryString = "estuche=$idestuche";
									$urlVer = "estuches.php?" . $queryString;
									if($rowCount % 3 == 0)
									{
										echo "<div onclick='location.href='details.html';'  class='product-grid fade last-grid'>";
									}
									else
									{
										echo "<div onclick='location.href='details.html';'  class='product-grid fade'>";
									}
										echo "<div class='product-grid-head'>";
										echo "<ul class='grid-social'>";
											echo "<li><a class='facebook' href='#'><span> </span></a></li>";
											echo "<li><a class='twitter' href='#'><span> </span></a></li>";
											echo "<li><a class='googlep' href='#'><span> </span></a></li>";
											echo "<div class='clear'> </div>";
										echo "</ul>";
										echo "<div class='block'>";
										echo "</div>";
									echo "</div>";
									echo "<div class='product-pic'>";
									echo "<a href='#'>";
									echo "<img style='height: 225px;' src='utils/imagen_mostrar.php?id=".$row[idfotografia]."'>";
									echo "</a>";
									echo "<p>";
									echo "<a href='#'>$row[nombre]</a>";
									echo "<span>$row[descripcion]</span>";
									echo "</p>";
									echo "</div>";
									echo "<div class='product-info'>";
									echo "<div class='product-info-cust'>";
									echo "<a href='#'>Ver estuches</a>";
									echo "</div>";
									echo "<div class='clear'> </div>";
									echo "</div>";
									echo "<div class='more-product-info'>";
									echo "<span> </span>";
									echo "</div>";
									echo "</div>";
									$rowCount ++;
								}
							?>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
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