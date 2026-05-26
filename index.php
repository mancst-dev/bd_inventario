<?php
if(!isset($_SESSION))
    {
        session_start();
    }
    if($_SESSION['NombreUsuario']=="")
        {
            header("Location:modules\auth\services\authlogin.php");
            exit;
        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
    <header></header>
    <main></main>
    <footer></footer>
</body>
</html>