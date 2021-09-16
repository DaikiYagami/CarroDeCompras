<?php include "config.php" ?>
<?php

include "confirmar.php";

$contador = 0;
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM clientes WHERE usuario = '".$_REQUEST['usuario']."' AND contrasena = '".$_REQUEST['contrasena']."'";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
	$contador++;
	$_SESSION['usuario'] = $fila['id'];
} 
if($contador > 0){
	
	$peticion = "INSERT INTO pedidos VALUES (NULL,".$_SESSION['usuario'].",'".date('U')."','0')";
	$resultado = mysqli_query($conexion, $peticion);

	$peticion = "SELECT * FROM pedidos WHERE idcliente = '".$_SESSION['usuario']."' ORDER BY fecha DESC LIMIT 1";
	$resultado = mysqli_query($conexion, $peticion);
	while($fila = mysqli_fetch_array($resultado)) {
	$_SESSION['idpedido'] = $fila['id'];
	} 
	echo $_SESSION['idpedido'];

	for($i = 0;$i< $_SESSION['contador'];$i++){
		
		$peticion = "INSERT INTO lineaspedido VALUES (NULL,'".$_SESSION['idpedido']."','".$_SESSION['producto'][$i]."','".$_SESSION['cantidad'][$i]."')";
		$resultado = mysqli_query($conexion, $peticion);

		$peticion = "SELECT * FROM productos WHERE id='".$_SESSION['producto'][$i]."'";
		$resultado = mysqli_query($conexion, $peticion);
		while($fila = mysqli_fetch_array($resultado)) {
			$existencias = $fila['existencias'];
			$peticiondos = "UPDATE productos SET existencias = '".($existencias-1)."' WHERE id='".$_SESSION['producto'][$i]."'";
			$resultadodos = mysqli_query($conexion, $peticiondos);
			}


	}

	

	echo "<div id='contenedor'></div>";
	echo "<h1 id='yay'>¡Enhorabuena!</h1>";
	echo "<br><br><h2>Tu pedido se ha realizado satisfactoriamente.<br> Redirigiendo a la página principal en 5 segundos...</h2>";
	echo "<img src='../img/compra.png' width=400px id='bien'>";
	echo "<br>";
	echo "<br>";
	session_destroy();
	echo '<meta http-equiv="refresh" content="5; url=../index.php">';
	 
	
	
	
}else{
	echo "<div id='contenedor'></div>";
	echo "<h1 id='reg'>Debe registrarse</h1>";
	echo "<br><br><h2>El usuario no existe.<br> Redirigiendo a la página principal en 5 segundos...</h2>";
	echo "<img src='../img/f.png' width=300px id='mal'>";
	echo "<br>";
	echo "<br>";
	echo '<meta http-equiv="refresh" content="5; url=../confirmar.php">';
}

mysqli_close($conexion);
include "piedepagina.php"; 
?>
