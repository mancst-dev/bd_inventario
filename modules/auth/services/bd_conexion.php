<?php
    class Conexion {
        public static function Conectar(){
            $host= 'localhost';
            $port=3306;

            //variables para trabajar localmente
            $dbname = 'bd_inventario';
            $username = 'root';
            $passwd= 'ManCst13_2028';

            $server=$driver.':host='.$host.';dbname='.$dbname;
            try {
                $conexion = new PDO($server,$username,$passwd);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion -> exec("SET NAMES 'utf8';");
            } catch (Exception $e) {
                $conexion = null;
                echo '<span class="label label-danger label-block">ERROR AL CONECTARSE A LA BASE DE DATOS, PRESIONE F5</span>';
                exit();
            }
            return $conexion;
        }
    }
        // Variables requeridas para la conexion
// $host = 'localhost'; // url del equipo que contiene la BD, cuando es el mismo computador que contiene la Aplicación se llama localhost
// $user = 'estudia4_05'; // Nombre del usuario de conexion en este caso es root (Usuario principal)
// $password = 'Usuario.05'; // Contraseña asociada al usuario de conexion
// $database = 'estudia4_05'; // Nombre de la base de datos
$host = 'localhost';
$port=3306;
$user = 'root'; // Nombre del usuario de conexion en este caso es root (Usuario principal)
$password = 'ManCst13_2028'; // Contraseña asociada al usuario de conexion
$database = 'bd_inventario'; // Nombre de la base de datos

// Instrucción que permite conectar la aplicación con la base de datos
// $conexion = mysqli_connect($host, $user, $password, $database);
$conexion = mysqli_connect($host, $user, $password, $database, $port);

// Verifica el estado de la conexión si la respuesta es un error muestra el mensaje con la instrucción die
if ($conexion->connect_error) {
    die("Conexion falló debido al error: " . $conexion->connect_error);
}
?>