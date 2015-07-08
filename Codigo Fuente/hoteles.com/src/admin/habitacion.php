<?php 
include 'cabecera.php';	
include 'menu.php';
$post = $_GET['id'];
include '../includes/config.php';
$hot = sprintf("SELECT * FROM hotel WHERE 1");
$c = mysql_query($hot);
if ($post > 0) {
    $sql = sprintf("SELECT id, hab_num, hotel_id, detalle, hab_capacidad, hab_piso, precio, estado FROM habitacion WHERE id = '$post'");
    $res = mysql_query($sql);
    if (!$res) die('Invalid query: ' . mysql_error());
    $res = mysql_fetch_array($res);
     
}
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
    </style>
  </head>
  <body>
		<h2>Registrar una habitación</h2>

			<form>
			
			<div class="escritura">
			<table>
				<tr>
					<td><label for="habnro">N&uacute;mero de habitación: </label></td>
					<td><input type="text" value="<?php if ($post > 0) echo $res['hab_num'] ?>" name="habnro">
					<input type="hidden" value="<?php echo $id ?>" name="autor">
					<input type="hidden" value="<?php echo $post ?>" name="post">
					</td>
					</tr><tr>
					<td><label for="capacidad">Capacidad (nro personas): </label></td>
					<td><input type="text" value="<?php if ($post > 0) echo $res['hab_capacidad'] ?>" name="capacidad"></td>
					</tr><tr>
					<td><label for="piso">Piso: </label></td>
					<td><input type="text" value="<?php if ($post > 0) echo $res['hab_piso'] ?>" name="piso"></td>
					</tr><tr>
					<td><label for="precio">Precio(por noche): </label></td>
					<td><input type="text" value="<?php if ($post > 0) echo $res['precio'] ?>" name="precio"></td>
					</tr><tr>
					<td><label for="precio">Detalle: </label></td>
					<td><div class="area" contenteditable><?php if ($post > 0) echo $res['detalle'] ?></div></td>
					</tr><tr>
					<td><label for="hotel">Hotel: </label></td>
					<td><select name="hotel">
						<?php while ($r = mysql_fetch_array($c)) { ?>
							<option <?php if($res['hotel_id'] == $r['hotel_id']) echo 'selected = "selected"' ?>name="hotel_id" value="<?php echo $r['hotel_id'] ?>"><?php echo $r['ho_nom']?></option>          
						<?php } ?>
					</select></td>
					</tr><tr>
					<td><label for="estado">habilitado: </label></td>
					<td><select name="estado">
						<option <?php if($res['estado'] == true) echo 'selected = "selected"' ?> value="<?php echo $res['estado'] ?>"><?php echo "disponible";?></option>          
						<option <?php if($res['estado'] == false) echo 'selected = "selected"' ?> value="<?php echo $res['estado'] ?>"><?php echo "ocupado";?></option>
					</select></td>
					</tr><tr>
					
					<td>
					<?php if ($post > 0) { ?>
					<div class="actualizar">Actualizar</div>
					<?php } else { ?>
					<div class="publicar">Publicar</div>
					<?php } ?>
					</td>
				</tr>
			</table>
				
			</div>
			</form>
		
		<script type="text/javascript" charset="utf-8">
		  jQuery(function(){
			var textarea = $('.area');
			var wysiwyg  = new Wysiwyg;

			textarea.before(wysiwyg.el);
		  });
		  
		$(function() {
		$(".publicar").click(function() {
				var $button = $('form');   
				var detalle = $button.parent().find(".area").html();
				detalle.replace(/<div>/gi,'<br>').replace(/<\/div>/gi,'');
				var habnro = $button.parent().find("input[name=habnro]").val();
				var capacidad = $button.parent().find("input[name=capacidad]").val();
				var piso = $button.parent().find("input[name=piso]").val();
				var precio = $button.parent().find("input[name=precio]").val();
				var estado = $button.parent().find("select[name=estado]").val();
				var hotel_id = $button.parent().find("select[name=hotel_id]").val();
				$.ajax({    type: "POST",
					url:"actualizar_habitacion.php",
					data: "habnro="+habnro+"&detalle="+detalle+"&capacidad="+capacidad+"&piso="+piso+"&precio="+precio+"&estado="+estado+"&hotel_id="+hotel_id,
					success: function(data){
					window.location = "habitacion.php?id="+parseInt(data);
					 
				}});
			});
		});
		 
		$(function() {
			$(".actualizar").click(function() {
				var $button = $('form');
				var detalle = $button.parent().find(".area").html();
				detalle.replace(/<div>/gi,'<br>').replace(/<\/div>/gi,'');
				var habnro = $button.parent().find("input[name=habnro]").val();
				var capacidad = $button.parent().find("input[name=capacidad]").val();
				var piso = $button.parent().find("input[name=piso]").val();
				var precio = $button.parent().find("input[name=precio]").val();
				var estado = $button.parent().find("select[name=estado]").val();
				var hotel_id = $button.parent().find("select[name=hotel_id]").val();
				var post = $button.parent().find("input[name=post]").val();
				
				$.ajax({    type: "POST",
					url:"actualizar_habitacion.php",
					data: "post="+post+"habnro="+habnro+"&detalle="+detalle+"&capacidad="+capacidad+"&piso="+piso+"&precio="+precio+"&estado="+estado+"&hotel_id="+hotel_id,
					success: function(data){
				}});
			});
		});
		</script>
		
  </body>
</html>