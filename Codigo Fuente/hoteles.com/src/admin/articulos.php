<?php 
include 'cabecera.php';	
include 'menu.php';
$post = $_GET['id'];
include '../includes/config.php';
$cat = sprintf("SELECT * FROM categorias WHERE 1");
$c = mysql_query($cat);
if ($post > 0) {
    $sql = sprintf("SELECT * FROM articulos WHERE id = '$post'");
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
		<h2>Escribir un art&iacute;culo</h2>

			<form>
			
			<div class="escritura">
				<label for="titulo">Título</label>
				<input type="text" value="<?php if ($post > 0) echo $res['titulo'] ?>" name="titulo">
				<input type="hidden" value="<?php echo $id ?>" name="autor">
				<input type="hidden" value="<?php echo $post ?>" name="post">
				<div class="area" contenteditable><?php if ($post > 0) echo $res['contenido'] ?></div>
				<select name="categoria">
					<?php while ($r = mysql_fetch_array($c)) { ?>
						<option <?php if($res['categoria'] == $r['id']) echo 'selected = "selected"' ?>name="categoria" value="<?php echo $r['id'] ?>"><?php echo $r['categoria']?></option>          
					<?php } ?>
				</select>
					 
				<?php if ($post > 0) { ?>
				<div class="actualizar">Actualizar</div>
				<?php } else { ?>
				<div class="publicar">Publicar</div>
				<?php } ?>
				
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
				var contenido = $button.parent().find(".area").html();
				contenido.replace(/<div>/gi,'<br>').replace(/<\/div>/gi,'');
				var titulo = $button.parent().find("input[name=titulo]").val();
				var autor = $button.parent().find("input[name=autor]").val();
				var categoria = $button.parent().find("select[name=categoria]").val();
				$.ajax({    type: "POST",
					url:"actualizar_articulo.php",
					data: "titulo="+titulo+"&contenido="+contenido+"&autor="+autor+"&categoria="+categoria,
					success: function(data){
					window.location = "articulos.php?id="+parseInt(data);
					 
				}});
			});
		});
		 
		$(function() {
			$(".actualizar").click(function() {
				var $button = $('form');
				var contenido = $button.parent().find(".area").html();
				contenido.replace(/<div>/gi,'<br>').replace(/<\/div>/gi,'');
				contenido=contenido.replace(/<div>/g,"<br>").replace(/<\/div>/g," ");
				var titulo = $button.parent().find("input[name=titulo]").val();
				var autor = $button.parent().find("input[name=autor]").val();
				var post = $button.parent().find("input[name=post]").val();
				var categoria = $button.parent().find("select[name=categoria]").val();
				$.ajax({    type: "POST",
					url:"actualizar_articulo.php",
					data: "titulo="+titulo+"&contenido="+contenido+"&autor="+autor+"&post="+post+"&categoria="+categoria,
					success: function(data){
				}});
			});
		});
		</script>
		
  </body>
</html>