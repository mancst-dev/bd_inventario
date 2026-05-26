<?php
include('../services/bd_conexion.php');
$pUsuario=$_POST['usuario'];
$pClave=$_POST['clave'];

$query = "SELECT * FROM usuarios ";
$query .=" where "
?>