<?php include "php/cabecera.php" ?>
	<article id="contenedorcarrito">
		<div id="contienecarrito">
					<div id="carrito" style="background:rgb(200,200,200);color:black;">
					
					Carrito
					</div>
					<a href='php/destruir.php'><button>Vaciar carrito</button></a>
					<a href='confirmar.php'><button>Confirmar compra</button></a>
		</div>
		¿Ya eres usuario?<br>
		<form action="php/logcliente.php" method="POST">

			<input type="text" name="usuario" placeholder="Introduce tu nombre de usuario">
			<input type="text" name="contrasena" placeholder="Introduce tu contraseña">
			<input type="submit">

		</form>

		¿Eres nuevo usuario?<br>
		<form action="php/nuevoclienteweb.php" method="POST">
			<input type="text" name="usuario" placeholder="Usuario"><br>
			<input type="text" name="contrasena" placeholder="Contraseña"><br>
			<input type="text" name="nombre" placeholder="Nombre"><br>
			<input type="text" name="apellidos" placeholder="Apellidos"><br>
			<input type="text" name="email" placeholder="E-mail"><br>
			<input type="submit">
		</form>
	</article>

<?php include "php/piedepagina.php" ?>