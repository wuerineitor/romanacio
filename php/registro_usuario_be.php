<?php

    include 'conexion_be.php';



    $nombres = $_POST['nombres'];
    $apellido =$_POST['apellido'];
    $correo =$_POST['correo'];
    $contrasena =$_POST['contrasena'];


    $query = "INSERT INTO usuarios(nombre, apellidos, correo, contrasena) 
              VALUES('$nombres','$apellido','$correo','$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        
        <script>
        alert("usuario almacenado exitosamente");
        window.location= "../inicio.html";
        </script>
        
        
        
        ';
    }

?>