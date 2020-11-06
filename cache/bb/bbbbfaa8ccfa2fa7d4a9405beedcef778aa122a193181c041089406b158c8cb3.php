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
    <div class=\"container\">
        <div class=\"glider-contain\">
          <div class=\"glider\">
<!-- Boton de anterior -->
          <button aria-label=\"Previous\" class=\"glider-prev\">
            <i class=\"fas fa-chevron-circle-left\"></i>
          </button>
            <div class=\"lista__elementos\">
              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat lor</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
<!-- Boton de siguiente -->
          <button aria-label=\"Next\" class=\"glider-next\">
            <i class=\"fas fa-chevron-circle-right\"></i>
          </button>
<!-- pagination -->
          <div role=\"tablist\" class=\"dots\"></div>
    </div>

    </div>    


<!-- MODAL -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">

      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">%%nombreDelEvento%%</h5>
        
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>

      <div class=\"modal-body\">
      <form>
<!-- Identificacion -->
        <div class=\"row\">
          <div class=\"col-md-6 mb-3\">
            <label for=\"tipoIdentificacion\">tipo de indetificacion</label>
            <select id=\"inputState\" class=\"form-control\">
              <option selected>---</option>
              <option>opcion 1</option>
              <option>opcion 3</option>
              <option>opcion 4</option>
            </select>
          </div>
          <div class=\"col-md-6 mb-3\">
            <label for=\"identificacion\">identificacion</label>
            <input type=\"number\" class=\"form-control\" placeholder=\"identificacion\">
          </div>
        </div>

<!-- Nombres -->
        <div class=\"row\">
          <div class=\"col-md-6 mb-3\">
            <label for=\"primerNombre\">primer nombre</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"primer nombre\">
          </div>
          <div class=\"col-md-6 mb-3\">
            <label for=\"segunNombre\">segundo nombre</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"segundo nombre\">
          </div>
        </div>
<!-- Apellidos -->
        <div class=\"row\">
          <div class=\"col-md-6 mb-3\">
            <label for=\"primerApellido\">primer Apellido</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"primer apellido\">
          </div>
          <div class=\"col-md-6 mb-3\">
            <label for=\"segunApellido\">segundo Apellido</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"segundo apellido\">
          </div>
        </div>

<!-- Correo y Telefono -->
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"correEletronico\">correo eletronico</label>
              <input type=\"email\" class=\"form-control\" placeholder=\"correo eletronico\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"telefono\">telefono</label>
              <input type=\"number\" class=\"form-control\" placeholder=\"telefono\">
            </div>
        </div>
      </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\">Listo</button>
      </div>
    </div>
  </div>
</div>

";
    }

    // line 189
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 197
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");
    });
/* 
    \$('.card').hover(function(){
        if(\$(this).hasClass(\"active\")){
           \$('.card .bottom').slideUp(function(){
                \$('.card').removeClass(\"active\")
           });
        }else{
            \$('.card').addClass(\"active\")
            \$('.card .bottom').stop().slideDown();
        }
    }); */
      new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        dots: '.dots',
        arrows: {
          prev: '.glider-prev',
          next: '.glider-next'
        },
        responsive: [
    {
      // screens greater than >= 775px
      breakpoint: 411,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
       
      }
    }
  ]

     
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
        return array (  259 => 198,  255 => 197,  246 => 190,  242 => 189,  63 => 12,  59 => 11,  53 => 5,  49 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.php\" %}


{% block logo %}
<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\">                 
Aplicación CCSM
{% endblock %}

                  

{% block contenido %}

    <div class=\"container\">
        <div class=\"glider-contain\">
          <div class=\"glider\">
<!-- Boton de anterior -->
          <button aria-label=\"Previous\" class=\"glider-prev\">
            <i class=\"fas fa-chevron-circle-left\"></i>
          </button>
            <div class=\"lista__elementos\">
              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class=\"card\">
                  <div class=\"image\">
                      <img src=\"img/bird-feeder.jpg\" alt=\"imagen\" class=\"img-event\"> 
                  </div>

                  <div class=\"content\">
                      <div class=\"title\"> nombre del evento tattat lor</div>
                      <div class=\"bottom\">
                          <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
<!-- Boton de siguiente -->
          <button aria-label=\"Next\" class=\"glider-next\">
            <i class=\"fas fa-chevron-circle-right\"></i>
          </button>
<!-- pagination -->
          <div role=\"tablist\" class=\"dots\"></div>
    </div>

    </div>    


<!-- MODAL -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-lg\">
    <div class=\"modal-content\">

      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">%%nombreDelEvento%%</h5>
        
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>

      <div class=\"modal-body\">
      <form>
<!-- Identificacion -->
        <div class=\"row\">
          <div class=\"col-md-6 mb-3\">
            <label for=\"tipoIdentificacion\">tipo de indetificacion</label>
            <select id=\"inputState\" class=\"form-control\">
              <option selected>---</option>
              <option>opcion 1</option>
              <option>opcion 3</option>
              <option>opcion 4</option>
            </select>
          </div>
          <div class=\"col-md-6 mb-3\">
            <label for=\"identificacion\">identificacion</label>
            <input type=\"number\" class=\"form-control\" placeholder=\"identificacion\">
          </div>
        </div>

<!-- Nombres -->
        <div class=\"row\">
          <div class=\"col-md-6 mb-3\">
            <label for=\"primerNombre\">primer nombre</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"primer nombre\">
          </div>
          <div class=\"col-md-6 mb-3\">
            <label for=\"segunNombre\">segundo nombre</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"segundo nombre\">
          </div>
        </div>
<!-- Apellidos -->
        <div class=\"row\">
          <div class=\"col-md-6 mb-3\">
            <label for=\"primerApellido\">primer Apellido</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"primer apellido\">
          </div>
          <div class=\"col-md-6 mb-3\">
            <label for=\"segunApellido\">segundo Apellido</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"segundo apellido\">
          </div>
        </div>

<!-- Correo y Telefono -->
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"correEletronico\">correo eletronico</label>
              <input type=\"email\" class=\"form-control\" placeholder=\"correo eletronico\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"telefono\">telefono</label>
              <input type=\"number\" class=\"form-control\" placeholder=\"telefono\">
            </div>
        </div>
      </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\">Listo</button>
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
/* 
    \$('.card').hover(function(){
        if(\$(this).hasClass(\"active\")){
           \$('.card .bottom').slideUp(function(){
                \$('.card').removeClass(\"active\")
           });
        }else{
            \$('.card').addClass(\"active\")
            \$('.card .bottom').stop().slideDown();
        }
    }); */
      new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        dots: '.dots',
        arrows: {
          prev: '.glider-prev',
          next: '.glider-next'
        },
        responsive: [
    {
      // screens greater than >= 775px
      breakpoint: 411,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
       
      }
    }
  ]

     
});



 
</script>
{% endblock %}", "inicio.html.php", "C:\\laragon\\www\\formulario\\plantilla\\inicio.html.php");
    }
}
