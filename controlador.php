<?php
include_once("lib.php");
include_once("modelo.php");
?>
<?php


//para añadir juego
if (isset($_GET["insertar"])) {
    $titulo = filtrado($_GET["titulo"]);
    $descripcion = filtrado($_GET["descripcion"]);
    $plataforma = filtrado($_GET["plataforma"]);
    $genero = filtrado($_GET["genero"]);
    insertarJuego($titulo, $descripcion, $plataforma, $genero);
    echo '<script>window.location="' . "index.php" . '"</script>';
}


//para añadir localizacion
if (isset($_GET["insertarLocalizacion"])) {
    $nombre = filtrado($_GET["nombre"]);
    $descripcion = filtrado($_GET["descripcion"]);
    $pInteres = filtrado($_GET["pInteres"]);
    $importancia = filtrado($_GET["importancia"]);
    $idJuegos = filtrado($_GET["idJuegos"]);
    insertarLocalizacion($nombre, $descripcion, $pInteres, $importancia, $idJuegos);
    echo '<script>window.location="' . "index.php" . '"</script>';
}

    //para los botones con variable accion
    if (isset($_GET["accion"])) {

    //borrar un juego por titulo
    if ($_GET["accion"] == "borrar") {
        borrarJuego(filtrado($_GET["id"]));
        echo '<script>window.location="'."index.php".'"</script>';
    }

    //borrar localizacion por el id 
    if ($_GET["accion"] == "borrarLocalizacion") {
        borrarLocalizacion2(filtrado($_GET["idLoca"]));
        echo '<script>window.location="'."index.php".'"</script>';
        
    }

}


?>

