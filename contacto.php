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
					 	<form method="post" action="contact.php">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" class="text" name="nombre" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
								 	<input type="text" class="text" name="correo" autocomplete="off" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo';}">
								 	<input type="text" class="text" name="tema" value="Tema" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tema';}">
								</div>
								<div class="text2">
				                   <textarea value="Mensaje:" name="mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje';}">Mensaje</textarea>
				                </div>
				               <span><input type="submit" class="" name="submit" value="Enviar correo"></span>
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