<!DOCTYPE html>
<html>
<head>
<link href =  "imagenes/favicon.ico.ico"  type="image/x-icon" rel="shortcut icon" />
	<title>TRUNK-BOOK</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<header>
		
		<div class="imagen1">
		 <img src="../imagenes/Imapag/imaquimica.png" width="300" alt="">
		 </div>
<div class="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; QUÍMICA</div>
	
	<nav>
  
		<ul>
		<li><A HREF="../Index/index.php" >Inicio</a></li>
		

	</nav>
	</header>

	<section class="main">
		<section class="articles">
			<h2>Libros de Quimica</h2><br><br>
			<p>
			<?php
require ("../SQL/conexion.php");
          $idCone = conexion();
echo "<Table HEIGHT=100% WIDTH=100% ALIGN='CENTER'><TR>";

          

          $SQL="SELECT Q.fila1,Q.fila2,Q.fila3,Q.fila4
from Quimica as Q;";

          $Registro = mysqli_query($idCone,$SQL);
         
        
         

          while($Fila = mysqli_fetch_array($Registro))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
           echo "</Table>";
           mysqli_free_result ($Registro);
           mysqli_close($idCone);
           ?>
		</section>
		<aside>
			<h3>Definicion<br></h3>

				 <p>La palabra química proviene de una variable del latín y de raíces árabes que son chimica, chimia, alkimya, referencia de alquimia, para posteriormente pasar por una nueva forma de definir a la química del tipo moderno que empezó a diferenciarse de la alquimia refiriéndose a la variedad de los componentes y composiciones definiendo las propiedades de una o sobre una materia y las posibles transformaciones que surjan o experimentes sin causar ningún cambio, alteraciones o modificaciones sobre la misma o sus elementos, de la cual una materia es conformada.</p>
                                                         

		</aside>
		
	</section>
                   <br><br>
	<footer>
		<p> INSTITUTO POLITECNICO NACIONAL<br>
			D.R. Instituto Politécnico Nacional (IPN), Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Delegación Gustavo A. Madero, C.P. 07738, Ciudad de México; México 2009-2013. 
Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito de la Dirección General del Instituto.</p>
	</footer>


</body>
</html>
