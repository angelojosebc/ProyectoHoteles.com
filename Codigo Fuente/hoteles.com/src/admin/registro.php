<?php if($_POST) {
	
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
	$email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    if ($nombre == "" or $usuario == "" or $email == "" or $contrasena == "") { 
        $mensaje = sprintf("Hay alg&uacute;n campo vac&iacute;o");
    }
    else {
        include '../includes/config.php';
        $sql = sprintf("INSERT INTO administrador VALUES (NULL,'$nombre','$usuario', '$email', md5('$contrasena'))");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
        $mensaje = sprintf("Usuario registrado correctamente");
		$nombre ='';
		$usuario ='';
		$email='';
		
    }
} ?>






<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
  
</head>
<body>
<div id="registro">
    <?php 
	if($_POST){
	
	if ($mensaje) { ?>
        <div class="error">
            <?php echo $mensaje ?>
        </div>
    <?php } ?>
    <form method="post" action="registro.php">
		<table>
			<tr>
				<td><label>Nombre: </label></td><td><input type="text" name="nombre" value="<?php echo $nombre ?>"></td>
			</tr><tr>	
				<td><label>Usuario:</label></td><td><input type="text" name="usuario" value="<?php echo $usuario ?>"></td>
			</tr><tr>	
				<td><label>Contrase&ntilde;a </label></td><td><input type="password" name="contrasena"></td>
			</tr><tr>	
				<td><label>Email: </label></td><td><input type="text" name="email" value="<?php echo $email ?>"></td>
			</tr>
			<tr>
				<td>
					<div class="submit">
						<input type="submit" value="Registrar">
					</div>
				</td>
			</tr>
		</table>
    </form>
	<?php  }else{ ?>
		<form method="post" action="registro.php">
		<table>
			<tr>
				<td><label>Nombre: </label></td><td><input type="text" name="nombre" value=""></td>
			</tr><tr>	
				<td><label>Usuario:</label></td><td><input type="text" name="usuario" value=""></td>
			</tr><tr>	
				<td><label>Contrase&ntilde;a </label></td><td><input type="password" name="contrasena"></td>
			</tr><tr>	
				<td><label>Email: </label></td><td><input type="text" name="email" value=""></td>
			</tr>
			<tr>
				<td>
					<div class="submit">
						<input type="submit" value="Registrar">
					</div>
				</td>
			</tr>
		</table>
    </form>
	<?php } ?>
</div>
  
</body>
</html>