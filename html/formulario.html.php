<div class="jumbotron wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
        <h2><strong>Lista de eventos</strong></h2>
        <hr>
    <div class="container">
        <div class="carousel" style="display:none" >
            
        
            <!-- Elemento del carousel -->
                    <div class="carousel__lista" id="carouseleventos">
                       
                    </div>
            <!-- boton anterior -->
                            <button aria-label="Anterior" class="carousel__anterior" id="glider">
                                <i class="fas fa-chevron-circle-left"></i>                
                            </button>
            <!-- boton siguiente -->      
                            <button aria-label="Siguiente" class="carousel__siguiente" id="glider">
                                <i class="fas fa-chevron-circle-right"></i>          
                            </button>
            <!-- pagination -->    
            <div role="tablist" class="carousel__indicadores"></div> 
 
        </div>
        

        
<!-- Modal -->

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title tituloEvento" id="staticBackdropLabel">
                
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <form  id="formularioInscripcion" >
            <!-- IDENTIFICACION -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputTipoIdentificacion">TIPO DE IDENTIFICACION*</label>
                        <select class="custom-select" name="personaTIPOIDENTIFICACION" id="personaTIPOIDENTIFICACION" required>
                            <option selected value="">Tipo identificación</option>
                            
                           
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="inputIdentificacion">IDENTIFICACION*</label>
                        <input type="text" class="form-control" placeholder="IDENTIFICACION" name="personaIDENTIFICACION"id="IDENTIFICACION" required>
                    </div>
                </div>

            <!-- NOMBRE,APELLIDO-->
            <div class="row">
                    <div class="col-md-6 ">
                        <label for="inputPrimerNombre">PRIMER NOMBRE*</label>
                        <input type="text" class="form-control" placeholder="PRIMER NOMBRE" name="personaPRIMERNOMBRE" id="PRIMERNOMBRE" required>
                    </div>

                    <div class="col-md-6 ">
                        <label for="inputSegundoNombre">SEGUNDO NOMBRE</label>
                        <input type="text" class="form-control" placeholder="SEGUNDO NOMBRE" name="personaSEGUNDONOMBRE" id="SEGUNDONOMBRE">
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-6 ">
                        <label for="inputPrimerApellido">PRIMER APELLIDO*</label>
                        <input type="text" class="form-control" placeholder="PRIMER APELLIDO" name="personaPRIMERAPELLIDO" id="PRIMERAPELLIDO" required>
                    </div>

                    <div class="col-md-6 ">
                        <label for="inputSegundoApellido">SEGUNDO APELLIDO*</label>
                        <input type="text" class="form-control" placeholder="SEGUNDO APELLIDO" name="segundoAPELLIDO" id="SEGUNDOAPELLIDO" required>
                    </div>
            </div>

            <!-- CORREO ELTRONICO, TELEFONO -->
            <div class="row">
                    <div class="col-md-12">
                        <label for="inputCorreoEletronico">CORREO ELETRONICO*</label>
                        <input type="email" class="form-control" placeholder="CORREO ELETRONICO" name="personaCORREOELETRONICO" id="CORREOELETRONICO" required>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-12">
                        <label for="inputNumeroCelular">NUMERO CELULAR*</label>
                        <input type="number" class="form-control" placeholder="NUMERO CELULAR" name="personaNUMEROCELULAR" id="NUMEROCELULAR" required>
                    </div>
            </div>
            
            <input type="hidden" name="eventoID" value="" id="eventoID">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="enviarInscripcion" >Listo</button>
        </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        

        
    new Glider(document.querySelector('.carousel__lista'), {
    slidesToShow: 1,
    slidesToScroll:1,
    resizeLock:true,
    scrollLock: true,
    rewind:true,
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

    $("#enviarInscripcion").click(function(){
        console.log($("#formularioInscripcion").serialize());
        ejecutarOperacionSICAM("/tienda-apps/AppInscripcionAEventos/guardar/",$("#formularioInscripcion").serialize(), function(respuesta){
            console.log(respuesta);
        }); 
        
    });
    setTimeout(
     function() 
     {
        ejecutarOperacionSinValidarSICAM("/tienda-apps/AppInscripcionAEventos/datosFormulario/",null, function(respuesta){
            console.log(respuesta);
            if(respuesta.DATOS){ 
                agregarEventos(respuesta.DATOS.Eventos)
                agregarTipoIdentificacion(respuesta.DATOS.TiposIdentificaciones);
            }
        }); 
     }, 500);
    
    });
    


    
                            
                              
                                                            
                                
                                    
                               
                            
                        

    function agregarEventos(eventos){
        $(".carousel").slideDown();
        eventos.forEach(evento=>{ 
            let html="<div class='carousel__elemento'> <div class='image'>";
            html += " <img src='img/live-concert.jpg'   alt='Imgen del evento' class='img-evento' ></div><div class='contenido'> ";
            html += " <p>"+evento.eventoTITULO +"</p>";
            html += "<button class='btn btn-primary registro' onClick='eventoSeleccionado("+evento.eventoID+",\""+evento.eventoTITULO+"\")' data-toggle='modal' data-target='#staticBackdrop'>Registrate </button></div></div>";
            $("#carouseleventos").append(html);
        });
        
    }

    function agregarTipoIdentificacion(tipoIdentificaciones){ 

        tipoIdentificaciones.forEach(tipos=>{ 
            let html="<option value="+tipos.tipoIdentificacionID +">"+tipos.tipoIdentificacionTITULO+"</option>";
            $("#personaTIPOIDENTIFICACION").append(html);
            
        });
        

    }
    function eventoSeleccionado(eventoID,eventoTITULO){
        $(".tituloEvento").html(eventoTITULO);
        $("#eventoID").val(eventoID);
    }

</script>
