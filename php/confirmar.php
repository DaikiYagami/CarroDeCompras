<?php include "config.php" ?>
<?php
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador'] = 0;}
?>
<link rel="stylesheet" href="../css/estilo_confirmar.css">