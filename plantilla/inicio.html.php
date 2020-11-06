{% extends "base.html.php" %}


{% block logo %}
<img src="img/logo.png" width="30" height="30" alt="">                 
Aplicación CCSM
{% endblock %}

                  

{% block contenido %}

    <div class="container">
        <div class="glider-contain">
          <div class="glider">
<!-- Boton de anterior -->
          <button aria-label="Previous" class="glider-prev">
            <i class="fas fa-chevron-circle-left"></i>
          </button>
            <div class="lista__elementos">
              <div class="card">
                  <div class="image">
                      <img src="img/bird-feeder.jpg" alt="imagen" class="img-event"> 
                  </div>

                  <div class="content">
                      <div class="title"> nombre del evento tattat</div>
                      <div class="bottom">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="image">
                      <img src="img/bird-feeder.jpg" alt="imagen" class="img-event"> 
                  </div>

                  <div class="content">
                      <div class="title"> nombre del evento tattat</div>
                      <div class="bottom">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="image">
                      <img src="img/bird-feeder.jpg" alt="imagen" class="img-event"> 
                  </div>

                  <div class="content">
                      <div class="title"> nombre del evento tattat</div>
                      <div class="bottom">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="image">
                      <img src="img/bird-feeder.jpg" alt="imagen" class="img-event"> 
                  </div>

                  <div class="content">
                      <div class="title"> nombre del evento tattat</div>
                      <div class="bottom">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="image">
                      <img src="img/bird-feeder.jpg" alt="imagen" class="img-event"> 
                  </div>

                  <div class="content">
                      <div class="title"> nombre del evento tattat</div>
                      <div class="bottom">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Registrarme</button>
                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="image">
                      <img src="img/bird-feeder.jpg" alt="imagen" class="img-event"> 
                  </div>

                  <div class="content">
                      <div class="title"> nombre del evento tattat lor</div>
                      <div class="bottom">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Registrarme</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
<!-- Boton de siguiente -->
          <button aria-label="Next" class="glider-next">
            <i class="fas fa-chevron-circle-right"></i>
          </button>
<!-- pagination -->
          <div role="tablist" class="dots"></div>
    </div>

    </div>    


<!-- MODAL -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">%%nombreDelEvento%%</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <form>
<!-- Identificacion -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tipoIdentificacion">tipo de indetificacion</label>
            <select id="inputState" class="form-control">
              <option selected>---</option>
              <option>opcion 1</option>
              <option>opcion 3</option>
              <option>opcion 4</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label for="identificacion">identificacion</label>
            <input type="number" class="form-control" placeholder="identificacion">
          </div>
        </div>

<!-- Nombres -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="primerNombre">primer nombre</label>
            <input type="text" class="form-control" placeholder="primer nombre">
          </div>
          <div class="col-md-6 mb-3">
            <label for="segunNombre">segundo nombre</label>
            <input type="text" class="form-control" placeholder="segundo nombre">
          </div>
        </div>
<!-- Apellidos -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="primerApellido">primer Apellido</label>
            <input type="text" class="form-control" placeholder="primer apellido">
          </div>
          <div class="col-md-6 mb-3">
            <label for="segunApellido">segundo Apellido</label>
            <input type="text" class="form-control" placeholder="segundo apellido">
          </div>
        </div>

<!-- Correo y Telefono -->
        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="correEletronico">correo eletronico</label>
              <input type="email" class="form-control" placeholder="correo eletronico">
            </div>
            <div class="col-md-6 mb-3">
              <label for="telefono">telefono</label>
              <input type="number" class="form-control" placeholder="telefono">
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
/* 
    $('.card').hover(function(){
        if($(this).hasClass("active")){
           $('.card .bottom').slideUp(function(){
                $('.card').removeClass("active")
           });
        }else{
            $('.card').addClass("active")
            $('.card .bottom').stop().slideDown();
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
{% endblock %}