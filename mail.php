<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>EJ Engenharia Juridica</title>
    <meta name="author" content="Davi Cedraz">

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

    <header id="top">
        <div class="header-content header-container">
            <div>
                <a href="">
                    <img src="assets/src/media/images/logoColor.png" alt="EJ Engenharia Juridica Logo">
                </a>
            </div>

            <div class="header-info">
                <a href="#map">
                    <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                </a>

                <span class="pipe">|</span>
                <p>Fone/Fax (88) 9 9734-6789
                    <br> Morada Nova - Ceará
                    <br> Rua Damasceno Girão, nº 25, Centro
                </p>

            </div>
        </div>
    </header>

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
        <ul class="nav-content nav-container">
            <li>
                <a href="#top" class="hvr-bounce-to-top">Início</a>
            </li>
            <li>
                <a href="#about" class="hvr-bounce-to-top">Quem somos</a>
            </li>
            <li>
                <a href="#service-box" class="hvr-bounce-to-top">Nossos Serviços</a>
            </li>
            <li>
                <a href="engenharia.html" class="hvr-bounce-to-top">Projetos de Engenharia</a>
            </li>
            <li>
                <a href="clientes.html" class="hvr-bounce-to-top">Clientes</a>
            </li>
            <li>
                <a href="juridica.html" class="hvr-bounce-to-top">Segurança Jurídica</a>
            </li>
            <li>
                <a href="sustentabilidade.html" class="hvr-bounce-to-top">Sustentabilidade</a>
            </li>
            <li>
                <a href="#contact" class="hvr-bounce-to-top">Contato</a>
            </li>
        </ul>
    </nav>

<?php

   $to         = 'ej.engenhariajuridica@gmail.com';
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
                <h1>CONTATO</h1>

                <h5>"O que parece uma simples consulta, o tornará mais competitivo."</h5>

                <input class="input" type="text" name="nome" id="nome" placeholder="Nome completo">
                <input class="input" type="text" name="nome_empresa" id="nome_empresa" placeholder="Nome de sua empresa">
                <input class="input" type="email" name="email" id="email" placeholder="Seu email">
                <input class="input" type="text" name="subject" id="subject" placeholder="Assunto da mensagem">
                <textarea class="input" name="message" id="message" cols="30" rows="10" placeholder="Digite aqui sua mensagem..."></textarea>

                <button class="btn-secondary left larg" type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <section id="map">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d608.7762352143369!2d-38.37354007121604!3d-5.108446572814159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7bbe6cf620f291f%3A0xdb376d3724ae4428!2sR.+Damasceno+Gir%C3%A3o%2C+Morada+Nova+-+CE%2C+62940-000!5e0!3m2!1spt-BR!2sbr!4v1507342105725"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <footer>
        <div class="footer-content">

            <div class="address">
                <p>Rua Damasceno Girão, nº25, Sala B, Centro
                    <br> Morada Nova - Ceará, CEP: 629400-000
                    <br>
                    <a href="tel:88997346789">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i> (88) 9 97346789
                        <br>
                        <a href="mailto:ej.engenhariajuridica@gmail.com">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> ej.engenhariajuridica@gmail.com</a>
                </p>
            </div>

            <span class="pipe">|</span>

            <div class="address">
                <p>SGAN, nº 220, Módulo C, Bloco B, Asa Norte
                    <br> Brasília - Distrito Federal, CEP: 70790-123
                    <br>
                    <a href="tel:88999004005">Fone/Fax: (88) 9 99004005</a>
                    <br>

                </p>
            </div>

        </div>

        <span id="cnpj">CNPJ: 22.212.407/0001-15</span>

    </footer>

    <script src="assets/src/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/src/slick-carrousel/slick/slick.min.js"></script>
    <script src="assets/src/js/navbar.js"></script>
    <script src="assets/src/js/carrousel.js"></script>
    <script src="assets/src/js/smooth-row.js"></script>
    <script src="assets/src/js/ScrollKeys.js"></script>

</body>

</html>