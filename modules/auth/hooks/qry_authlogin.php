<?php
include('../../../bd_conexion.php'); 

$pUsuario = isset($_POST['usuario']) ? mysqli_real_escape_string($conexion, $_POST['usuario']) : '';
$pClave = isset($_POST['clave']) ? $_POST['clave'] : '';

$response = array('success' => false, 'message' => '', 'nombre' => '');

if ($pClave == "") {
    // Esc 1 Solo validando siel usuario existe (onblur)
    $query = "SELECT Usuario FROM usuario WHERE Usuario = '$pUsuario'";
    $result = mysqli_query($conexion, $query);
    
    if ($row = mysqli_fetch_array($result)) {
        $response['success'] = true;
        $response['nombre'] = $row['Usuario'];
    } else {
        $response['message'] = '*** Usuario No Existe ***';
    }
} else {
    // Esc2Validando credenciales comptas para ini sesion
    // $claveMd5 = md5($pClave); usar en caso que se usar el cifrado md5, que se usará finalmente
    $claveFinal = $pClave;
    $query = "SELECT Usuario FROM usuario WHERE Usuario = '$pUsuario' AND Contraseña = '$claveFinal'";
    $result = mysqli_query($conexion, $query);

    if ($row = mysqli_fetch_array($result)) {
        if(!isset($_SESSION)) { 
            session_start(); 
        }
        $_SESSION["NombreUsuario"] = $row['Usuario'];
        $response['success'] = true;
        $response['nombre'] = $row['Usuario'];
    } else {
        $response['message'] = '*** Contraseña Incorrecta ***';
    }
}

//Retornarun JSON
header('Content-Type: application/json');
echo json_encode($response);
?>