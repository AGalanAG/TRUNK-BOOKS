<?php
function Conexion()
{      $host="localhost";
        $usuario="root";
        $clave="";   //Modificar en caso que tuviera contaseña mysql
        $bd="libros";
       
         $idCone= mysqli_connect ($host,$usuario,$clave) or die ("Error tratando de conectar al servidor $host con el nombre de usuario $usuario");
       //$idCone= mysql_connect ('localhost','root','') or die ("Error tratando de conectar al servidor $host con el nombre de usuario $usuario");
	
          mysqli_select_db($idCone,$bd) or die ("Error seleccionando la base de datos");
        //mysql_select_db('escuela',$idCone) or die ("Error seleccionando la base de datos");
         
         return $idCone;
 }  
?>