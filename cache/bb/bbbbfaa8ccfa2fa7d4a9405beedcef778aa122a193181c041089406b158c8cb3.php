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

/* inicio.html.php */
class __TwigTemplate_5ea954e3a1d9adffa46c001e48ea0f741f4f333c4cd9e65afe89cc1ee03e98f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'logo' => [$this, 'block_logo'],
            'contenido' => [$this, 'block_contenido'],
            'piecera' => [$this, 'block_piecera'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.php", "inicio.html.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\">                 
Aplicación CCSM
";
    }

    // line 11
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"image\">
                 <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
            </div>

            <div class=\"content\">
                <div class=\"title\"> nombre del evento</div>
                <div class=\"bottom\">
                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                </div>
            </div>
        </div>
    </div>    
</div>


<!-- MODAL -->
<!-- Modal -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Understood</button>
      </div>
    </div>
  </div>
</div>

";
    }

    // line 55
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 63
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");
    });

    \$('.card').hover(function(){
        if(\$(this).hasClass(\"active\")){
           \$('.card .bottom').slideUp(function(){
                \$('.card').removeClass(\"active\")
           });
        }else{
            \$('.card').addClass(\"active\")
            \$('.card .bottom').stop().slideDown();
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "inicio.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 64,  121 => 63,  112 => 56,  108 => 55,  63 => 12,  59 => 11,  53 => 5,  49 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.php\" %}


{% block logo %}
<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\">                 
Aplicación CCSM
{% endblock %}

                  

{% block contenido %}

<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"image\">
                 <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
            </div>

            <div class=\"content\">
                <div class=\"title\"> nombre del evento</div>
                <div class=\"bottom\">
                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                </div>
            </div>
        </div>
    </div>    
</div>


<!-- MODAL -->
<!-- Modal -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Understood</button>
      </div>
    </div>
  </div>
</div>

{% endblock %}

{% block piecera %}
<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
{% endblock %}

{% block js%}
<script type=\"text/javascript\">
    \$(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");
    });

    \$('.card').hover(function(){
        if(\$(this).hasClass(\"active\")){
           \$('.card .bottom').slideUp(function(){
                \$('.card').removeClass(\"active\")
           });
        }else{
            \$('.card').addClass(\"active\")
            \$('.card .bottom').stop().slideDown();
        }
    });
</script>
{% endblock %}", "inicio.html.php", "C:\\laragon\\www\\formulario\\plantilla\\inicio.html.php");
    }
}
