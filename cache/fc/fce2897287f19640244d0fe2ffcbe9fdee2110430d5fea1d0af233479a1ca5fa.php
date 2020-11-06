<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.php */
class __TwigTemplate_77e8ef821621497a7984c98edf6f8791b6f22ba977379c0d05d7fb8523a5ebe2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'logo' => [$this, 'block_logo'],
            'contenido' => [$this, 'block_contenido'],
            'piecera' => [$this, 'block_piecera'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"es\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"apple-touch-icon\" href=\"favicon/apple-touch-icon.png\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"favicon/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"favicon/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"favicon/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"favicon/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"favicon/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"favicon/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"favicon/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"favicon/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"favicon/apple-icon-180x180.png\">

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"favicon/favicon-96x96.png\">        
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"favicon/android-icon-192x192.png\">

        <link rel=\"manifest\" href=\"manifest.json\">

        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"favicon/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <link rel=\"mask-icon\" href=\"favicon.svg\" color=\"#5bbad5\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Primary Meta Tags -->
        <title>";
        // line 39
        $this->displayBlock('title', $context, $blocks);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 39), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 39), "html", null, true);
        echo "</title>
        <meta name=\"title\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_DESCRIPCION", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
        <meta name=\"application-name\" content=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["nombreAplicacion"] ?? null), "html", null, true);
        echo "\">
        <meta name=\"robots\" content=\"index,follow\"><!-- All Search Engines -->
        <meta name=\"googlebot\" content=\"index,follow\"><!-- Google Specific -->

        <!-- Open Graph / Facebook -->
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
        <meta property=\"og:title\" content=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
        <meta property=\"og:description\" content=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_DESCRIPCION", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
        <meta property=\"og:image\" content=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 51), "html", null, true);
        echo "/favicon.png\">

        <!-- Twitter -->
        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
        <meta property=\"twitter:title\" content=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
        <meta property=\"twitter:description\" content=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_DESCRIPCION", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
        <meta property=\"twitter:image\" content=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 58), "html", null, true);
        echo "/favicon.png\">

        <link rel=\"stylesheet\" href=\"css/jquery-ui.min.css\">
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
       <!--  <link rel=\"stylesheet\" href=\"css/bootstrap-theme.min.css\">   -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome/all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fuente-ccsm.css\">

      <!--   <link rel=\"stylesheet\" href=\"css/animate.css\"> -->
        <link rel=\"stylesheet\" href=\"css/sweetalert2.min.css\">
        <link rel=\"stylesheet\" href=\"css/magic/magic.min.css\">

        ";
        // line 72
        $this->displayBlock('css', $context, $blocks);
        // line 73
        echo "
        <link rel=\"stylesheet\" href=\"css/main.css\"  media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/print.css\"  media=\"print\" >

        <!-- MIS ENLACES LINK-->
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">

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
    <body  class=\"bg-light\" >

        <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
            <a class=\"navbar-brand\" href=\"/\">
                ";
        // line 153
        $this->displayBlock('logo', $context, $blocks);
        // line 154
        echo "            </a>
        </nav>

      
            ";
        // line 158
        $this->displayBlock('contenido', $context, $blocks);
        // line 159
        echo "       
        <footer class=\"text-muted text-center text-small footer \">
            <p class=\"mb-1\">Cámara de Comercio de Santa Marta para el Magdalena &copy; ";
        // line 161
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            ";
        // line 162
        $this->displayBlock('piecera', $context, $blocks);
        // line 163
        echo "        </footer>

        <div class = \"loader no-print\" style = \"position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 99999; background-color: rgba(0,0,0,0.7);\" >
            <table align = \"center\" style = \"width: 100%; height: 100%;\">
                <td align = \"center\" valign = \"middle\" class = \"animated infinite flash pulse\" >
                    <img src = \"https://si.sicam32.net/plantillas/default/images/Logo-Blanco.png\" alt = \"\" style = \"max-width: 210px;\"/>
                </td>
            </table>
        </div>



        <script src=\"js/vendor/jquery-3.4.1.min.js\"></script>        
        <script src=\"js/vendor/jquery-ui.min.js\"></script>
        <!--<script src=\"js/vendor/jquery.mobile-1.4.5.min.js\"></script>-->
        <script src=\"js/vendor/popper.min.js\" ></script>
        <script src=\"js/vendor/bootstrap.min.js\" ></script>        
        <script src=\"js/vendor/sweetalert2.min.js\" ></script>
        <script src=\"js/vendor/wow.min.js\"></script>

        <script src=\"js/plugins.js\"></script>
        <script src=\"js/main.js\"></script>

        <!-- MIS ENLACES SCRIPT -->

        ";
        // line 188
        $this->displayBlock('js', $context, $blocks);
        // line 189
        echo "
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-ZBTLK22S7Q\"></script>
        <script type=\"text/javascript\" >
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-ZBTLK22S7Q');
        </script>

        <script type=\"text/javascript\">
            new WOW().init();
        </script>

    </body>
