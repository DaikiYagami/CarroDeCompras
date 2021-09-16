<?php include "php/config.php" ?>
<?php include "php/cabecera.php" ?>
	<article id="contenedorcarrito">
		<div id="contienecarrito">
		<div id="carrito" style="background:rgb(200,200,200);color:black;">
		Carrito
		</div>
		<a href='php/destruir.php'><button>Vaciar carrito</button></a>
		<a href='confirmar.php'><button>Confirmar compra</button></a>
		</div>
		<?php

		$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
		mysqli_set_charset($conexion, "utf8");
		$peticion = "SELECT * FROM productos WHERE existencias > 0";
		$resultado = mysqli_query($conexion, $peticion);
		while($fila = mysqli_fetch_array($resultado)) {
			$peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto = ".$fila['id']." LIMIT 1";
			$resultado2 = mysqli_query($conexion, $peticion2);
			while($fila2 = mysqli_fetch_array($resultado2)) {
				echo "<img src='img/".$fila2['imagen']."' width=100px>";
			}
			
			echo "<a href='pop/masInformacion2.php' target='_blank' onclick=window.open(this.href,this.target,'width=400,height=150,top=200,left=200');return false;><h3>".$fila['nombre']."</h3></a>";
			echo "<p>".$fila['descripcion']."</p>";
			echo "<p>Precio: $ ".$fila['precio']."</p>";
			echo "<input type='number' value='1' max='5' min='1' id='num".$fila['id']."'>";
			echo "<br>";
			echo "<a href='pop/masInformacion2.php' target='_blank' onclick=window.open(this.href,this.target,'width=400,height=150,top=200,left=200');return false;><button>Más información</button></a>";
			echo "<button value='".$fila['id']."' class='botoncompra'>Comprar ahora</button>";
			echo "<br>";
			echo "<br>";
		} 
		mysqli_close($conexion);
		?>
	</article>
<?php include "php/piedepagina.php" ?>