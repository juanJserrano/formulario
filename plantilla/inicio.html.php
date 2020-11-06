{% extends "base.html.php" %}

{% block logo %}
<img src="img/logo.png" width="30" height="30" alt="" class="logo">Aplicación CCSM           
{% endblock %}
                 
{% block contenido %}


<div class="jumbotron wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
    <div class="container">

      <h1 class="animate__animated animate__pulse animate__duraction">Lista de eventos</h1>
        <div class="carousel">
            <div class="carousel__contenedor">
        <!-- boton anterior -->
                <button aria-label="Anterior" class="carousel__anterior">
                    <i class="fas fa-chevron-left"></i>
                </button>
            <!-- Elemento del carousel -->
                    <div class="carousel__lista">

                        <div class="carousel__elemento">
                            <div class="image">
                             <img src="img/ballon.jpg"   alt="Imgen del evento" class="img-evento" >
                            </div>
                            <div class="contenido">   
                                <p>%% nombreDelEvento lorem%%</p>                            
                                <button class="btn btn-primary registro" data-toggle="modal" data-target="#staticBackdrop">
                                    registrarme
                                </button>
                            </div>
                        </div>

                        <div class="carousel__elemento">
                            <div class="image">
                             <img src="img/christmas-table.jpg"   alt="Imgen del evento" class="img-evento" >
                            </div>
                            <div class="contenido">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class="btn btn-primary registro" data-toggle="modal" data-target="#staticBackdrop">
                                    registrarme
                                </button>
                            </div>
                        </div>

                        <div class="carousel__elemento">
                            <div class="image">
                             <img src="img/exclusive-banquet.jpg"   alt="Imgen del evento" class="img-evento" >
                            </div>
                            <div class="contenido">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class="btn btn-primary registro" data-toggle="modal" data-target="#staticBackdrop">
                                    registrarme
                                </button>
                            </div>
                        </div>

                        <div class="carousel__elemento">
                            <div class="image">
                             <img src="img/live-concert.jpg"   alt="Imgen del evento" class="img-evento" >
                            </div>
                            <div class="contenido">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class="btn btn-primary registro" data-toggle="modal" data-target="#staticBackdrop">
                                    registrarme
                                </button>
                            </div>
                        </div>

                        <div class="carousel__elemento">
                            <div class="image">
                             <img src="img/planner.jpg"   alt="Imgen del evento" class="img-evento" >
                            </div>
                            <div class="contenido">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class="btn btn-primary registro" data-toggle="modal" data-target="#staticBackdrop">
                                    registrarme
                                </button>                            
                            </div>
                        </div>

                        <div class="carousel__elemento">
                            <div class="image">
                             <img src="img/wedding-reception.jpg"   alt="Imgen del evento" class="img-evento" >
                            </div>
                            <div class="contenido">   
                                <p>%% nombreDelEvento %%</p>                            
                                <button class="btn btn-primary registro" data-toggle="modal" data-target="#staticBackdrop">
                                    registrarme
                                </button>
                            </div>
                        </div>
                    </div>

            <!-- boton siguiente -->      
                            <button aria-label="Siguiente" class="carousel__siguiente">
                            <i class="fas fa-chevron-right"></i>
                            </button>
            <!-- pagination -->    
            <div role="tablist" class="carousel__indicadores"></div> 
            </div>
        </div>
        

        
<!-- Modal -->

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">
                %%Nombre del evento%%
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <form>
            <!-- IDENTIFICACION -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputTipoIdentificacion">TIPO DE IDENTIFICACION*</label>
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected>----</option>
                            <option value="1">OPCION 1</option>
                            <option value="2">OPCION 2</option>
                            <option value="3">OPCION 3</option>
                            <option value="4">OPCION 4</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="inputIdentificacion">IDENTIFICACION*</label>
                        <input type="text" class="form-control" placeholder="IDENTIFICACION">
                    </div>
                </div>

            <!-- NOMBRE,APELLIDO-->
            <div class="row">
                    <div class="col-md-6 ">
                        <label for="inputPrimerNombre">PRIMER NOMBRE*</label>
                        <input type="text" class="form-control" placeholder="PRIMER NOMBRE">
                    </div>

                    <div class="col-md-6 ">
                        <label for="inputSegundoNombre">SEGUNDO NOMBRE*</label>
                        <input type="text" class="form-control" placeholder="SEGUNDO NOMBRE">
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-6 ">
                        <label for="inputPrimerApellido">PRIMER APELLIDO*</label>
                        <input type="text" class="form-control" placeholder="PRIMER APELLIDO">
                    </div>

                    <div class="col-md-6 ">
                        <label for="inputSegundoApellido">SEGUNDO APELLIDO*</label>
                        <input type="text" class="form-control" placeholder="SEGUNDO APELLIDO">
                    </div>
            </div>

            <!-- CORREO ELTRONICO, TELEFONO -->
            <div class="row">
                    <div class="col-md-6">
                        <label for="inputCorreoEletronico">CORREO ELETRONICO*</label>
                        <input type="text" class="form-control" placeholder="CORREO ELETRONICO">
                    </div>

                    <div class="col-md-6">
                        <label for="inputNumeroCelular">NUMERO CELULAR*</label>
                        <input type="text" class="form-control" placeholder="NUMERO CELULAR">
                    </div>
            </div>
            
            
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Listo</button>
        </div>
        </div>

    </div>

    

</div>

{% endblock %}

{% block piecera %}
<ul class = "list-inline">
    <li class = "list-inline-item"><a href = "https://www.ccsm.org.co">CamComercioSM</a></li>
    <li class = "list-inline-item"><a href = "#">Terminos y Condiciones</a></li>
    <li class = "list-inline-item"><a href = "https://pqrs.ccsm.org.co">Contactanos</a></li>
</ul>
{% endblock %}

{% block js%}
<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista("formulario-muestra", "formulario", "nuevo");
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
{% endblock %}