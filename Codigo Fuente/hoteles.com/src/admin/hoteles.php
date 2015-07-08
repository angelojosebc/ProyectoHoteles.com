<?php 
include 'cabecera.php';
include '../includes/config.php';
include 'menu.php';

    if($_GET['a'] == "c") {
        $nombre = $_POST['nombre'];
		$estrellas = $_POST['estrellas'];
		$pais = $_POST['pais'];
		$direccion = $_POST['direccion'];
		$detalle = $_POST['detalle'];
        $sql = sprintf("INSERT INTO hotel VALUES (NULL, '$nombre','$estrellas', '$pais', '$direccion', '$detalle')");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
    } else if($_GET['a'] == "m") {
        $nombre = $_POST['nombre'];
		$estrellas = $_POST['estrellas'];
		$pais = $_POST['pais'];
		$direccion = $_POST['direccion'];
		$detalle = $_POST['detalle'];
        $id = $_GET['id'];
        $sql = sprintf("UPDATE hotel SET ho_nom = '$nombre', estrellas='$estrellas', ho_pais='$pais', ho_direccion='$direccion', ho_detalle='$detalle' WHERE hotel_id = '$id'");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
    }
 
    if (isset($_GET['accion']) && $_GET['accion'] == "eliminar") {
        $id = $_GET['id'];
        $sql = sprintf("DELETE FROM hotel WHERE hotel_id = '$id'");
        $del = mysql_query($sql);
        if (!$del) die('Invalid query: ' . mysql_error());
        echo "El hotel ha sido eliminado correctamente.";
    }
     
    $sql = sprintf("SELECT hotel_id, ho_nom, ho_pais, ho_direccion, ho_detalle FROM hotel ORDER BY hotel_id DESC");
    $res = mysql_query($sql);
    if (!$res) die('Invalid query: ' . mysql_error());
 
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <link rel="stylesheet" href="css/wysiwyg.css" type="text/css" charset="utf-8">
    <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/wysiwyg.js" type="text/javascript" charset="utf-8"></script>
	<style type="text/css" media="screen">