</html>
";
    }

    // line 39
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 72
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 153
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 158
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 162
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 188
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 188,  336 => 162,  330 => 158,  324 => 153,  318 => 72,  312 => 39,  288 => 189,  286 => 188,  259 => 163,  257 => 162,  253 => 161,  249 => 159,  247 => 158,  241 => 154,  239 => 153,  157 => 73,  155 => 72,  138 => 58,  134 => 57,  130 => 56,  126 => 55,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  98 => 42,  94 => 41,  90 => 40,  83 => 39,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"es\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"apple-touch-icon\" href=\"favicon/apple-touch-icon.png\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"favicon/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"favicon/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"favicon/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"favicon/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"favicon/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"favicon/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"favicon/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"favicon/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"favicon/apple-icon-180x180.png\">

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"favicon/favicon-96x96.png\">        
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"favicon/android-icon-192x192.png\">

        <link rel=\"manifest\" href=\"manifest.json\">

        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"favicon/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <link rel=\"mask-icon\" href=\"favicon.svg\" color=\"#5bbad5\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Primary Meta Tags -->
        <title>{% block title %}{% endblock %}{{Config.APP_TITULO}} - {{Config.APP_URL}}</title>
        <meta name=\"title\" content=\"{{Config.APP_TITULO}}\">
        <meta name=\"description\" content=\"{{Config.APP_DESCRIPCION}}\">
        <meta name=\"application-name\" content=\"{{nombreAplicacion}}\">
        <meta name=\"robots\" content=\"index,follow\"><!-- All Search Engines -->
        <meta name=\"googlebot\" content=\"index,follow\"><!-- Google Specific -->

        <!-- Open Graph / Facebook -->
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"{{Config.APP_URL}}\">
        <meta property=\"og:title\" content=\"{{Config.APP_TITULO}}\">
        <meta property=\"og:description\" content=\"{{Config.APP_DESCRIPCION}}\">
        <meta property=\"og:image\" content=\"{{Config.APP_URL}}/favicon.png\">

        <!-- Twitter -->
        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"{{Config.APP_URL}}\">
        <meta property=\"twitter:title\" content=\"{{Config.APP_TITULO}}\">
        <meta property=\"twitter:description\" content=\"{{Config.APP_DESCRIPCION}}\">
        <meta property=\"twitter:image\" content=\"{{Config.APP_URL}}/favicon.png\">

        <link rel=\"stylesheet\" href=\"css/jquery-ui.min.css\">
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
       <!--  <link rel=\"stylesheet\" href=\"css/bootstrap-theme.min.css\">   -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome/all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fuente-ccsm.css\">

      <!--   <link rel=\"stylesheet\" href=\"css/animate.css\"> -->
        <link rel=\"stylesheet\" href=\"css/sweetalert2.min.css\">
        <link rel=\"stylesheet\" href=\"css/magic/magic.min.css\">

        {% block css %}{% endblock %}

        <link rel=\"stylesheet\" href=\"css/main.css\"  media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/print.css\"  media=\"print\" >

        <!-- MIS ENLACES LINK-->
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">

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
    <body  class=\"bg-light\" >

        <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
            <a class=\"navbar-brand\" href=\"/\">
                {% block logo %}{% endblock %}
            </a>
        </nav>

      
            {% block contenido %}{% endblock %}
       
        <footer class=\"text-muted text-center text-small footer \">
            <p class=\"mb-1\">Cámara de Comercio de Santa Marta para el Magdalena &copy; {{ \"now\"|date(\"Y\") }}</p>
            {% block piecera %}{% endblock %}
        </footer>

        <div class = \"loader no-print\" style = \"position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 99999; background-color: rgba(0,0,0,0.7);\" >
            <table align = \"center\" style = \"width: 100%; height: 100%;\">
                <td align = \"center\" valign = \"middle\" class = \"animated infinite flash pulse\" >
                    <img src = \"https://si.sicam32.net/plantillas/default/images/Logo-Blanco.png\" alt = \"\" style = \"max-width: 210px;\"/>
                </td>
            </table>
        </div>



        <script src=\"js/vendor/jquery-3.4.1.min.js\"></script>        
        <script src=\"js/vendor/jquery-ui.min.js\"></script>
        <!--<script src=\"js/vendor/jquery.mobile-1.4.5.min.js\"></script>-->
        <script src=\"js/vendor/popper.min.js\" ></script>
        <script src=\"js/vendor/bootstrap.min.js\" ></script>        
        <script src=\"js/vendor/sweetalert2.min.js\" ></script>
        <script src=\"js/vendor/wow.min.js\"></script>

        <script src=\"js/plugins.js\"></script>
        <script src=\"js/main.js\"></script>

        <!-- MIS ENLACES SCRIPT -->

        {% block js%}{% endblock %}

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-ZBTLK22S7Q\"></script>
        <script type=\"text/javascript\" >
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-ZBTLK22S7Q');
        </script>

        <script type=\"text/javascript\">
            new WOW().init();
        </script>

    </body>
</html>
", "base.html.php", "C:\\laragon\\www\\formulario\\plantilla\\base.html.php");
    }
}
