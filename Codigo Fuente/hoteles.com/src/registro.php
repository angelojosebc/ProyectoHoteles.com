
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Hoteles.com</title>
<link href="css/styless2.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui.css" rel="stylesheet">
</head>
<body>
<?php 
	include 'cabecera.php';
?>
<div id="container">
	<div style="padding: 30px 30px">
	<table style="color:gray;" border="0">
	<tr>
	<td colspan="3"><h2>Registro de Usuarios</h2></td>

	</tr>
	<form method="POST" action="includes/config.php">
	<tr>
	<td>Nombre Completo: </td>
	<td><input type="text" id="t_nom" /></td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td>Apellido Paterno: </td>
	<td><input type="text" id="t_apep" /></td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td>Apellido Materno: </td>
	<td><input type="text" id="t_apem" /></td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td>Género: </td>
	<td><input type="radio" id="radio1" name="radio" checked="checked" value="masculino"><label for="radio1">Masculino</label>
		<input type="radio" id="radio2" name="radio" value="femenino"><label for="radio2">Femenino</label>
	</td>
	<td></td>
	</tr>
	<tr>
	<td>Fecha de Nacimiento :</td>
	<td> Dia: <select id="s_dd">
				<?php for($i=1;$i<=30;$i++){ ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			  </select>
	 Mes: <select id="s_mm">
			<?php for($i=1;$i<=12;$i++){ ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php } ?>
		</select>
		A&ntilde;o : <select id="s_aa">
			<?php for($i=2014;$i>=1980;$i--){ ?>
				<option value="<?php echo $i; ?>" > <?php echo $i; ?></option>
			<?php } ?>
		</select>


	</td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td>Documento de Identidad: </td>
	<td><select id="s_tdoc">
			
				<option value="1" selected="selected">DNI</option>
				<option value="2" >Carné de Extranjería</option>
			
		</select>
		<input type="text" id="doc" />
		</td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td>E mail: </td>
	<td><input type="text" id="mail" /></td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td>Contrase&ntilde;a: </td>
	<td><input type="password" id="pass" /></td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td>repita su contrase&ntilde;a: </td>
	<td><input type="password" id="pass2" /></td>
	<td><span style="color:red;">*</span></td>
	</tr>
	<tr>
	<td><button type="submit">Enviar</button></td>
	<td></td>
	<td></td>
	</tr>
	</form>
	</table>
	</div>

</div>

<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//$("#container").load('index.php');
	});
</script>

</body>
</html>
