<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">

        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">        
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">

        <link rel="manifest" href="manifest.json">

        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="mask-icon" href="favicon.svg" color="#5bbad5">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Primary Meta Tags -->
        <title>{% block title %}{% endblock %}{{Config.APP_TITULO}} - {{Config.APP_URL}}</title>
        <meta name="title" content="{{Config.APP_TITULO}}">
        <meta name="description" content="{{Config.APP_DESCRIPCION}}">
        <meta name="application-name" content="{{nombreAplicacion}}">
        <meta name="robots" content="index,follow"><!-- All Search Engines -->
        <meta name="googlebot" content="index,follow"><!-- Google Specific -->

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{Config.APP_URL}}">
        <meta property="og:title" content="{{Config.APP_TITULO}}">
        <meta property="og:description" content="{{Config.APP_DESCRIPCION}}">
        <meta property="og:image" content="{{Config.APP_URL}}/favicon.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{Config.APP_URL}}">
        <meta property="twitter:title" content="{{Config.APP_TITULO}}">
        <meta property="twitter:description" content="{{Config.APP_DESCRIPCION}}">
        <meta property="twitter:image" content="{{Config.APP_URL}}/favicon.png">

        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
       <!--  <link rel="stylesheet" href="css/bootstrap-theme.min.css">   -->

        <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/fuente-ccsm.css">

      <!--   <link rel="stylesheet" href="css/animate.css"> -->
        <link rel="stylesheet" href="css/sweetalert2.min.css">
        <link rel="stylesheet" href="css/magic/magic.min.css">

        {% block css %}{% endblock %}

        <link rel="stylesheet" href="css/main.css"  media="screen" >
        <link rel="stylesheet" href="css/print.css"  media="print" >

        <!-- MIS ENLACES LINK-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Roboto', sans-serif;
        }
        html,body{
            height:100%;
        }
        body{
            display:grid;
            place-items:center;
            background:red;
        }
        .card{
            position:relative;
            height:470px;
            width:340px;
            display:block;
            background:white;
            transition:0.3s;
        }
        .card:hover{
            box-shadow:0px 1px 35px 0px rgba(0,0,0,0.3);
        }
        .card.active .image .img-event{
            opacity:0.6;
            transform:scale(1.1)
        }
        .card .image{
            background:black;
            height:400px;
            overflow:hidden;
            
        }
        .image .img-event{
            height:100%;
            width:100%;
            transition:1s;
        }

        .card .content{
            position:absolute;
            bottom:0;
            background:white;
            width: 100%;
            text-align: center;
            padding:10px 15px; 
           
        }
        .content .title{
            font-size:24px;
            font-weight:600px;
            color:#e74c3c;
            margin-bottom:15px 
        }
        .bottom button{
            transition:0.3s ease;
        }
        .bottom button:hover{
            transform:scale(0.9);
        }
        .bottom{
            display:none;
        }
        
    </style>
    </head>
    <body  class="bg-light" >

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">
                {% block logo %}{% endblock %}
            </a>
        </nav>

      
            {% block contenido %}{% endblock %}
       
        <footer class="text-muted text-center text-small footer ">
            <p class="mb-1">Cámara de Comercio de Santa Marta para el Magdalena &copy; {{ "now"|date("Y") }}</p>
            {% block piecera %}{% endblock %}
        </footer>

        <div class = "loader no-print" style = "position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 99999; background-color: rgba(0,0,0,0.7);" >
            <table align = "center" style = "width: 100%; height: 100%;">
                <td align = "center" valign = "middle" class = "animated infinite flash pulse" >
                    <img src = "https://si.sicam32.net/plantillas/default/images/Logo-Blanco.png" alt = "" style = "max-width: 210px;"/>
                </td>
            </table>
        </div>



        <script src="js/vendor/jquery-3.4.1.min.js"></script>        
        <script src="js/vendor/jquery-ui.min.js"></script>
        <!--<script src="js/vendor/jquery.mobile-1.4.5.min.js"></script>-->
        <script src="js/vendor/popper.min.js" ></script>
        <script src="js/vendor/bootstrap.min.js" ></script>        
        <script src="js/vendor/sweetalert2.min.js" ></script>
        <script src="js/vendor/wow.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- MIS ENLACES SCRIPT -->

        {% block js%}{% endblock %}

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZBTLK22S7Q"></script>
        <script type="text/javascript" >
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-ZBTLK22S7Q');
        </script>

        <script type="text/javascript">
            new WOW().init();
        </script>

    </body>
</html>
