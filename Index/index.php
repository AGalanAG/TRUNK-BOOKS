<!DOCTYPE html>
<html>
<head>
<link href =  "../imagenes/Imapag/favicon.ico.ico"  type="image/x-icon" rel="shortcut icon" />
	<title> TRUNK-BOOK</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<header>

		<div class="imagen1">
		 <img src="../imagenes/Imapag/log2.jpg" width="200" alt="">
		 </div>
<div class="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TRUNK-BOOKS</div>

	<nav>

		<ul>
		<li><A HREF="../php/automotriz.php" >Automotriz</a></li>
		<li><A HREF="../php/computacion.php" >Computacion</a></li>
		<li><A HREF="../php/Fisica.php" >Fisica</a></li>
        <li><A HREF="../php/historia.php" >Historia</a></li>
		<li><A HREF="../php/mantenimiento.php" >Mantenimiento</a></li>
        <li><A HREF="../php/matematicas.php" >Matematicas</a></li>
        <li><A HREF="../php/plasticos.php" >Plasticos</a></li>
        <li><A HREF="../php/quimica.php" >Quimica</a></li>
		</ul>

	</nav>
	</header>

	<section class="main">
		<section class="articles">
			<h2>LIBROS FAVORITOS</h2><br><br>
	           <?php
require ("../SQL/conexion.php");
          $idCone = conexion();
echo "<Table HEIGHT=100% WIDTH=100% ALIGN='CENTER'><TR>";

          

          $SQL="SELECT A.fila1,A.fila2,A.fila3,A.fila4
from automotriz as A
where id = 1;";
          $SQL1="SELECT C.fila1,C.fila2,C.fila3,C.fila4
from computacion as C
where id =1;";

$SQL2="SELECT f.fila1,f.fila2,f.fila3,f.fila4
from fisica as f
where id = 1;";

$SQL3="SELECT f.fila1,f.fila2,f.fila3,f.fila4
from historia as f
where id = 1;";

$SQL4="SELECT f.fila1,f.fila2,f.fila3,f.fila4
from mantenimiento as f
where id = 1;";

$SQL5="SELECT f.fila1,f.fila2,f.fila3,f.fila4
from matematicas as f
where id = 1;";

$SQL6="SELECT f.fila1,f.fila2,f.fila3,f.fila4
from plasticos as f
where id = 1;";

$SQL7="SELECT f.fila1,f.fila2,f.fila3,f.fila4
from quimica as f
where id = 1;";

        $Registro = mysqli_query($idCone,$SQL);
         
        $Registro1 = mysqli_query($idCone,$SQL1);
                $Registro2 = mysqli_query($idCone,$SQL2);
         
        $Registro3 = mysqli_query($idCone,$SQL3);
                $Registro4 = mysqli_query($idCone,$SQL4);
         
        $Registro5 = mysqli_query($idCone,$SQL5);
                $Registro6 = mysqli_query($idCone,$SQL6);
         
        $Registro7 = mysqli_query($idCone,$SQL7);

          while($Fila = mysqli_fetch_array($Registro))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
                      while($Fila = mysqli_fetch_array($Registro1))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
                                  while($Fila = mysqli_fetch_array($Registro2))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
                                  while($Fila = mysqli_fetch_array($Registro3))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
                                  while($Fila = mysqli_fetch_array($Registro4))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
                                  while($Fila = mysqli_fetch_array($Registro5))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
                                  while($Fila = mysqli_fetch_array($Registro6))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
                                  while($Fila = mysqli_fetch_array($Registro7))
           { 
                  echo "<tr>"."<Td>" .$Fila['fila1']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila2']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila3']. "</a>"."</td>";
                  echo "<Td>" .$Fila['fila4']. "</a>"."</td>";
                  
  
            } 
           echo "</Table>";
           mysqli_free_result ($Registro);
           mysqli_free_result ($Registro1);
           mysqli_free_result ($Registro2);
           mysqli_free_result ($Registro3);
           mysqli_free_result ($Registro4);
           mysqli_free_result ($Registro5);
           mysqli_free_result ($Registro6);
           mysqli_free_result ($Registro7);
           mysqli_close($idCone);
           ?>
           
</section>

		<aside>
			<h3>Servicios</h3><br><br>
             <ul>
             	<li type="circle">Préstamo de libros en la sala de lectura<br><br></li>
             	<li type="circle">Servicio de mochilero<br><br></li>
             	<li type="circle">Préstamo de libros a domicilio<br><br></li>
             	<li type="circle">Servicio de consulta<br><br></li>
             	<li type="circle">Servicio de internet<br><br></li>
             	<li type="circle">Préstamo de libros para fotocopiado</li>
             	<li type="circle">Préstamo interbibliotecario<br><br></li>
             	<li type="circle">Préstamo de cubículos para asesorías<br><br></li>
             	<li type="circle">Servicio de computadoras<br><br></li>
             </ul>
             Horario de Servicio de Lunes a Viernes de 8 a 21 hrs.



		</aside> <br>



		</div>


	</section>
                   <br><br>
	<footer>
		<p> INSTITUTO POLITECNICO NACIONAL<br>
			D.R. Instituto Politécnico Nacional (IPN), Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Delegación Gustavo A. Madero, C.P. 07738, Ciudad de México; México 2009-2013.
Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito de la Dirección General del Instituto.</p>
	</footer>


</body>
</html>
