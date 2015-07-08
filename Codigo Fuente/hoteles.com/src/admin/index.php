<?php

include 'cabecera.php';	
include '../includes/config.php';
include 'menu.php';

if (isset($_GET['accion']) && $_GET['accion'] == "eliminar") {
	$id = $_GET['id'];
	$sql = sprintf("DELETE FROM articulos WHERE id = '$id'");
	$del = mysql_query($sql);
	if (!$del) die('Invalid query: ' . mysql_error());
	echo "El artículo ha sido eliminado correctamente.";
}

$sql = sprintf("SELECT id, titulo FROM articulos ORDER BY id DESC");
$res = mysql_query($sql);
if (!$res) die('Invalid query: ' . mysql_error());


?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <link rel="stylesheet" href="css/wysiwyg.css" type="text/css" charset="utf-8">
    <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	
<script type="text/javascript" charset="utf-8">


</script>
</body>
</html>