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
				<!----start-bottom-header---->
				<div class="header-bottom">
					<div class="wrap">
					<!-- start header menu -->
							<ul class="megamenu skyblue">
							<?php
							 	$modeloControl = new ModeloControl();
								while ($row = mysql_fetch_array($listarControl))
								{
									echo "<li class='grid'><a class='color2' href='#'>$row[nombre]</a>";
										echo "<div class='megapanel'>";
											echo "<div class='row'>";
											$modeloByMarca=$modeloControl->getModeloByIdMarca($row[idMarca]);
											while ($rowModelo = mysql_fetch_array($modeloByMarca))
											{
												echo "<div class='col1'>";
													echo "<div class='h_nav'>";
														echo "<h4>$rowModelo[nombre]</h4>";
														echo "<ul>";
															echo "<li><a href='designer.html'>Estuches</a></li>";
														echo "</ul>";
													echo "</div>";
												echo "</div>";
											}
											echo "</div>";
										echo "</div>";
									echo "</li>";
								}
							?>
							</ul>
					</div>
				</div>
			</div>
				<!----//End-bottom-header---->
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
			    	<h3>IPHONE <label>Estuche</label></h3>
			    	<span>resistente al agua, polvo. No se :/</span>
			    	<a class="slide-btn" href="details.html"> Comprar ahora</a>
			    </div>
			  </li>
			  <li>
			    <a href="#slide2">
			      <img src="web/images/slide-5.jpg"  alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>IPHONE <label>Estuche</label></h3>
			    	<span>resistente al agua, polvo. No se :/</span>
			    	<a class="slide-btn" href="details.html"> Comprar ahora</a>
			    </div>
			  </li>
			  <li>
			    <a href="#slide3">
			      <img src="web/images/slide-3.jpg" alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>IPHONE <label>Estuche</label></h3>
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
								<h4>Seleccionar precio:</h4>
								<div class="price-selection-tree">
									<span class="col_checkbox">
										<input id="10" class="web/css-checkbox10" type="checkbox">
										<label class="normal"><i for="10" name="demo_lbl_10"  class="css-label10"> </i>&#162;  4000</label>
									</span>
									<span class="col_checkbox">
										<input id="11" class="web/css-checkbox11" type="checkbox">
										<label class="active1"><i for="11" name="demo_lbl_11"  class="css-label11"> </i>&#162; 6000</label>
									</span>
									<span class="col_checkbox">
										<input id="12" class="web/css-checkbox12" type="checkbox">
										<label class="normal"><i for="12" name="demo_lbl_12"  class="css-label12"> </i>&#162;  8000</label>
									</span>
									<span class="col_checkbox">
										<input id="13" class="web/css-checkbox13" type="checkbox">
										<label class="normal"><i for="13" name="demo_lbl_13"  class="css-label13"> </i>&#162; 10000</label>
									</span>
									<span class="col_checkbox">
										<input id="14" class="web/css-checkbox14" type="checkbox">
										<label class="normal"><i for="14" name="demo_lbl_14"  class="css-label14"> </i> &#162; 15000</label>
									</span>
									<span class="col_checkbox">
										<input id="15" class="web/css-checkbox15" type="checkbox">
										<label class="normal"><i for="15" name="demo_lbl_15"  class="css-label15"> </i>&#162; 20000</label>
									</span>
								</div>
								
						</div>
						</div>
						<div class="content-left-bottom-grid">
							<h4>Otro productos:</h4>
							<div class="content-left-bottom-grids">
								<div class="content-left-bottom-grid1">
									<img src="web/images/foot-ball.jpg" title="football" />
									<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
									<span> Fútbol</span>
									<label>&#162; 5000</label>
								</div>
								<div class="content-left-bottom-grid1">
									<img src="web/images/jarse.jpg" title="jarse" />
									<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
									<span> Fútbol</span>
									<label>&#162; 37500</label>
								</div>
							</div>
						</div>
				</div>
				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<script src="web/js/jstarbox.js"></script>
							<link rel="stylesheet" href="web/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
							<script type="text/javascript">
								jQuery(function() {
									jQuery('.starbox').each(function() {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function(event, value) {
											if(starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' '+val);
												return val;
											} 
										})
									});
								});
							</script>
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
						<div onclick="location.href='details.html';" class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="web/images/samsung-1.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Samsung</small> NEXUS <small>7</small> FG</a>
								<span>Algo más descriptivo tal vez</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Detalles</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#162; 20000</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="web/images/samsung-1.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Samsung</small> Galaxy <small>S3</small> Mini</a>
								<span>Algo más descriptivo tal vez</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Detalles</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#162; 7500</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="web/images/samsung-2.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Samsung</small> Galaxy <small>S3</small> Mini</a>
								<span>Algo más descriptivo tal vez</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Detalles</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#162; 3500</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="web/images/samsung-1.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Samsung</small> Galaxy <small>S3</small> Mini</a>
								<span>Algo más descriptivo tal vez</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Detalles</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#162; 3700</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="web/images/samsung-2.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Samsung</small> Galaxy <small>S3</small> Mini</a>
								<span>Algo más descriptivo tal vez</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Detalles</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#162; 11355</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="web/images/samsung-1.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Samsung</small> Galaxy <small>S3</small> Mini</a>
								<span>Algo más descriptivo tal vez</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Detalles</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#162; 20390</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
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

