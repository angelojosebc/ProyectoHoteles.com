<?php 
session_start();
if($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
     
    include '../includes/config.php';
    $sql = sprintf("SELECT id_admin FROM administrador WHERE usuario = '%s' and password =  '%s'",
        mysql_real_escape_string($usuario),
        mysql_real_escape_string(md5($password)));
    $res = mysql_query($sql);
    if (!$res) die('Invalid query: ' . mysql_error());
    list($count) = mysql_fetch_row($res);
    if (!$count) $mensaje = sprintf("Usuario o contrase&ntilde;a equivocados");
    else {
        $_SESSION['entrado'] = true;
        $_SESSION['id_admin'] = $count;
        header('Location:index.php');
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
		if($_POST) {	
	
	if ($mensaje) { ?>
        <div class="error">
            <?php echo $mensaje ?>
        </div>
    <?php } ?>
		<form method="post" action="entrada.php">
			<table>
				<tr>
				<td><label>Nombre de usuario: </label></td><td><input type="text" name="usuario" value="<?php echo $usuario ?>"></td>
				</tr><tr>
				<td><label>Contrase&ntilde;a </label></td><td><input type="password" name="password"></td>
				</tr><tr>
				<div class="submit">
					<td colspan="2"><input type="submit" value="Entrar"></td>
				</div>
				</tr>
			</table>
		</form>
	<?php
		}else{
	?>
		<form method="post" action="entrada.php">
		<table>
			<tr>
			<td><label>Nombre de usuario: </label></td><td><input type="text" name="usuario" value=""></td>
			</tr><tr>
			<td><label>Contrase&ntilde;a </label></td><td><input type="password" name="password"></td>
			</tr><tr>
			<div class="submit">
				<td colspan="2"><input type="submit" value="Entrar"></td>
			</div>
			</tr>
		</table>
    </form>



	<?php
			}
	?>
</div>
 
</body>
</html>