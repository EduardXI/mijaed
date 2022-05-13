<?php

    $subject = "MIJAED SAC Pedido de seleccion de un Vehiculo";
    
    $emailsSend = ["eduarjavier0402@gmail.com"];
    
    $to = "$emailsSend[0]";

    $message = "
    <html>
    <head>
        <title>Email-Inversiones Mijaed.SAC Consultas</title>
    </head>
    <body>
    <p>Este <strong>mensaje de consulta</strong> fue enviado desde  http://mijaed.servitec.site/</p>
    <table style='margin:0!important'>
    <tr>
    <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Vehiculo seleccionado:</b></td>
    <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['select']."</td>
    </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Nombres y Apellidos:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userName']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Email:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userEmail']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Telefono:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userPhone']."</td>
        </tr>
    </table>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  if(mail($to,$subject,$message,$headers)){
       
         header("location:index.html");

   }else{
                  echo "<script>
                    alert('No se envio');
            
            </script>"; 
       
   }

    
?>