<html>
  <head>
       <title> Formulario de registro </title>
  </head>
  <body>
     <h1>Formulario de Registro</h1>
	 <form method="POST" action="" />
	    <table>
		  <tr>
		    <td>
			  Nombre:
			</td>
			<td>
			  <input type="name" name="realname" />*
			</td>
		  </tr>
		   <tr>
		    <td>
			  Apellido paterno:
			</td>
			<td>
			  <input type="name" name="apellidopaterno" />*
			</td>
		  </tr>
		  <tr>
		    <td>
			  Apellido materno:
			</td>
			<td>
			  <input type="name" name="apellidomaterno" />*
			</td>
		  </tr>
		  <tr>
		    <td>
			  Género:
			</td>
		    <td>
		    <input type="radio" name="genero" value="Masculino" />Masculino 
            <input type="radio" name="genero" value="Femenino" />Femenino*
		    </td>
		  </tr>
		  <tr>
		    <td>
			  *Fecha de Nacimiento:
			</td>
			<td>
			<select name="fechadia">
			
			    <option value="">Dia </option>
			    <option value="1">1 </option>
				<option value="2">2 </option>
				<option value="3">3 </option>
			    <option value="4">4 </option>
				<option value="5">5 </option>
				<option value="6">6 </option>
			    <option value="7">7 </option>
				<option value="8">8 </option>
				<option value="9">9 </option>
			    <option value="10">10 </option>
				<option value="11">11 </option>
				<option value="12">12 </option>
			    <option value="13">13 </option>
				<option value="14">14 </option>
				<option value="15">15 </option>
			    <option value="16">16 </option>
				<option value="17">17 </option>
				<option value="18">18 </option>
			    <option value="19">19 </option>
				<option value="20">20 </option>
				<option value="21">21 </option>
			    <option value="22">22 </option>
				<option value="23">23 </option>
				<option value="24">24 </option>
			    <option value="25">25 </option>
				<option value="26">26 </option>
				<option value="27">27 </option>
			    <option value="28">28 </option>
				<option value="29">29 </option>
				<option value="30">30 </option>
			    <option value="31">31 </option>
		    </td>
		    <td>
			<select name="fechames">
			<option value="">Mes </option>
			    <option value="1">1 </option>
				<option value="2">2 </option>
				<option value="3">3 </option>
			    <option value="4">4 </option>
				<option value="5">5 </option>
				<option value="6">6 </option>
			    <option value="7">7 </option>
				<option value="8">8 </option>
				<option value="9">9 </option>
			    <option value="10">10 </option>
				<option value="11">11 </option>
				<option value="12">12 </option>
			</td>
		    <td>
			<select name="fechaanio">
			<option value="">Año </option>
			    <option value="1950">1950 </option>
				<option value="1951">1951 </option>
				<option value="1952">1952 </option>
			    <option value="1953">1953 </option>
				<option value="1954">1954 </option>
				<option value="1955">1955 </option>
			    <option value="1956">1956 </option>
				<option value="1957">1957 </option>
				<option value="1958">1958 </option>
			    <option value="1959">1959 </option>
				<option value="1960">1960 </option>
				<option value="1961">1961 </option>
				<option value="1962">1962 </option>
				<option value="1963">1963 </option>
				<option value="1964">1964 </option>
			    <option value="1965">1965 </option>
				<option value="1966">1966 </option>
				<option value="1967">1967 </option>
			    <option value="1968">1968 </option>
				<option value="1969">1969 </option>
				<option value="1970">1970 </option>
			    <option value="1971">1971 </option>
				<option value="1972">1972 </option>
				<option value="1973">1973 </option>
				<option value="1974">1974 </option>
				<option value="1975">1975 </option>
				<option value="1976">1976 </option>
			    <option value="1977">1977 </option>
				<option value="1978">1978 </option>
				<option value="1979">1979 </option>
			    <option value="1980">1980 </option>
				<option value="1981">1981 </option>
				<option value="1982">1982 </option>
			    <option value="1983">1983 </option>
				<option value="1984">1984 </option>
				<option value="1985">1985 </option>
				<option value="1986">1986 </option>
				<option value="1987">1987 </option>
				<option value="1988">1988 </option>
			    <option value="1989">1989 </option>
				<option value="1990">1990 </option>
				<option value="1991">1991 </option>
			    <option value="1992">1992 </option>
				<option value="1993">1993 </option>
				<option value="1994">1994 </option>
			    <option value="1995">1995 </option>
				<option value="1996">1996 </option>
				<option value="1997">1997 </option>
			</td>
		  </tr>
		   <tr>
		    <td>
			  Documento de Identidad:
			</td>
		    <td>
		    <select name="docidentidad">
              <option value="1" selected="selected"></option>
              <option value="2">DNI</option>
              <option value="3">Carné de extranjería</option>
            </select>
		    </td>
			<td>
			 <input type="name" name="numeroidentidad" />*
			</td>
		  </tr>
		  <tr>
		    <td>
			  Escriba su correo electrónico:
			</td>
			<td>
			  <input type="name" name="correo" />*
			</td>
		  </tr>
		  <tr>
		    <td>
			  Escriba de nuevo su correo electrónico:
			</td>
			<td>
			  <input type="name" name="validacorreo" />*
			</td>
		  </tr>
		  <tr>
		    <td>
			  Telefono Celular:
			</td>
			<td>
			  <input type="name" name="celular" />
			</td>
		  </tr>
		  <tr>
		    <td>
			  Escriba su contraseña:
			</td>
			<td>
			  <input type="name" name="contraseña" />*
			</td>
		  </tr>
		  <tr>
		    <td>
			  Escriba de nuevo su contraseña:
			</td>
			<td>
			  <input type="name" name="validacontraseña" />*
			</td>
		  </tr>
		  <tr>
		   <td>
             <h3>* Campos Obligatorios</h3>
           </td>
          </tr>		   
		</table>
		<tr>
		  <td>
		  <input type ="submit" name="submit" value="Registrar"/>
		  </td>
		  <td>
		  <input type ="submit" name="submit" value="Salir"/>
		  </td>
		</tr>
	  </form>
		<?php
		   if(isset($_POST['submit']))
		   {
			   require("registrousuario.php");
		   }
		 
		
		?>
		
	 
  </body>
</html>