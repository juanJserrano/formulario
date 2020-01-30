var _apisicam = _apisicam || {};
_apisicam.clavePublica = 'm8mcJFLAGT5ba%2FP%2BUNITJv3jf9%2FU4zDM2DERnNFpMjGhC1xXlFAPleRAorZVikJA';
_apisicam.clavePrivada = 'l6LHlDIvNrsuFtLDZx0ti80%2BZltejZmFVokVWczuEuU%3D';
window.apisicam || (function (d) {
    var s, c, o = apisicam = function () {
        o._.push(arguments)
    };
    o._ = [];
    s = d.getElementsByTagName('script')[0];
    c = d.createElement('script');
    c.type = 'text/javascript';
    c.charset = 'utf-8';
    c.async = true;
    c.src = 'https://api.sicam32.net/clientes/javascript/index.php?' + _apisicam.clavePublica + ':' + _apisicam.clavePrivada;
    s.parentNode.insertBefore(c, s);
})(document);



function cargarPlugins() {
    $("form").attr('onsubmit', 'return false;');
    $("form").attr('enctype', 'application/x-www-form-urlencoded');
}

function ocultarCargando() {
    $(".loader").fadeOut();
}

function mostrarCargando() {
    $(".loader").fadeIn();
}

function crearObjetoDatos(idElementoForm) {
    var formElement = document.getElementById(idElementoForm);
    console.log(formElement);
    var formdata = new FormData(formElement);
    console.log(formdata);
    for (var key of formdata.entries()) {
        //console.log(key[0] + ', ' + key[1]);
    }
    return formdata;
}

function cargarVista(idDiv, Controlador, Vista, functionEjecutable = null, procesarDatos = true, tipoContenidoEnviado = 'application/x-www-form-urlencoded; charset=UTF-8') {
    mostrarCargando();
    var datosOperacion = "controlador=" + Controlador + "&operacion=" + Vista;
    $.ajax({
        type: 'POST',
        url: 'api.php',
        cache: false,
        contentType: tipoContenidoEnviado,
        processData: procesarDatos,
        data: datosOperacion,
        success: function (response) {
            $("#" + idDiv).html(response);
            if (typeof functionEjecutable === "function") {
                funcionEjecutable(response);
            }

            cargarPlugins();
            ocultarCargando();
        },
        error: function (error) {
            alertaError("Ocurrio un error en la comunicacion con el sistema.\r\n Contacte con el Centro TICS.");
            console.log(error);
            desactivarLoader();
            //quitarCargandoDivision(idDivision);
        }
    });
//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function () {
//        console.log(this);
//        if (this.readyState == 4 && this.status == 200) {
//            document.getElementById(idDiv).innerHTML = this.responseText;
//            if (typeof functionEjecutable === "function") {
//                functionEjecutable();
//            }
//            ocultarCargando();
//        }
//    };
//    xhttp.open("POST", "api.php", true);
//    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//    xhttp.send("controlador=" + Controlador + "&operacion=" + Vista);
}

function cargarVistaEnDivSICAM(idDiv, rutaOperacion, datosOperacion, functionEjecutable = null) {
    mostrarCargando();
    ApiSicam.ejecutarPost(rutaOperacion, datosOperacion,
            function (respuestaHTML) {
                $("#" + idDiv).html(respuestaHTML);
                if (typeof functionEjecutable === "function") {
                    functionEjecutable();
                }
                cargarPlugins();
                ocultarCargando();
            }
    );
}

function ejecutarOperacionSICAM(rutaOperacion, datosOperacion, functionEjecutable = null) {
    mostrarCargando();
    ApiSicam.ejecutarPost(rutaOperacion, datosOperacion,
            function (respuestaHTML) {
                console.log(respuestaHTML);
                console.log(respuestaHTML.MENSAJE);
                validarRespuesta(respuestaHTML, function (respuestaHTML) {
                    if (typeof functionEjecutable === "function") {
                        functionEjecutable(respuestaHTML);
                    }
                });
                ocultarCargando()
            }
    );
}

function validarRespuesta(response, funcionEjecutable = null) {
//    if (isJson(data)) {
//        var response = JSON.parse(data);
    switch (response.RESPUESTA) {
        case 'EXITO':
            if (response.MENSAJE != null && response.MENSAJE != "") {
                avisoExito(response.MENSAJE);
            }
            if (funcionEjecutable != null) {
                funcionEjecutable(response.DATOS);
            }
            break;
        case 'ERROR':
            avisoError(response.MENSAJE);
            break;
        case 'FALLO':
            avisoPrevencion(response.MENSAJE);
            break;
        case 'ALERTA':
            avisoPrevencion(response.MENSAJE);
            if (funcionEjecutable != null) {
                funcionEjecutable(response.DATOS);
            }
            break;
        case 'INFO':
            avisoInformacion(response.MENSAJE);
            if (funcionEjecutable != null) {
                funcionEjecutable(response.DATOS);
            }
            break;
}
//    } else {
//        var txtMsn = "La respuesta de la operacion, no cumple con el formato esperado.<br />Contacta con el Centro TICS. <em>SOLO PARA EL CENTRO TICS: [Verfica en la consola los datos del error]</em>.";
//        avisoError(txtMsn);
//    }
}

//Ventanas de Alerta - Personalizadas     
function avisoError(texto) {
    beepError();
    return Swal.fire({
        icon: 'error',
        title: 'Oops... ¡Error!',
        html: texto
    });
}

function avisoInformacion(texto) {
    return Swal.fire({
        title: '¡Atento!',
        icon: 'info',
        html: texto,
        showCloseButton: true
    });
}

function avisoPrevencion(texto) {
    beepNotificacion(100);
    return Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: 'Cuidado!',
        html: texto,
        showConfirmButton: true,
        timer: 43210
    });
}

function avisoExito(texto) {
    return Swal.fire({
        title: 'Bien hecho!',
        icon: 'success',
        html: texto,
        showConfirmButton: false,
        timer: 30456
    });
}



