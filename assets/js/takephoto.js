'use strict';
document.getElementById('canvas').style.display = 'none';
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');

const constraints = {
    audio: false,
    video: {
        width: 1280,
        height: 720
    }
};

async function init() {
    try {
        const stream = awaitnavigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
    } catch (e) {
        $("mensaje").html("Debe seleccionar un dispositivo y permitir acceso al navegador");
    }
}

function handleSuccess(stream) {
    window.stream = stream;
    video.srcObject = stream;
}

init()


function capturar_foto() {
    var context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, 480, 360);
    document.getElementById("canvas").style.display = 'block';
    document.getElementById("video").style.display = 'none';
    document.getElementById("btn_guardar").style.display = 'block';

}

function guardar_foto() {
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    var dataUrl = canvas.toDataURL();
    var formData = new FormData();

    formData.append("captura", dataUrl);

    $.ajax({
        url: "quritaky/../logic/guardarimg.php",
        url: "quritaky/../views/registerStudent.php",
        type: "POST",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(resp) {
            //var msj=JSON.parse(resp);
            var msj = resp;
            if (msj.error == 0) {
                $("#mensaje").html(msj.mensaje);
                alert(msj.mensaje);
            } else {
                $("#mensaje").html(msj.mensaje);
                alert(msj.mensaje);
            }
        }
    });
}