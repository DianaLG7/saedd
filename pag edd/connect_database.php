<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "Reyes99!";
    $dbname = "sabcoffa";

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