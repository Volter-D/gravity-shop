<?php
    include "conexion.php";

    if(isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["contra"])) {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $contra = $_POST["contra"];
        
        // Inserción del nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, correo, contra) VALUES ('$nombre', '$correo', '$contra')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
            header('Location: login.php');
        } else {
            echo "Error en el registro: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
?>
