<!DOCTYPE HTML>
<html>
	<head>
		<title>Estuches Costa Rica</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="shortcut icon" href="favicon.ico" />
		<link href="web/css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="web/css/jquery-ui.css">
		<!----webfonts---->
		<link href='web/css/webfont.css' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!-- start menu -->
		<link href="web/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="web/css/slippry.css">
		
		<script type="application/x-javascript"> 
			addEventListener("load", function(){ 
											setTimeout(hideURLbar, 0); 
									}, false); 
			function hideURLbar(){ 
				window.scrollTo(0,1); 
			};
		</script>
		<!----start-alert-scroller---->
		<script src="web/js/jquery.min.js"></script>
		<script type="text/javascript" src="web/js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
		});
		</script>
		<!----start-alert-scroller---->
		<script type="text/javascript" src="web/js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="web/js/menu_jquery.js"></script>
		<!-- //End menu -->
		<!---slider---->
		<script src="web/js/jquery-ui.js" type="text/javascript"></script>
		<script src="web/js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
		<script type="text/javascript" src="web/js/jquery-ui.min.js"></script>
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script>
		<!----//End-pricerage-seletion---->
		<!---move-top-top---->
		<script type="text/javascript" src="web/js/move-top.js"></script>
		<script type="text/javascript" src="web/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!---//move-top-top---->
	</head>
	<body>
	<?php
	include ("control/ModeloControl.php");
	$idMarca= $_GET['marca'];
	$modeloControl = new ModeloControl();
	$listarModelos=$modeloControl->getModeloByIdMarca($idMarca);
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