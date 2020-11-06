{% extends "base.html.php" %}


{% block logo %}
<img src="img/logo.png" width="30" height="30" alt="">                 
Aplicación CCSM
{% endblock %}

                  

{% block contenido %}

<div class="jumbotron wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
    <div class="container">
        <div class="card">
            <div class="image">
                 <img src="img/bird-feeder.jpg" alt="imagen" class="img-event"> 
            </div>

            <div class="content">
                <div class="title"> nombre del evento</div>
                <div class="bottom">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Registrarme</button>
                </div>
            </div>
        </div>
    </div>    
</div>


<!-- MODAL -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
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

    $('.card').hover(function(){
        if($(this).hasClass("active")){
           $('.card .bottom').slideUp(function(){
                $('.card').removeClass("active")
           });
        }else{
            $('.card').addClass("active")
            $('.card .bottom').stop().slideDown();
        }
    });
</script>
{% endblock %}