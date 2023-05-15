<?php
    session_start();
    include 'db_conn.php';
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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="navbar-brand align-middle" href="index.php"><img style="max-width: 80px; max-height: 80px;" width="1275" height="1291" src="media/logo-poder-judicial.png" alt="Poder Judicial del Estado de Nayarit" srcset="" sizes="(max-width: 1275px) 100vw, 1275px"/></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Realizar una agenda</a>
                    </li>
                </ul>
                
            </div>
            <ul class="navbar-nav justify-content-end">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-4">
                            <li class="nav-item">
                                Hola, <?=$_SESSION['nombre_agen']?> <?=$_SESSION['ap_materno_agen']?> 
                            </li>
                        </div>
                        <div class="col-4">
                            <a href="logout.php" class="btn btn-warning">Cerrar sesion</a>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" >
        <div class="row mb-3 mt-3">
            <div class="col text-center">
                <h1>Agendas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-warning table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Numero de Folio</th>
                            <th>Tipo de Asunto</th>
                            <th>Fecha Programada</th>
                            <th>Hora Programada</th>
                            <th>Fecha del aviso</th>
                            <th>Hora del Aviso</th>
                            <th>Identificador</th>
                            <th>Evento</th>
                            <th>Comentario</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stmt = $conn->prepare("SELECT * FROM agenda");
                        $stmt->execute();

                        while ($fila = $stmt -> fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td> <?php echo $fila['id_folio'] ?> </td>
                                <td> <?php echo $fila['id_tipo_asunto'] ?> </td>
                                <td> <?php echo $fila['id_fecha_pro'] ?> </td>
                                <td> <?php echo $fila['id_hra_pro'] ?> </td>
                                <td> <?php echo $fila['id_fecha_aviso'] ?> </td>
                                <td> <?php echo $fila['id_hra_aviso'] ?> </td>
                                <td> <?php echo $fila['id_persona'] ?> </td>
                                <td> <?php echo $fila['evento'] ?> </td>
                                <td> <?php echo $fila['comentario'] ?> </td>
                                <td> <?php echo $fila['estatus'] ?> </td>
                                <td class="text-center"> 
                                    <a href="#" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <div>
    <script src="https://kit.fontawesome.com/ccddea4b7c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
