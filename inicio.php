<!DOCTYPE HTML>
<html>
	<?php
			include ("head.php");
	?>
	<body>
	<?php
	include ("control/MarcaControl.php");
	include ("control/AnuncioControl.php");
	//include ("control/ModeloControl.php");
	$marcaControl = new MarcaControl();
	$listarControl=$marcaControl->getMarcas();
	$anuncioControl = new AnuncioControl();
	$listarAnuncios = $anuncioControl->getAnuncios();
	?>
		<!---start-wrap---->
		<!---start-header---->
		<?php
			include ("header.php");
		?>
		<!---//End-header---->
		<!----start-image-slider---->
		<div class="img-slider" style="box-shadow: 6px 0px 8px #888;">
			<div class="wrap">
			<ul id="jquery-demo">
				<?php
					$rowCount = 1;
					while ($row = mysql_fetch_array($listarAnuncios))
					{
						echo "<li>";
						echo "<a href='#slide$rowCount'>";
						echo "<img src='utils/imagen_mostrar.php?id=".$row[idfotografia]."'>";
						echo "</a>";
						echo "<div class='slider-detils'>";
						echo "<h3>$row[titulo]<label>Estuche</label></h3>";
						echo "<span>$row[descripcion]</span>";
						echo "<a class='slide-btn'' href='details.html'> Comprar ahora</a>";
						echo "</div>";
						echo "</li>";
						$rowCount++;
					}
				?>
			</ul>
			</div>
		</div>
		<div class="clear"> </div>
		<!----//End-image-slider---->
		<!--- start-content---->
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
								while ($row = mysql_fetch_array($listarControl))
								{
									header("Content-type:image/jpeg");
									$idmarca= $row[0];
									$queryString = "marca=$idmarca";
									$urlVer = "modelos.php?" . $queryString;
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
									echo "<a class='vermodelo' href=$urlVer>";
									echo "<img style='height: 225px;' src='utils/imagen_mostrar.php?id=".$row[idfotografia]."'>";
									echo "</a>";
									echo "<p>";
									echo "<a class='vermodelo' href=$urlVer></a>";
									echo "<span>$row[descripcion]</span>";
									echo "</p>";
									echo "</div>";
									echo "<div class='product-info'>";
									echo "<div class='product-info-cust'>";
									echo "<a class='vermodelo' href=$urlVer>Ver modelos</a>";
									echo "</div>";
									echo "<div class='clear'> </div>";
									echo "</div>";
									echo "<div class='more-product-info'>";
									//echo "<span> </span>";
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
		
		<!---- pop up---->
		<?php
			include ("loadpopup.php");
		?>
		<!---- pop up---->
		
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

