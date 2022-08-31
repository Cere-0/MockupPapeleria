<?php
	$server="localhost";
	$user="root";
	$pass="";
	$database='papeleria';
	$conexion=mysql_connect($server,$user,$pass)or die("No se puede establecer la conexion");
	$selectdatabase=mysql_select_db($database,$conexion)or die("Base de datos no encontrada");
	mysql_query("SET NAMES 'utf8'");
?>