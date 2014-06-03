<!DOCTYPE HTML>
<html>
	<?php
			include ("head.php");
	?>
	<body>
	<?php
	include ("control/EstucheControl.php");
	$idModelo= $_GET['modelo'];
	$estucheControl = new EstucheControl();
	$listarModelos=$estucheControl->getEstucheByModelo($idModelo);
	?>
		<!---start-wrap---->
		<!---start-header---->
		<?php
			include ("header.php");
		?>
		<!---//End-header---->
		<!--- start-content---->
		<div class="content">
			<div class="wrap">
				<?php
					include ("publicidad.php");
				?>
				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
							<?php
								$rowCount = 1;
								while ($row = mysql_fetch_array($listarModelos))
								{
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
									echo "<img src='utils/imagen_mostrar.php?id=".$row[idfotografia]."'>";
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

