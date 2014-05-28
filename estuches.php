<!DOCTYPE HTML>
<html>
	<head>
		<title>Estuches Costa Rica</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
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
	include ("classes/MarcaControl.php");
	include ("classes/ModeloControl.php");
	$marcaControl = new MarcaControl();
	$listarControl=$marcaControl->getMarcas();
	
	/*include ("classes/ModeloControl.php");
	$modeloControl = new ModeloControl();
	$modeloByMarca=$modeloControl->getModeloByIdMarca(1);
	echo $modeloByMarca;*/
	?>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="top-header">
					<div class="wrap">
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<script type="text/javascript">
									$(function(){
									    var $cart = $('#cart');
									        $('#clickme').click(function(e) {
									         e.stopPropagation();
									       if ($cart.is(":hidden")) {
									           $cart.slideDown("slow");
									       } else {
									           $cart.slideUp("slow");
									       }
									    });
									    $(document.body).click(function () {
									       if ($cart.not(":hidden")) {
									           $cart.slideUp("slow");
									       } 
									    });
									    });
								</script>
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="#"><span id="clickme"> </span></a></li>
								<!---start-cart-bag---->
								<div id="cart">Tu carrito esta vacío <span>(0)</span></div>
								<!---start-cart-bag---->
								<li><a class="info" href="#"><span> </span></a></li>
							</ul>
						</div>
						<div class="top-header-center">
							<div class="top-header-center-alert-left">
								<h3>Entrega gratis</h3>
							</div>
							<div class="top-header-center-alert-right">
								<div class="vticker">
								  <ul>
									  <li>Aplica solo para compras en el GAM <label>No disponible para otros sectores</label></li>
								  </ul>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="top-header-right" style="margin-top:-32px;">
							<ul>
								<!----//<li><a href="login.html">Login!</a><span> </span></li>---->
								<!----//<<li><a href="register.html">Registráte!</a></li>---->
							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-left">
							<form>
								<input type="text" placeholder="¿Cuál es tu modelo de teléfono?" />
							</form>
						</div>
						<div class="mid-grid-right">
							<a class="logo" href="index.html"></a><!----//LOGO---->
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
			<!---//End-header---->
		<!----start-image-slider---->
		<div class="img-slider">
			<div class="wrap">
			<ul id="jquery-demo">
			  <li>
			    <a href="#slide1">
			      <img src="web/images/samsungtest1.jpg" alt="" />
			    </a>
			    <div class="slider-detils">
			    	<h3>IPHONE 0<label>Estuche</label></h3>
			    	<span>resistente al agua, polvo. No se :/</span>
			    	<a class="slide-btn" href="details.html"> Comprar ahora</a>
			    </div>
			  </li>
			  <li>
			    <a href="#slide2">
			      <img src="web/images/slide-5.jpg"  alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>IPHONE 1<label>Estuche</label></h3>
			    	<span>resistente al agua, polvo. No se :/</span>
			    	<a class="slide-btn" href="details.html"> Comprar ahora</a>
			    </div>
			  </li>
			  <li>
			    <a href="#slide3">
			      <img src="web/images/slide-3.jpg" alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>IPHONE 2<label>Estuche</label></h3>
			    	<span>resistente al agua, polvo. No se :/</span>
			    	<a class="slide-btn" href="details.html"> Comprar ahora</a>
			    </div>
			  </li>
			</ul>
			</div>
		</div>
		<div class="clear"> </div>
		<!----//End-image-slider---->
		<!--- start-content---->
		<div class="content">
			<div class="wrap">
				<div class="content-left">
						<div class="content-left-top-grid">
							<div class="content-left-price-selection">
								<h4>Espacio para publicidad</h4>
							</div>
						</div>
						<div class="content-left-bottom-grid">
							<h4>Espacio para publicidad</h4>
						</div>
				</div>
				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
							
							<?php
								$rowCount = 1;
								while ($row = mysql_fetch_array($listarControl))
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
								echo "<a href='#'><img src='web/images/samsung-1.jpg' title='product-name' /></a>";
									echo "<p>";
									echo "<a href='#'>$row[nombre]</a>";
									echo "<span>Algo más descriptivo tal vez</span>";
									echo "</p>";
									echo "</div>";
									echo "<div class='product-info'>";
									echo "<div class='product-info-cust'>";
									echo "<a href='details.html'>Ver estuches</a>";
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
		<div class="bottom-grids">
			<div class="bottom-top-grids">
				<div class="wrap">
					<div class="bottom-top-grid">
						<h4>Obtener ayuda</h4>
						<ul>
							<li><a href="#">Contactenos</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Entregas</a></li>
							<li><a href="#">Pedidos</a></li>
						</ul>
					</div>
					<div class="bottom-top-grid">
						<h4>Pedidos</h4>
						<ul>
							<li><a href="#">Opciones de pago</a></li>
							<li><a href="#">Entregas</a></li>
							<li><a href="#">Devoluciones</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-left">
					<ul>
						<li><a href="#"></a> <span> </span></li>
						<li><a href="#"></a> <span> </span></li>
						<li><a href="#"></a> <span> </span></li>
						<li><a href="#"></a> <span> </span></li>
						<li><a href="#"></a> <span> </span></li>
						<li><a href="#"></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>