.area {
        width: 100%;
        height: 100px;

        margin: 0 0 15px 0;
        padding: 3px;
        border: 1px solid rgba(0, 0, 0, 0.20);

        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.12);
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12);

        overflow-x: auto;
      }

      .area:focus {
        outline: none;
        border-color: rgba(51, 153, 204, 0.5);
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.20), 0 1px 5px 0 rgba(51, 153, 204, 0.4);
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.20), 0 1px 5px 0 rgba(51, 153, 204, 0.4);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.20), 0 1px 5px 0 rgba(51, 153, 204, 0.4);
      }
	  
	  .escritura input {
			background:none;
			line-height:40px;
			width:100%;
			font-size: 30px;
			margin-bottom: 30px;
	  }
		 
	  .escritura .actualizar, .escritura .publicar {
			background: #444444;
			padding:10px;
			cursor:pointer;
			color: #fff;
			text-align:center;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
	  }
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
<div id="izquierda">
<h2>Hotel</h2> <a href="?accion=crear">registrar nuevo hotel</a>
<table id="articulos">
            <thead>
                <tr>
                    <th scope="col">Categor&iacute;a</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($hoteles = mysql_fetch_array($res)) { ?>
                <tr>
                    <td class="titulo"><a href="hoteles.php?id=<?php echo $hoteles['hotel_id'] ?>&hot=<?php echo $hoteles['ho_nom'] ?>"><?php echo $hoteles['ho_nom'] ?></a></td>
                    <td><a href="hoteles.php?id=<?php echo $hoteles['hotel_id'] ?>&hot=<?php echo $hoteles['ho_nom'] ?>"><img src="../images/edit.png" width="50" height="50" ></a></td>
                    <td><a href="hoteles.php?accion=eliminar&id=<?php echo $hoteles['hotel_id'] ?>"><img src="../images/quitar.png" width="50" height="50" ></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>
<div id="derecha">
<?php if($_GET['accion'] == "crear") { ?>
	<div class="escritura">
		<h2>Registrar Hotel</h2>
		<form method="post" action="hoteles.php?a=c">
		<table border="0">
		<tr>	
			<td><label for="hotel">Nombre hotel: </label></td><td><input type="text" name="nombre"></td>
		</tr><tr>
			<td><label for="hotel">estrellas (calidad): </label></td><td><input type="text" name="estrellas"></td>
		</tr><tr>
		<td><label for="hotel">pais: </label></td><td><input type="text" name="pais"></td>
		</tr><tr>
		<td><label for="hotel">direccion: </label></td><td><input type="text" name="direccion"></td>
		</tr><tr>
		<td><label for="hotel">detalle: </label></td><td><div class="area" contenteditable></div></td>
		</tr><tr>
			<td colspan="2"><input id="reg_hot" type="button" value="Crear"><td>
		</tr>
		</table>
		</form>
	</div>
<?php } else if ($_GET['id']) {?>
    <h2>Modificar hotel</h2>
    <form method="post" action="hoteles.php?a=m&id=<?php echo $_GET['hotel_id']; ?>">
        <table border="0">
		<tr>	
			<td><label for="hotel">Nombre hotel: </label></td>
			<td><input type="hidden" name="id" value="<?php echo $_GET['hotel_id']; ?>"><input type="text" name="nombre" value="<?php echo $_POST['ho_nom'] ?>"></td>
		</tr><tr>
			<td><label for="hotel">estrellas (calidad): </label></td><td><input type="text" name="estrellas" value="<?php echo $_POST['estrellas'] ?>"></td>
		</tr><tr>
		<td><label for="hotel">pais: </label></td><td><input type="text" name="pais" value="<?php echo $_POST['pais'] ?>"></td>
		</tr><tr>
		<td><label for="hotel">direccion: </label></td><td><input type="text" name="direccion" value="<?php echo $_POST['direccion'] ?>"></td>
		</tr><tr>
		<td><label for="hotel">detalle: </label></td><td><div class="area" contenteditable><?php echo $_POST['detalle'];?></div></td>
		</tr><tr>
			<td colspan="2"><input id="mod_hot" type="submit" value="Modificar"><td>
		</tr>
		</table>
		
		
		
		
        
        
    </form>
<?php } ?>
</div>
<script type="text/javascript" charset="utf-8">
		  jQuery(function(){
			var textarea = $('.area');
			var wysiwyg  = new Wysiwyg;

			textarea.before(wysiwyg.el);
		  });
		$(function() {
		$("#reg_hot").click(function() {
				var $button = $('form');   
				var detalle = $button.parent().find(".area").html();
				detalle.replace(/<div>/gi,'<br>').replace(/<\/div>/gi,'');
				var nombre = $button.parent().find("input[name=nombre]").val();
				var estrellas = $button.parent().find("input[name=estrellas]").val();
				var pais = $button.parent().find("input[name=pais]").val();
				var direccion = $button.parent().find("input[name=direccion]").val();
				
				$.ajax({    type: "POST",
					url:"hoteles.php?a=c",
					data: "nombre="+nombre+"&detalle="+detalle+"&estrellas="+estrellas+"&pais="+pais+"&direccion="+direccion,
					success: function(data){
					window.location = "hoteles.php?id="+parseInt(data);
					 
				}});
			});
		});
		$(function() {
			$(".actualizar").click(function() {
				
				
				
				var $button = $('form');   
				var detalle = $button.parent().find(".area").html();
				detalle.replace(/<div>/gi,'<br>').replace(/<\/div>/gi,'');
				detalle=detalle.replace(/<div>/g,"<br>").replace(/<\/div>/g," ");
				var nombre = $button.parent().find("input[name=nombre]").val();
				var estrellas = $button.parent().find("input[name=estrellas]").val();
				var pais = $button.parent().find("input[name=pais]").val();
				var direccion = $button.parent().find("input[name=direccion]").val();
				var id=$button.parent().find("input[name=id]").val();;
				$.ajax({    type: "POST",
					url:"hoteles.php?a=m&id="+id,
					data: "titulo="+titulo+"&contenido="+contenido+"&autor="+autor+"&post="+post+"&categoria="+categoria,
					success: function(data){
				}});
			});
		});
		
</script>