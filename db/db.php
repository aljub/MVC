<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 17/10/14
 * Time: 07:05 PM
 */
$conexion=mysql_connect ("localhost","root","") or die ("Error al conectar el servidor".mysql_error());
$base=mysql_select_db("escuela",$conexion) or die ("Error al conectar la BD".mysql_error());

?>