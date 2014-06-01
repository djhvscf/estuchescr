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
		<!--- start-content---->
		<div class="content contact-main">
			<!----start-contact---->
			<div class="contact-info">
					<div class="map">
					 	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
					 </div>
					 <div class="wrap">
					 <div class="contact-grids">
							 <div class="col_1_of_bottom span_1_of_first1">
								    <h5>Dirección:</h5>
								    <ul class="list3">
										<li>
											<img src="web/images/home.png" alt="">
											<div class="extra-wrap">
											 <p>Lorem ipsum  consectetu,<br>dolor sit amet,.</p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="col_1_of_bottom span_1_of_first1">
								    <h5>Teléfonos</h5>
									<ul class="list3">
										<li>
											   <img src="web/images/phone.png" alt="">
											<div class="extra-wrap">
												<p><span>Celular:</span>(+506) 8888-88-88</p>
											</div>
												<img src="web/images/fax.png" alt="">
											<div class="extra-wrap">
												<p><span>FAX:</span>(+506) 2222-22-22</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="col_1_of_bottom span_1_of_first1">
									 <h5>Correo</h5>
								    <ul class="list3">
										<li>
											<img src="web/images/email.png" alt="">
											<div class="extra-wrap">
											  <p><span class="mail"><a href="mailto:yoursite.com">Estuches Costa Rica</a></span></p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="clear"></div>
					 </div>
					 	<form method="post" action="contact-post.html">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" class="text" value="Nombre..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre...';}">
								 	<input type="text" class="text" value="Correo..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo...';}">
								 	<input type="text" class="text" value="Tema" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tema...';}">
								</div>
								<div class="text2">
				                   <textarea value="Mensaje:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje';}">Mensaje..</textarea>
				                </div>
				               <span><input type="submit" class="" value="Submit"></span>
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