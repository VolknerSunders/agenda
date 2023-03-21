<?php
session_start();
include 'db_conn.php';


if(isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (empty($usuario)){
        header("Location: login.php?error=Usuario es requerido");
    }else if(empty($password)){
        header("Location: login.php?error=Contrasena requerida");
    }else{
        $stmt = $conn->prepare("SELECT * FROM persona WHERE usuario=?");
        $stmt->execute([$usuario]);

        if($stmt -> rowCount() === 1){
            $persona = $stmt->fetch();
            $id_persona = $persona['id_persona'];
            $usuario_persona = $persona['usuario'];
            $password_persona = $persona['contrasenia'];
            $nombre_agen = $persona['nombre_agen'];
            $ap_paterno_agen = $persona['ap_paterno_agen'];
            $ap_materno_agen = $persona['ap_materno_agen'];
            $id_fecha_ing = $persona['id_fecha_ing'];
            $status = $persona['status'];

            if($usuario === $usuario_persona){
                if($password === $password_persona){
                    $_SESSION['id_persona'] = $id_persona;
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['nombre_agen'] = $nombre_agen;
                    $_SESSION['ap_paterno_agen'] = $ap_paterno_agen;
                    $_SESSION['ap_materno_agen'] = $ap_materno_agen;
                    $_SESSION['id_fecha_ing'] = $id_fecha_ing;
                    $_SESSION['status'] = $status;
                    header("Location: index.php");
                }else{
                    header("Location: login.php?error=Usuario o Contrasena incorrecta");
                }
            }else{
                header("Location: login.php?error=Usuario o Contrasena incorrecta");
            }

        }else{
            header("Location: login.php?error=Usuario o Contrasena incorrecta");
        }
    }
}