<?php

include 'cabecera.php';	
include '../includes/config.php';
include 'menu.php';

if (isset($_GET['accion']) && $_GET['accion'] == "eliminar") {
	$id = $_GET['id'];
	$sql = sprintf("DELETE FROM habitacion WHERE id = '$id'");
	$del = mysql_query($sql);
	if (!$del) die('Invalid query: ' . mysql_error());
	echo "El artículo ha sido eliminado correctamente.";
}

$sql = sprintf("SELECT id, hab_num FROM habitacion ORDER BY id DESC");
$res = mysql_query($sql);
if (!$res) die('Invalid query: ' . mysql_error());


?>
<html>
<head>
<style>
	#articulos {
	width:1000px;
	}

	#articulos th {
		text-align: left;
		padding: 15px;
	}

	#articulos tr {
		background: #ddd;
	}
	 #articulos a {
		 color: #454545;
	 }
	 
	 #articulos td {
		 text-align: center;
	 }
	 
	#articulos td.titulo {
		width: 850px;
		padding:5px 5px 5px 30px;
		text-align:left;
	}
</style>
</head>
<body>
<br>
<br>	
<a href="habitacion.php">registrar nueva habitación</a>
<br>
	<table id="articulos">
		<thead>
			<tr>
			<th scope="col">Hotel</th>
			<th scope="col">Modificar</th>
			<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>				
			<?php while ($post = mysql_fetch_array($res)) { ?>
			<tr>
				<td class="titulo"><a href="habitacion.php?id=<?php echo $post['id'] ?>"><?php echo $post['hab_num'] ?></a></td>
				<td><a href="habitaciones.php?id=<?php echo $post['id'] ?>"><img src="../images/edit.png" width="50" height="50"></a></td>
				<td><a href="habitacion.php?accion=eliminar&id=<?php echo $post['id'] ?>"><img src="../images/quitar.png" width="50" height="50"></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>