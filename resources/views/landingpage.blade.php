<?php

$btninscrevase = "RECEBA!";
$btnaguarde = "ENVIANDO...";
$topoformulario = "Preencha o formulário!";
$btnregulamento = "REGULAMENTO.PDF";

?>
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

    <title>Landing Page</title>
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
</div>

<!-- LP -->
<!-- FORMULÁRIO -->
<div class="box" id="form-box">
    <button class="btn btn-sm btn-close"><i class="fa fa-close fa-fw"></i></button>
    <p class="text-uppercase">{{$topoformulario}}</p>
    {{ Form::open(['url' => '/usuarios/cadastrar', 'id' => 'addCommentForm']) }}
        <div class="form-group">
            {{ Form::text('NomeCompleto','', ['placeholder' => 'Nome:', 'class' => 'form-control', 'required' => 'true']) }}
        </div>
        <div class="form-group">
            {{ Form::email('Email','', ['placeholder' => 'E-mail:', 'class' => 'form-control', 'required' => 'true']) }}
        </div>
        <div class="form-group">
            {{ Form::text('Telefone','', ['placeholder' => 'Telefone:', 'class' => 'form-control', 'required' => 'true', 'id' => 'celular']) }}
        </div>
        <div class="form-group">
            {{ Form::text('cep','', ['placeholder' => 'CEP:', 'class' => 'form-control', 'required' => 'true', 'id' => 'cep']) }}
        </div>
        <div class="form-group">
            {{ Form::text('endereco','', ['placeholder' => 'Endereço:', 'class' => 'form-control', 'required' => 'true', 'id' => 'endereco']) }}
        </div>
        <div class="form-group">
            {{ Form::text('bairro','', ['placeholder' => 'Bairro:', 'class' => 'form-control', 'required' => 'true', 'id' => 'bairro']) }}
        </div>
        <div class="form-group">
            {{ Form::text('cidade','', ['placeholder' => 'Cidade:', 'class' => 'form-control', 'required' => 'true', 'id' => 'cidade']) }}
        </div>
        <div class="form-group">
            {{ Form::text('uf','', ['placeholder' => 'UF:', 'class' => 'form-control', 'required' => 'true', 'id' => 'uf']) }}
        </div>
        <div class="form-group">
            {{ Form::select('sexo', [
                    'Selecione' => 'Sexo',
                    'Masculino' => 'Masculino',
                    'Feminino' => 'Feminino'
                ],null, ['class' => 'form-control', 'required' => 'true'])  }}
        </div>
        
        <div class="form-group">
            <button id="submit" class="btn btn-success d-block mx-auto col-md-12" aria-pressed="true">
                <span id="inscreva">{{$btninscrevase}}</span>
                <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i> {{$btnaguarde}}</span>
            </button>
        </div>
    {{ Form::close() }}
</div>

<!-- EFEITO DE FUNDO PARA FORMULÁRIO MOBILE -->
<div class="efeito" id="eft"></div>

<!-- CONTEUDO COMPLETO -->
<section class="container-fluid dobra-a">
    <!-- DOBRA 1 -->
    <div class="row">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-3 col-lg-3 col-xl-3"></div>

        <!-- CONTEUDO -->
        <div class="col-xs-12 col-sm-12 col-mdd-9 col-lg-9 col-xl-9 text-right-mobile" id="btn-formulario-a">
            <img src="img/conteudo_a.png" class="img-custom img-fluid" alt="">
        </div>
    </div>

    <!-- BOTÃO QUE ABRE O FORMULÁRIO NO MOBILE -->
    <div class="btn-formulario-display d-none">
        <button class="btn btn-success btn-lg d-block mx-auto" id="btn-formulario-a">{{$btninscrevase}}</button>
    </div>

    <!-- FINALIZA DOBRA 1 -->
    <div class="respiro-dobra-a"></div>


    
</section>

<script src="js/jquery.mask.js"></script>
<script>
    jQuery(function($){
        correios.init( 'qYI7fejY5EK1PaWXHfPpcngO3KFdHdbS', '7mvPFUgv0gfB63bFDnm7ZLIgvKUQCCb5AE4OYP48tL5SL87R' );
        $('#cep').correios( '#endereco', '#bairro', '#cidade', '#uf' );
    });

    $(document).ready(function () {
        $("#cpf").mask("999.999.999-99");
        $("#celular").mask("(99) 9999-999999");
        $('#cep').mask("99.999-999");
    });
    
    $(".efeito").hide();
    $("#form-box").hide();
    $("#btn-formulario-a,#btn-formulario-b").click(function () {
        $("#form-box").show();
        $(".efeito").show();
    });

    $(".btn-close").click(function () {
        $("#form-box").hide();
        $(".efeito").hide();
    });

    $("#eft").click(function () {
        $("#form-box").hide();
        $(".efeito").hide();
    });

    $("#aguarde").hide();

    $('form').submit(function () {
        var vemail = $("#myEmail").val();
        var delay = 100;
        $("#submit").attr("disabled", "disabled");
        $("#aguarde").show();
        $("#inscreva").hide();
        $.ajax({
            url: "usuarios/cadastrar",
            type: "POST",
            data: $("#addCommentForm").serializeArray(),
            async: true,
            success: function (html) {
                setTimeout(function () {
                    if (html == 1) {
                        document.location = 'obrigado';
                    }
                }, delay);
            }
        });
        return false;
    });
  
</script>
</body>
</html>