<?php 
include 'cabecera.php';
include '../includes/config.php';
    if($_GET['a'] == "c") {
        $nombre = $_POST['categoria'];
        $sql = sprintf("INSERT INTO categorias VALUES (NULL, '$nombre')");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
    } else if($_GET['a'] == "m") {
        $nombre = $_POST['categoria'];
        $id = $_GET['id'];
        $sql = sprintf("UPDATE categorias SET categoria = '$nombre' WHERE id = '$id'");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
    }
 
    if (isset($_GET['accion']) && $_GET['accion'] == "eliminar") {
        $id = $_GET['id'];
        $sql = sprintf("DELETE FROM categorias WHERE id = '$id'");
        $del = mysql_query($sql);
        if (!$del) die('Invalid query: ' . mysql_error());
        echo "La categoría ha sido eliminado correctamente.";
    }
     
    $sql = sprintf("SELECT id, categoria FROM categorias ORDER BY id DESC");
    $res = mysql_query($sql);
    if (!$res) die('Invalid query: ' . mysql_error());
 
 ?>
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
<div id="izquierda">
<h2>Categor&iacute;as</h2> <a href="?accion=crear">Crear nueva categor&iacute;a</a>
<table id="articulos">
            <thead>
                <tr>
                    <th scope="col">Categor&iacute;a</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($categoria = mysql_fetch_array($res)) { ?>
                <tr>
                    <td class="titulo"><a href="categorias.php?id=<?php echo $categoria['id'] ?>&cat=<?php echo $categoria['categoria'] ?>"><?php echo $categoria['categoria'] ?></a></td>
                    <td><a href="categorias.php?id=<?php echo $categoria['id'] ?>&cat=<?php echo $categoria['categoria'] ?>"><img src="../images/edit.png" width="50" height="50" ></a></td>
                    <td><a href="categorias.php?accion=eliminar&id=<?php echo $categoria['id'] ?>"><img src="../images/quitar.png" width="50" height="50" ></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>
<div id="derecha">
<?php if($_GET['accion'] == "crear") { ?>
    <h2>Alta nueva categor&iacute;a</h2>
    <form method="post" action="categorias.php?a=c">
        <label for="categoria">Nombre categor&iacute;a</label>
        <input type="text" name="categoria">
        <input type="submit" value="Crear">
    </form>
<?php } else if ($_GET['id']) {?>
    <h2>Modificar categor&iacute;a</h2>
    <form method="post" action="categorias.php?a=m&id=<?php echo $_GET['id'] ?>">
	<table border="0">
	<tr>
		<td><label for="categoria">Nombre categor&iacute;a</label></td><td>
        <input type="text" name="categoria" value="<?php echo $_GET['cat'] ?>"></td>
	</tr><tr>	
        <input type="submit" value="Modificar">
	</tr>
	<table>
    </form>
<?php } ?>
</div>