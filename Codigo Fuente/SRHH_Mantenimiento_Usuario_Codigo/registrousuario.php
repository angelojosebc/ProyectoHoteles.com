<?php
   $realname=$_POST['realname'];
   $apellidopaterno=$_POST['apellidopaterno'];
   $apellidomaterno=$_POST['apellidomaterno'];
   if($_POST['genero']=="Masculino")
   {
	   $genero=$_POST['genero'];
   }
   else
   {
	   $genero=$_POST['genero'];
   }
   
   if($_POST['fechadia']=="1")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="2")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="3")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="4")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="5")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="6")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="7")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="8")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="9")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="10")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="11")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="12")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="13")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="14")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="15")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="16")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="17")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="18")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="19")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="20")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="21")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="22")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="23")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="24")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="25")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="26")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="27")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="28")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="29")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else if($_POST['fechadia']=="30")
   {
	   $fechadia=$_POST['fechadia'];
   }
   else{
	   
	    $fechadia=$_POST['fechadia'];
   }
  
   if($_POST['fechames']=="1")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="2")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="3")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="4")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="5")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="6")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="7")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="8")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="9")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="10")
   {
	   $fechames=$_POST['fechames'];
   }
   else if($_POST['fechames']=="11")
   {
	   $fechames=$_POST['fechadia'];
   }
   else if($_POST['fechames']=="12")
   {
	   $fechames=$_POST['fechames'];
   }
   $fechaanio=$_POST['fechaanio'];
   
   if($_POST['docidentidad']=="2")
   {
	   $docidentidad=$_POST['docidentidad'];
   }
   else if($_POST['docidentidad']=="3")
   {
	   $docidentidad=$_POST['docidentidad'];
   }
   $numeroidentidad=$_POST['numeroidentidad'];
   $correo=$_POST['correo'];
   $validacorreo=$_POST['validacorreo'];
   $celular=$_POST['celular'];
   $contraseña=$_POST['contraseña'];
   $validacontraseña=$_POST['validacontraseña'];
   $validacamposobligatorios=strlen($realname)*strlen($apellidopaterno)*strlen($apellidomaterno)*strlen($fechadia)*strlen($fechames)*strlen($fechaanio)*strlen($docidentidad)*strlen($numeroidentidad)*strlen($correo)*strlen($validacorreo)*strlen($celular)*strlen($contraseña)*strlen($validacontraseña);
   if($validacamposobligatorios>0)
   {
	   if($correo==$validacorreo && $contraseña==$validacontraseña)
	   {
		   require("conectar_basedatos.php");
		   $contraseña=md5($contraseña);
		   $validacontraseña=md5($validacontraseña);
		   mysql_query("INSERT INTO registro VALUES('','realname','apellidopaterno','apellidomaterno','genero','fechadia','fechames','fechaanio','docidentidad','numeroidentidad','correo','validacorreo','celular','contraseña','validacontraseña')");
		   mysql_close($link);
		   echo 'Se ha registrado correctamente';
		   
	   }
	   else{
		   echo 'No ha ingresado correctamente su correo';
	   }
   }
   else
   {
	   echo 'Se debe ingresar todos los campos obligatorios';
   }
   
?>