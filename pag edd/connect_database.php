<?php

    $dbhost = "localhost:3308";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "database_edd";

    /*
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn)  
    {
        echo "<script> alert('No se pudo establecer conexión');window.location = 'login.php' </script>";
    }
    */

    try
    {
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }
    catch (Exception $e)
    {
        echo "<script>alert('¡Conexión rechazada!'); window.location='login.php' </script>";
        echo $e->getMessage();
    }
?>