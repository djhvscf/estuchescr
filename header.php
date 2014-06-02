
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
		<div class="mid-grid-right">
		<form>
<input type="text" placeholder="¿Cuál es tu modelo de teléfono?" style="visibility:hidden;" />
		</form>
		</div>
		<div class="mid-grid-left">
		<a class="logo" href="inicio.php">
		<img src="web/images/logo.png" alt="Estuches Costa Rica" style="max-width: 50%; min-height: 20%; max-height: 34%; min-width: 50%; margin-left: -44%;"/>
		</a>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----//End-mid-head---->
</div>