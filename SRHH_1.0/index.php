<?php 
	//conexión con la base de datos.

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/jquery-ui.css" rel="stylesheet">
<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">Hoteles.com</a></h1>
		<h2><a href="#">la guia de los mejores sitios</a></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="#">Nosotros</a></li>
			<li><a id="btnreg" href="#">Registro</a></li>
			<li><a href="#">reservas</a></li>
			<li><a href="#">Perfil</a></li>
			<li><a href="#"></a></li>
		</ul>
	</div>
</div>
<div id="pic"></div>
<div id="page">
	<div id="sidebar">
		<h2>Integer Gravida Nibh</h2>
		<ul>
			<li><h3>December 14th - Lorem Ipsum</h3><a href="#">Dolor sit amet, consectetuer adipiscing elit. In nec risus non turpis interdum rutrum</a></li>
			<li><h3>December 9th - Blandit Justo</h3><a href="#">Consectetuer adipiscing elit. In nec risus non turpis interdum rutrum</a></li>
			<li><h3>December 3rd - Pretium Suscipit</h3><a href="#">Integer nisl risus sagittis convallis rutrum id congue</a></li>
			<li><h3>December 1rd - Suscipit</h3><a href="#">Irisus sagittis convallis rutrum id congue;</a></li>
			<li><h3>December 1rd - Pretium Suscipit</h3><a href="#">consectetuer adipiscing elit. In nec risus non turpis interdum rutrum</a></li>
		</ul>
	</div>
	<div id="content"><div class="inner_copy"></div>
		<h1 class="title">Bienvenidos</h1>
		<p class="meta"><small>Posted on January 24th, 2008 by <a href="#">Metamorphosis Design</a></small></p>
		<p>This website template is repeased under a Creative Commons Attribution 2.5 License</p>
		<p>
			We request you retain the full copyright notice below including the link to www.metamorphozis.com.<br />This not only gives respect to the large amount of time given freely by the developers but also helps build interest, traffic and use of our free and paid designs. If you cannot (for good reason) retain the full copyright we request you at least leave in place the Website Templates line, with Website Templates linked to www.metamorphozis.com. If you refuse to include even this then support may be affected.<br /><br />
			You are allowed to use this design only if you agree to the following conditions:<br />
			- You cannot remove copyright notice from this design without our permission.<br />
			- If you modify this design it still should contain copyright because it is based on our work.<br />
			- You may copy, distribute, modify, etc. this template as long as link to our website remains untouched.<br />
			For support visit <a href="http://www.metamorphozis.com/contact/contact.php">http://www.metamorphozis.com/contact/contact.php</a><br /><br />
			The Metamorphosis Design : 2008
		</p>
		
		<ol>
			<li><a href="#">Integer sit amet pede vel arcu aliquet pretium.</a></li>
			<li><a href="#">Pellentesque quis elit non lectus gravida blandit.</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			<li><a href="#">Phasellus nec erat sit amet nibh pellentesque congue.</a></li>
			<li><a href="#">Cras vitae metus aliquam risus pellentesque pharetra.</a></li>
		</ol>
	</div>
</div>
<div id="footer">
	<div class="fleft">Copyright <a href="#"></a></div>
	<div class="fright">La selecci&oacute;n de plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">en este sitio web</a>.</div>
	<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
</div>

		
		<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
$("#btnreg").click(function(){
    $("#content").load("registro.php");
});
	
	
$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>


</body>
</html>