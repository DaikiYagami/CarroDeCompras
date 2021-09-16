<?php include "config.php" ?>
<?php
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador'] = 0;}
?>
		<link rel="stylesheet" type="text/css" href="css/estilo_movil.css?v=<?php echo time(); ?>" media="screen and (max-width: 480px) and (min-width: 1px)">
		<link rel="stylesheet" type="text/css" href="css/estilo_tablet.css?v=<?php echo time(); ?>"  media="screen and (max-width: 700px) and (min-width: 481px)">
		<link rel="stylesheet" type="text/css" href="css/estilo_escritorio.css?v=<?php echo time(); ?>"  media="screen and (max-width: 1200px) and (min-width: 701px)">
		<link rel="stylesheet" type="text/css" href="css/estilo_pchd.css?v=<?php echo time(); ?>"  media="screen and (max-width: 3600px) and (min-width: 1201px)">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/codigo.js"></script>
	
	<div id="contenedor">
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
			<section>
			
	
