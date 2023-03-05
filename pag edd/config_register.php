<?php
    session_start();

    if(isset($_SESSION['username']))
    {
        header('location: profile.php');
    }

    else if(isset($_POST['btnregistrar']))
    {
        include('connect_database.php');

        $id_becario = $_POST['txtid'];
        $password1 = $_POST['txtpass1'];
        $password2 = $_POST['txtpass2'];

        $verificar = "SELECT id_becario FROM usuarios WHERE id_becario = '$id_becario'";
        $query = mysqli_query($conn, $verificar);
        $nr = mysqli_num_rows($query);

        if($nr == 1)
        {
            echo "<script> alert('¡Usuario ya existente! Registra otro usuario diferente'); window.location='register.php' </script>";
        }
        else if(strcmp($password1, $password2) == 0)
        {
            $agregar="INSERT INTO usuarios (id_becario, contraseña) VALUES ('$id_becario','$password1')";
            if(mysqli_query($conn, $agregar))
            {
                echo "<script> alert('¡Usuario registrado con éxito!'); window.location='login.php' </script>";
            }
            else
            {
                echo "Error: ".$agregar."<br>".mysql_error($conn);
            }
        }
        else
        {
            echo "<script> alert('Las contraseñas no coinciden. Volver a escribir'); window.location='register.php' </script>";
        }
    }
?>