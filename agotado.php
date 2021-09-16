<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Agotado</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_movil.css?v=<?php echo time(); ?>" media="screen and (max-width: 480px) and (min-width: 1px)">
	<link rel="stylesheet" type="text/css" href="css/estilo_tablet.css?v=<?php echo time(); ?>"  media="screen and (max-width: 700px) and (min-width: 481px)">
	<link rel="stylesheet" type="text/css" href="css/estilo_escritorio.css?v=<?php echo time(); ?>"  media="screen and (max-width: 1200px) and (min-width: 701px)">
	<link rel="stylesheet" type="text/css" href="css/estilo_pchd.css?v=<?php echo time(); ?>"  media="screen and (max-width: 3600px) and (min-width: 1201px)">
</head>
<body>
	<!-- Header con su estructura -->
	<div id="contenedor2">
		<header>
			<div id="logo"><img src="img/1.png" alt=""></div>
			<div id="slogan"><h1>Tienda de Ropa Online 24/7</h1></div>
		<nav>
			<ul>
				<li><a href="index.php" id="menu">Inicio</a></li>
				<li><a href="productos.php" id="menu">Productos</a></li>
				<li><a href="quienesSomos.php" id="menu">Quienes Somos</a></li>
			</ul>
		</nav>
		</header>
		<!-- En este caso el Section funciona como todo lo visible en la pagina, con un div que muestra una imagen (.PNG) y un mensaje con una etiqueta <h5> -->
		<section>
			<div id="triste"></div>
			<h5>¡ Lo sentimos! <br> El producto que esta buscando se encuentra agotado</h5>
		</section>
	</div>
	<div id="footer"><footer>Tienda Online Todos los derechos Reservados&copy;
		<br>Siempre Online</footer></div>
</body>
</html>