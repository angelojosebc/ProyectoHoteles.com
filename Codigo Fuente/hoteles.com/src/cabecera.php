<?php 
	$pag = basename($_SERVER['PHP_SELF']);
?>

<div id="header">
<div id="logo"><h1>Hoteles </h1><img src="images/img1.gif"></div>
<nav>
	<ul class="sf-menu">
		<li <?php if($pag=="index.php"){ ?> class="current" <?php } ?> ><a id="d_home" href="#">Inicio</a></li>
		<li <?php if($pag=="nosotros.php"){ ?> class="current" <?php } ?> ><a id="d_nosotros" href="nosotros.php">Nosotros</a></li>
		<li <?php if($pag=="reservas.php"){ ?> class="current" <?php } ?> >
			<a id="d_res" href="reservas.php" >Consultar</a>
			<ul>
				<li <?php if($pag=="habitacion.php"){ ?> class="current" <?php } ?> ><a href="#">Por tipo de habitación</a></li>
				<li <?php if($pag=="hotel.php"){ ?> class="current" <?php } ?> ><a href="#">Por Hotel</a></li>
			</ul>
		</li>
		<li <?php if($pag=="registro.php"){ ?> class="current" <?php } ?> ><a id="d_reg" href="registro.php">Registro</a></li>
		
	</ul>
</nav>
<!--<div id="menu"><tr><td>Inicio</td><td>Registro</td><td>Hoteles</td><td>Contactenos</td></tr></div>-->
</div>