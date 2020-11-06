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

    // line 3
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\" class=\"logo\">Aplicación CCSM           
";
    }

    // line 7
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "

<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">

    <h1 class=\"animate__animated animate__pulse animate__duraction\">Lista de eventos</h1>
        <div class=\"carousel\">
            <div class=\"carousel__contenedor\">
        <!-- boton anterior -->
                <button aria-label=\"Anterior\" class=\"carousel__anterior\">
                    <i class=\"fas fa-chevron-left\"></i>
                </button>
            <!-- Elemento del carousel -->
                    <div class=\"carousel__lista\">

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>
                    </div>

            <!-- boton siguiente -->      
                            <button aria-label=\"Siguiente\" class=\"carousel__siguiente\">
                            <i class=\"fas fa-chevron-right\"></i>
                            </button>
            <!-- pagination -->    
            <div role=\"tablist\" class=\"carousel__indicadores\"></div> 
            </div>
        </div>
        

        
<!-- Modal -->

    <div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" >
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">
                %%Nombre del evento%%
            </h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>

        <div class=\"modal-body\">

            <form>
            <!-- IDENTIFICACION -->
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3 ml-auto\">
                        <label for=\"inputTipoIdentificacion\">TIPO DE IDENTIFICACION*</label>
                        <select class=\"custom-select\" id=\"inputGroupSelect02\">
                            <option selected>----</option>
                            <option value=\"1\">OPCION 1</option>
                            <option value=\"2\">OPCION 2</option>
                            <option value=\"3\">OPCION 3</option>
                            <option value=\"4\">OPCION 4</option>
                        </select>
                    </div>

                    <div class=\"col-md-6 mb-3 ml-auto\">
                        <label for=\"inputIdentificacion\">IDENTIFICACION*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"IDENTIFICACION\">
                    </div>
                </div>

            <!-- NOMBRE,APELLIDO-->
            <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputPrimerNombre\">PRIMER NOMBRE*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"PRIMER NOMBRE\">
                    </div>

                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputSegundoNombre\">SEGUNDO NOMBRE*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"SEGUNDO NOMBRE\">
                    </div>
            </div>

            <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputPrimerApellido\">PRIMER APELLIDO*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"PRIMER APELLIDO\">
                    </div>

                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputSegundoApellido\">SEGUNDO APELLIDO*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"SEGUNDO APELLIDO\">
                    </div>
            </div>

            <!-- CORREO ELTRONICO, TELEFONO -->
            <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputCorreoEletronico\">CORREO ELETRONICO*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"CORREO ELETRONICO\">
                    </div>

                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputNumeroCelular\">NUMERO CELULAR*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"NUMERO CELULAR\">
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

    // line 186
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 194
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");
    });

    new Glider(document.querySelector('.carousel__lista'), {
  slidesToShow: 1,
  slidesToScroll:1,
  draggable: true,
  dots: '.carousel__indicadores',
  arrows: {
    prev: '.carousel__anterior',
    next: '.carousel__siguiente'
  },
   responsive: [
    {
      // screens greater than >= 775px
      breakpoint: 409,
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
        return array (  259 => 195,  255 => 194,  246 => 187,  242 => 186,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.php\" %}

{% block logo %}
<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\" class=\"logo\">Aplicación CCSM           
{% endblock %}
                 
{% block contenido %}


<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">

    <h1 class=\"animate__animated animate__pulse animate__duraction\">Lista de eventos</h1>
        <div class=\"carousel\">
            <div class=\"carousel__contenedor\">
        <!-- boton anterior -->
                <button aria-label=\"Anterior\" class=\"carousel__anterior\">
                    <i class=\"fas fa-chevron-left\"></i>
                </button>
            <!-- Elemento del carousel -->
                    <div class=\"carousel__lista\">

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>

                        <div class=\"carousel__elemento\">
                            <div class=\"image\">
                             <img src=\"img/img/ballon.jpg\"   alt=\"Imgen del evento\" class=\"img-evento\" >
                            </div>
                            <div class=\"contenido\">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Registrarme</button>
                            </div>
                        </div>
                    </div>

            <!-- boton siguiente -->      
                            <button aria-label=\"Siguiente\" class=\"carousel__siguiente\">
                            <i class=\"fas fa-chevron-right\"></i>
                            </button>
            <!-- pagination -->    
            <div role=\"tablist\" class=\"carousel__indicadores\"></div> 
            </div>
        </div>
        

        
<!-- Modal -->

    <div class=\"modal fade\" id=\"staticBackdrop\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" >
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">
                %%Nombre del evento%%
            </h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>

        <div class=\"modal-body\">

            <form>
            <!-- IDENTIFICACION -->
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3 ml-auto\">
                        <label for=\"inputTipoIdentificacion\">TIPO DE IDENTIFICACION*</label>
                        <select class=\"custom-select\" id=\"inputGroupSelect02\">
                            <option selected>----</option>
                            <option value=\"1\">OPCION 1</option>
                            <option value=\"2\">OPCION 2</option>
                            <option value=\"3\">OPCION 3</option>
                            <option value=\"4\">OPCION 4</option>
                        </select>
                    </div>

                    <div class=\"col-md-6 mb-3 ml-auto\">
                        <label for=\"inputIdentificacion\">IDENTIFICACION*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"IDENTIFICACION\">
                    </div>
                </div>

            <!-- NOMBRE,APELLIDO-->
            <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputPrimerNombre\">PRIMER NOMBRE*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"PRIMER NOMBRE\">
                    </div>

                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputSegundoNombre\">SEGUNDO NOMBRE*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"SEGUNDO NOMBRE\">
                    </div>
            </div>

            <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputPrimerApellido\">PRIMER APELLIDO*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"PRIMER APELLIDO\">
                    </div>

                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputSegundoApellido\">SEGUNDO APELLIDO*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"SEGUNDO APELLIDO\">
                    </div>
            </div>

            <!-- CORREO ELTRONICO, TELEFONO -->
            <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputCorreoEletronico\">CORREO ELETRONICO*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"CORREO ELETRONICO\">
                    </div>

                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputNumeroCelular\">NUMERO CELULAR*</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"NUMERO CELULAR\">
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

    new Glider(document.querySelector('.carousel__lista'), {
  slidesToShow: 1,
  slidesToScroll:1,
  draggable: true,
  dots: '.carousel__indicadores',
  arrows: {
    prev: '.carousel__anterior',
    next: '.carousel__siguiente'
  },
   responsive: [
    {
      // screens greater than >= 775px
      breakpoint: 409,
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
