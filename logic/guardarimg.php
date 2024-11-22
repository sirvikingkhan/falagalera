<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
    $imagen = $_POST['captura'];
    //guardar imágen al servidor
    if(strlen($imagen)>0){
        $img_a_guardar = base64_decode(preg_replace('/^[^,]*,/', '', $_POST['captura']));
        $nombre_foto = "captura".uniqid().".png";
        $ruta_foto = "../views/fotos/".$nombre_foto;

        file_put_contents($ruta_foto, $img_a_guardar);

        $error=0;
        $mensaje = "Imagen almacenada";
        $datos = $ruta_foto;
    } else{
        $error=1;
        $mensaje = "Sin imagen";
        $datos = "";
    }

    //Empaquetar JSON
    $resp=[
        "error" =>$error,
        "mensaje"=>$mensaje,
        "datos"=>$datos
    ];
    echo json_encode($resp);
}
?>