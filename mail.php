<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>EJ Consultoria</title>
    <meta name="author" content="Gerardo Filho">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgba(158, 158, 158, 0.49)">

    <link rel="stylesheet" type="text/css" href="assets/src/slick-carrousel/slick/slick.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="assets/src/css/style.css">
    <link rel="stylesheet" href="assets/src/css/reset.css">

    <link rel="stylesheet" href="assets/src/css/components/header.css">
    <link rel="stylesheet" href="assets/src/css/components/navbar.css">
    <link rel="stylesheet" href="assets/src/css/components/footer.css">
    <link rel="stylesheet" href="assets/src/css/components/buttons.css">
    <link rel="stylesheet" href="assets/src/css/components/map.css">

    <link rel="stylesheet" href="assets/src/css/sections/about.css">
    <link rel="stylesheet" href="assets/src/css/sections/message-email.css">
    <link rel="stylesheet" href="assets/src/css/sections/contact.css">


    <link rel="stylesheet" href="assets/src/media/icons/css/font-awesome.min.css">

    <link rel="shortcut icon" href="icone.ico">
</head>

<body>

    <!-- Start Whatsapp Button-->
    <a class="whatsapp mobile" href="https://wa.me/5588996710713" target="_blank">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </a>
    <a class="whatsapp desktop" href="https://web.whatsapp.com/send?phone=5588996710713" target="_blank">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </a>
    <!-- End Whatsapp Button-->

    <div id="logo" class="logo-content">
        <a href="#top">
            <img src="assets/dist/media/images/logo.png" alt="EJ Consultoria Logo">
        </a>
    </div>

    <nav id="nav-menu">
        <div class="nav-icon-container">
            <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbarContainer">
            <ul class="nav-content nav-container">
                <li>
                    <a href="#top" class="hvr-bounce-to-top">Início</a>
                </li>
                <li>
                    <a href="#about" class="hvr-bounce-to-top">Quem Somos</a>
                </li>
                <li>
                    <a href="#service-box" class="hvr-bounce-to-top">Nossos Serviços</a>
                </li>
                <li>
                    <a href="#clientes" class="hvr-bounce-to-top">Nossos Clientes</a>
                </li>
                <li>
                    <a href="#contact" class="hvr-bounce-to-top">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

<?php

   $to         = 'comercial@ejconsultoria.com';
   $subject    = $_POST['subject'];
   $text       = $_POST['message'];
   $username   = $_POST['nome'];
   $name       = $_POST['nome_empresa'];
   $email      = $_POST['email'];

  $message = "<br />"
           . "<h3>Este e-mail foi enviado do site http://ejengenharia.com.br por: " . $username . "</h3>"
           . "<br /><br />"
           . "<strong>Nome:</strong> " . $name . "<br />"
           . "<strong>E-mail:</strong> " . $email . "<br />"
           . "<strong>Assunto:</strong> " . $subject . "<br />"
           . "<strong>Mensagem:</strong> " . $text . "<br />";
 
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'From: '.$email. "\r\n";
   $headers .= "To: $to\r\n";
   $headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";

   $status = False;

   if (mail($to, $subject, $message, $headers)) {

?>

    <section id="message-banner">
        <div class="container">
            <div class="content">
                <p>Obrigado pelo contato <?php $username ?>! Seu email foi enviado e responderemos assim que possível! </p>

                <a href="index.html" class="btn-primary">Voltar</a>
            </div>
        </div>

    </section>

    
<?php } else { ?>

   <section id="message-banner">
        <div class="container">
            <div class="content">
                <p>Ops! Houve um erro ao enviar sua mensagem, tente novamente! </p>

                <a href="index.html" class="btn-primary">Voltar</a>
            </div>
        </div>

    </section>

<?php }  ?>

<section id="contact" class="contact-back">
        <div class="contact-content">
            <form method="POST" action="mail.php">
                <h1>Contato</h1>

                <h5>"O que parece uma simples consulta, o tornará mais competitivo."</h5>

                <input class="input" type="text" name="nome" id="nome" placeholder="Nome completo">
                <input class="input" type="text" name="nome_empresa" id="nome_empresa"
                    placeholder="Nome de sua empresa">
                <input class="input" type="email" name="email" id="email" placeholder="Seu email">
                <input class="input" type="text" name="subject" id="subject" placeholder="Assunto da mensagem">
                <textarea class="input" name="message" id="message" rows="3"
                    placeholder="Digite aqui sua mensagem..."></textarea>

                <button class="btn-secondary left larg" type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">

            <div class="address">

                <a href="tel:88996710713">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i> (88) 9 96710713
                    <br>
                    <a href="https://www.instagram.com/ejconsultoriaoficial/" target="_blank"><i class="fa fa-instagram"
                            aria-hidden="true"></i> ejconsultoriaoficial </a>
                    <br>
                    <a href="mailto:comercial@ejconsultoria.com">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> comercial@ejconsultoria.com</a>
                    </p>
                    <span id="cnpj">CNPJ: 22.212.407/0001-15</span>
            </div>

        </div>

        <p><span></span></p>

    </footer>

    <script src="assets/src/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/src/slick-carrousel/slick/slick.min.js"></script>
    <script src="assets/src/js/navbar.js"></script>
    <script src="assets/src/js/carrousel.js"></script>
    <script src="assets/src/js/smooth-row.js"></script>
    <script src="assets/src/js/ScrollKeys.js"></script>

</body>

</html>