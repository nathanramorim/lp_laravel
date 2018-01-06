<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title>Landing Page | Obrigado!</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">
    <meta name="language" content="pt-br">
    <meta name="url" content="">
    <meta name="doc-class" content="completed">
    <meta name="doc-rights" content="public">
    <meta name="autor" content="">
    <meta name="company" content="">
    <meta name="revisit-after" content="1">
    <link rev="made" href="mailto:nathan.ramorim@gmail.com">
    <link rel="canonical" href="">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery.correios.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/lpbootstrap.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    

    <!-- Medias -->
    <link href="css/media-geral.css" rel="stylesheet">
    <link href="css/media-xsss.css" rel="stylesheet">
    <link href="css/media-xss.css" rel="stylesheet">
    <link href="css/media-xs.css" rel="stylesheet">
    <link href="css/media-sm.css" rel="stylesheet">
    <link href="css/media-md.css" rel="stylesheet">
    <link href="css/media-mdd.css" rel="stylesheet">
    <link href="css/media-lg.css" rel="stylesheet">
    <link href="css/media-xl.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,700i" rel="stylesheet">

    <script>
        function hideAddressBar()
        {
            if(!window.location.hash)
            {
                if(document.height < window.outerHeight)
                {
                    document.body.style.height = (window.outerHeight + 50) + 'px';
                }

                setTimeout( function(){ window.scrollTo(0, 1); }, 50 );
            }
        }

        window.addEventListener("load", function(){ if(!window.pageYOffset){ hideAddressBar(); } } );
        window.addEventListener("orientationchange", hideAddressBar );
    </script>
</head>
<body>

<!-- CARREGA TODAS AS IMAGENS DE UMA ÚNICA VEZ -->
<div class="d-none">
    <img src="img/favicon.png">
    <img src="img/favicon.png">
    <img src="img/bg_fundo_xl.jpg">
    <img src="img/bg_fundo_lg.jpg">
    <img src="img/bg_fundo_md.jpg">
    <img src="img/bg_fundo_mdd.jpg">
    <img src="img/bg_fundo_xs.jpg">
    <img src="img/bg_fundo_xss.jpg">
</div>

<!-- LP -->
<!-- CONTEUDO COMPLETO -->
<section class="container-fluid dobra-a">
    <!-- DOBRA 1 -->
    <div class="row">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-3 col-lg-3 col-xl-3"></div>

        <!-- CONTEUDO -->
        <div class="col-xs-12 col-sm-12 col-mdd-9 col-lg-9 col-xl-9 text-right-mobile">
            <img src="img/tkp_obrigado.png" class="img-custom img-fluid" alt="">
        </div>
    </div>
    <!-- FINALIZA DOBRA 1 -->
    <div class="respiro-dobra-a"></div>

</section>
</body>
</html>