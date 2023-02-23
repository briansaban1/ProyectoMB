<?php 

function enviar_email(){
            $dest = "micaelabrunacci@hotmail.com"; //Email de destino
            $nombre = trim($_POST['name']);
            $email = trim($_POST['email']);
            $asunto = "Contacto desde Formulario web"; //Asunto
            $cuerpo = htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['mensaje']))))); //Cuerpo del mensaje
			
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
			
             if(mail($dest,$asunto,$cuerpo,$headers)){
				 foreach($_POST AS $key => $value) {
                    $_POST[$key] = mysql_real_escape_string($value);
                }
                
                $_POST['name'] = '';
                $_POST['email'] = '';
                $_POST['mensaje'] = '';
				
              echo $result12 = '<div class="result_ok">¡Email enviado exitosamente!</div> ';
				
            }else{
			  echo $result12 = '<div class="result_fail">Hubo un error al enviar el mensaje</div> ';
            
            }
        }

?>