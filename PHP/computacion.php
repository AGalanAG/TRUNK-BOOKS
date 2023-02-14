<!DOCTYPE html>
<html>
<head>
<link href =  "../imagenes/favicon.ico.ico"  type="image/x-icon" rel="shortcut icon" />
	<title>TRUNK-BOOK</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<header>
		
		<div class="imagen1">
		 <img src="../imagenes/Imapag/imacomputacion.png" width="200" alt="">
		 </div>
        <div class="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; COMPUTACION</div>
	
	<nav>
  
		<ul>
		<li><A HREF="../Index/index.php" >Inicio</a></li>
		

	</nav>
	</header>

	<section class="main">
		<section class="articles">
			<h2>Libros de la carrera de Técnico en Computación</h2><br><br>
			<p>
<?php
require ("../SQL/conexion.php");
          $idCone = conexion();
echo "<Table HEIGHT=100% WIDTH=100% ALIGN='CENTER'><TR>";

          

          $SQL="SELECT C.fila1,C.fila2,C.fila3,C.fila4
from computacion as C;";

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
			<h3>Técnico en Computación<br><br>Objetivos<br></h3>

				 <p>El técnico en computación estará capacitado para ofrecer soluciones a problemas que demandan la aplicación de las tecnologías de la información y comunicación en el sector productivo y social de nuestro país a través de la creación de sistemas electrónicos, diseño de redes de computadoras, así como el mantenimiento y uso de equipo de cómputo; siempre en beneficio de la comunidad y con respeto a su entorno. </p>
                                                         

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