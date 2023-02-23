<?php 

ob_start();
error_reporting(0);

if(isset($_POST['boton'])){
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
                
                $_POST['name'] = '';
                $_POST['email'] = '';
                $_POST['mensaje'] = '';
				
                $result12 = '<div class="result_ok">¡Email enviado exitosamente!</div> ';
				
            }else{
				$result12 = '<div class="result_fail">Hubo un error al enviar el mensaje</div> ';
            
            }
        }

            ob_end_flush();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" >	

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta property="og:site_name" content="Proyecto MB" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta name="description" content="Somos un equipo de arquitectos dedicado a crear espacios únicos que sean funcionales y estéticamente atractivos."/>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <link rel="icon" href="img/ico-logo.png" sizes="any" type="image/png">

    <title>Proyecto MB</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script async src="https://www.google.com/recaptcha/api.js"></script>


    </head>
    
    <body>
    
    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


        <div id="fullpage" class="fullpage-default">

            <div class="section animated-row" style="background: #f7f4f1;" data-section="slide01">
                
                    <div class="welcome-box">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-md-6 container_left">
                                    <div class="container_index" align="left">
                                    <div class="animate" data-animate="fadeInUp">
                                        <img src="img/logo.png" class="logo_style" alt="">
                                    </div>
                                    <div class="animate" data-animate="fadeInUp">
                                        <div style="margin-top: 50px;">
                                            <span class="text-principal-home">Arquitectura & interiorismo</span>
                                        </div>
                                        <div class="text-width">
                                            <span class="text-principal-home-sub">Diseños innovadores que mejoran tu estilo de vida.</span>
                                        </div>

                                        <div style="margin-top: 60px; padding-left: 10px; ">
                                            
                                            <div class="row" style="margin-bottom: 20px">
                                                <div class="col-md-2" >
                                                 <img src="img/principal/1.png"
                                                        style="width: 70px;" class="rounded" alt="">
                                                    </div>
                                                    <div class="col-md-8" style="padding-left: 10px;">
                                                    <span class="text-dato-titulo">Innovación</span>
                                                    <br>
                                                    <span class="text-dato">Soluciones creativas para satisfacer las necesidades del cliente.</span>
                                                </div>
                                            </div>


                                            <div class="row" style="margin-bottom: 30px">
                                                <div class="col-md-2" >
                                                 <img src="img/principal/2.png"
                                                        style="width: 70px;" class="rounded" alt="">
                                                    </div>
                                                    <div class="col-md-8" style="padding-left: 10px;">
                                                    <span class="text-dato-titulo">Responsabilidad</span>
                                                    <br>
                                                    <span class="text-dato">Integridad y honestidad que garantizan confianza.</span>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-bottom: 20px">
                                                <div class="col-md-2" >
                                                 <img src="img/principal/3.png"
                                                        style="width: 70px;" class="rounded" alt="">
                                                    </div>
                                                    <div class="col-md-8" style="padding-left: 10px;">
                                                    <span class="text-dato-titulo">Compromiso</span>
                                                    <br>
                                                    <span class="text-dato">Comprometidos con la calidad de nuestros proyectos.</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-5" style="align-self: center;">
                                    <figure class="about-img animate" style="" data-animate="fadeInUp">
                                        <img src="img/principal/img.jpg"
                                            style="height: 100%; width: 100%; position:relative;" class="rounded"
                                            alt="">
                                    </figure>
                                </div>
                            </div>

                        </div>
                    
                    </div>
                
            </div>

            <div class="section animated-row" style="background: #cecdae;" align="left" data-section="slide02">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row" style="vertical-align: middle; align-items: center;">
                                    <div class="col-md-5">
                                        <div >
                                            <div class="animate" align="left" data-animate="fadeInUp">
                                                <span class="text-sobre-nosotros-titulo">Sobre nosotros</span>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="justify-content: flex-start; align-items: flex-start; align-content: flex-start;">
                                       <div style="margin: 20px;">
                                        <span class="text-sobre-nosotros">Somos un equipo de arquitectos dedicado a crear espacios únicos que sean funcionales y estéticamente atractivos.
                                            </span>
                                        </div>
                                            <div style="margin: 20px;">
                                            <span class="text-sobre-nosotros">Nuestro objetivo es diseñar y crear soluciones innovadoras para satisfacer las necesidades de nuestros clientes.
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="section animated-row" style="background: #f7f4f1;" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="animate" data-animate="fadeInUp">

                                <div class="col-md-12" align="left" style="justify-content: flex-start; align-items: flex-start; align-content: flex-start;">
                                   
                                    <div style="margin: 20px;">
                                        <span class="text-poder-ayudar-titulo">¿En qué podemos ayudarte?
                                        </span>
                                     </div>
                                     
                                    <div style="margin: 20px; margin-top: 40px;">
                                        <span class="text-poder-ayudar">Nos especializamos en proyectos de arquitectura, interiorismo y reformas, tanto de casas, consultorios y espacios comerciales.
                                        </span>
                                     </div>
                                         <div style="margin: 20px;">
                                            <span class="text-poder-ayudar">Nuestro objetivo es brindar un servicio de gran calidad e innovación que satisfaga a nuestros clientes en todo el proceso del proyecto.
                                            </span>
                                     </div>
                                 </div>

                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="img/servicios/1.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Proyectos de arquitectura</h4>
                                                <p>Te ayudamos a crear la casa de tus sueños desde cero.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="img/servicios/2.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Diseño de interiores residencial</h4>
                                                <p>Transformamos tu hogar con diseños únicos que se adaptan a tu estilo de vida.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="img/servicios/3.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Diseño de interiores comerciales</h4>
                                                <p>Te ayudamos a crear espacios prácticos, estéticos y funcionales.</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="section animated-row" style="background: #eadecc;" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="animate" style="margin-bottom: 80px;" data-animate="fadeInUp">

                                <div class="col-md-12" align="left" style="justify-content: flex-start; align-items: flex-start; align-content: flex-start;">
                                   
                                    <div>
                                        <span class="text-poder-ayudar-titulo">Proyectos
                                        </span>
                                     </div>
                                     
                                 </div>

                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item-proyecto">
                                            <div class="thumb">
                                                <img src="img/proyectos/1.png" alt="">
                                            </div>
                                            <div class="animate" align="left" style="margin-top: 15px; " data-animate="fadeInUp">
                                                <span class="text-proyecto">01.</span>
                                                <span class="text-proyecto">Casa Lase</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="img/proyectos/2.png" alt="">
                                            </div>
                                            <div class="animate" align="left" style="margin-top: 15px; " data-animate="fadeInUp">
                                                <span class="text-proyecto">02.</span>
                                                    <span class="text-proyecto">Casa Saravia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="img/proyectos/3.png" alt="">
                                            </div>
                                            <div class="animate" align="left" style="margin-top: 15px; " data-animate="fadeInUp">
                                                <span class="text-proyecto">03.</span>
                                                <span class="text-proyecto">Dúplex Colón</span>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="img/proyectos/4.png" alt="">
                                            </div>
                                            <div class="animate" align="left" style="margin-top: 15px; " data-animate="fadeInUp">
                                                <span class="text-proyecto">04.</span>
                                                <span class="text-proyecto">Casa Khaled</span>    
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="img/proyectos/5.png" alt="">
                                            </div>
                                            <div class="animate" align="left" style="margin-top: 15px; " data-animate="fadeInUp">
                                                <span class="text-proyecto">05.</span>
                                                <span class="text-proyecto">Chapoval</span>    
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="animate" style="margin-bottom: 80px;" data-animate="fadeInUp">

                                <div class="col-md-12 boton-trabajo" align="center">
                                   
                                    <div style="margin-top: 50px;">
                                        <a href="#"><button class="btn" type="submit">Trabajemos juntos</button></a>
                                     </div>
                                     
                                 </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>




            <div class="section animated-row" style="background: #f7f4f1;" data-section="slide04">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="col-md-12" align="right" style="margin-bottom: 50px;">
                                   
                                <div class="col-md-6 col6-max">
                                    <span class="text-clientes">¿Qué dicen nuestros clientes?
                                    </span>
                                 </div>
                                 
                             </div>
                            <div class="col-md-8 offset-md-2">
                                <div class="testimonials-section">
                                    <div class="testimonials-slider owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="img/proyectos/1.png" class="rounded-circle" alt="profile 1">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Nombre proyecto</h4>
                                                    <p>"Nam iaculis, leo nec facilisis sollicitudin, dui massa tempus odio, vitae malesuada ante elit vitae eros."</p>
                                                   
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="img/proyectos/2.png" class="rounded-circle" alt="profile 2">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Nombre proyecto</h4>
                                                    <p>"Nam iaculis, leo nec facilisis sollicitudin, dui massa tempus odio, vitae malesuada ante elit vitae eros."</p>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="img/proyectos/3.png" class="rounded-circle" alt="profile 3">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4>Nombre proyecto</h4>
                                                    <p>"Nam iaculis, leo nec facilisis sollicitudin, dui massa tempus odio, vitae malesuada ante elit vitae eros."</p>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" style="background: #cecdae;" data-section="slide05">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="col-md-12 titulo-margen-contacto" align="center">
                                   
                                <div class="col-md-6">
                                    <span class="text-contacto-titulo">Contactanos
                                    </span>
                                 </div>
                                 
                             </div>
                            <div class="contact-section">
                                <div class="row">
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <div class="contact-box">
                                            <div class="contact-row">
                                                
                                                    <i class="fa fa-phone" style="color: black;"></i><span class="text-contacto"> 115 741 3441</span>
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-envelope" style="color: black;"></i><span class="text-contacto">micaelabrunacci@hotmail.com</span>
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-map-marker" style="color: black;"></i><span class="text-contacto">CABA</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate form-margin bottom-margin" data-animate="fadeInUp">
                                        <form method="post" action=''>
                                            <div class="input-field">
                                                <input type="text" class="form-control" name="name" id="name" required placeholder="Nombre Completo">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                                            </div>
                                            <div class="input-field">
                                                <textarea class="form-control" name="mensaje" id="mensaje" required placeholder="Mensaje"></textarea>
                                            </div>

                                            <button class="btn" id="boton" name="boton" type="submit">Enviar Mensaje</button>
                                        </form>
                                        <div>
                                        <?php echo @$result12; ?>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100077013474869" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/proyectomb.arq/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="mailto:micaelabrunacci@hotmail.com" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li>
                    
                </ul>
            </div>
        </div>
    </div>  

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>

    <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "541157413441", 
            email: "micaelabrunacci@hotmail.com", 
            call_to_action: "Contactanos!", 
            button_color: "#129BF4", 
            position: "right", 
            order: "whatsapp, email",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

  </body>
</html>