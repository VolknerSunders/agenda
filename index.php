<?php
    session_start();

    if(isset($_SESSION['id_persona']) && isset($_SESSION['usuario'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center flex-column" style="min-height:100vh;">
        <i class="bi bi-person-fill" style="font-size: 14rem"></i>
        <h1 class="text-center display-4" style="margin-top:-50px;font-size:2rem;">
            Bienvenido <?=$_SESSION['nombre_agen']?> <?=$_SESSION['ap_paterno_agen']?> <?=$_SESSION['ap_materno_agen']?> 
        </h1>
        <a href="logout.php" class="btn btn-warning">Cerrar sesion</a>
    <div>
</body>
</html>

<?php
    }else{
        header("Location:login.php");
    }
?>