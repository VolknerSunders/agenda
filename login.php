<?php
    session_start();

    if(!isset($_SESSION['id_persona']) && !isset($_SESSION['usuario'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <form 
        class="p-5 rounded shadow" 
        style="width:30rem;"
        method="post"
        action="auth.php"
    >
        <div class="mb-3">
            <div class="text-center pb-5 display-4">
                <img src="https://cdn.icon-icons.com/icons2/1369/PNG/512/-person_90382.png" class="rounded mx-auto d-block">
            </div>
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']; ?>
            </div>
            <?php }?>
            <label for="exampleInputEmail1" class="form-label">
                Usuario
            </label>
            <input 
                type="text"
                name="usuario" 
                class="form-control" 
                id="exampleInputEmail1" 
                aria-describedby="emailHelp"
            >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
                Contraseña
            </label>
            <input 
                type="password" 
                name="password"
                class="form-control" 
                id="exampleInputPassword1"
            >
        </div>
        <button type="submit" class="btn btn-primary">
            Iniciar sesion
        </button>
    </form>
    </div>
</body>
</html>

<?php
    }else{
        header("Location:index.php");
    }
?>