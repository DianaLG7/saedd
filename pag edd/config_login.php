<?php
    session_start();

    if(isset($_SESSION['username']))
    {
        header('location: profile.php');
    }

    else if(isset($_POST['btningresar']))
    {
        include('connect_database.php');

        $id_becario=$_POST['txtid'];
        $pass=$_POST['txtpass'];

        $validar = "SELECT id_becario, contraseña FROM usuarios WHERE id_becario = '$id_becario' AND contraseña = '$pass'";
        $query = mysqli_query($conn, $validar);
        $nr = mysqli_num_rows($query);

        if(!isset($_SESSION['username']))
        {
            if($nr == 1)
            {
                $_SESSION['username']=$id_becario;
                echo "<script> window.location='profile.php' </script>";
            }
            else
            {
                echo "<script> alert('¡Usuario no encontrado o contraseña incorrecta!'); window.location='login.php' </script>";
            } 
        }
    }
?>
