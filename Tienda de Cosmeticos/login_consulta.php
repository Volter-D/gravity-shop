<?php
    session_start();
    include "conexion.php";

    // Verifica si los datos del formulario fueron enviados
    if(isset($_POST["nombre"])  && isset($_POST["contra"])) {
        $nombre = $_POST["nombre"];
        
        $contra = $_POST["contra"];

        // Realiza la consulta a la base de datos
        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'  AND contra = '$contra'";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            // Usuario autenticado
            $_SESSION["nombre"] = $nombre;
            header("Location: inicio.php");
            exit();
        } else {
            // Usuario no autenticado
            echo "<script>alert('Usuario o contraseña incorrectos');</script>";
            header("Location: login.php");
            exit();
        }
    } else {
        echo "Por favor completa todos los campos.";
    }
?>
