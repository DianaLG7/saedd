<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        header('location: profile.php');
    }

    else if(isset($_POST['btnenviar']))
    {
        include('connect_database.php');

        $email_cofaa = 'miguel.r.g26@hotmail.com';
        $password_cofaa = 'newsupermariobro';
        $email_user = $_POST['txtemail'];

        $search = "SELECT email FROM perfiles WHERE email = '$email_user'";
        $query = mysqli_query($conn, $search);
        $nr = mysqli_num_rows($query);

        if($nr == 1)
        {
            $mail = new PHPMailer(true);

            try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();                                            //Send using SMTP
            
            $mail->Host       = 'smtp-mail.outlook.com';                        //Set the SMTP server to send through
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            
            $mail->Username   = $email_cofaa;                           //SMTP username
            $mail->Password   = $password_cofaa;                        //SMTP password

            //Recipients
            $mail->setFrom($email_cofaa, 'Soporte SABCOFAA');
            $mail->addAddress($email_user);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Enlace para recuperar contraseña';
            $mail->Body    = 'Utiliza el siguiente enlace para recuperar tu contraseña: <br><a>enlace.com</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "<script> alert('¡Correo enviado exitosamente!'); window.location='recover_password.php' </script>";
            } 
            catch (Exception $e) 
            {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        else
        {
            echo "<script> alert('¡Correo no encontrado! Ingresar otro diferente'); window.location='recover_password.php' </script>";
        }
    }
?>