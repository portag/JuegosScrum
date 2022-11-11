<?php
session_start();
include("lib.php");
include("modelo.php");
?>
<?php


//para añadir juego
if (isset($_GET["insertar"])) {
    $titulo = filtrado($_GET["titulo"]);
    $descripcion = filtrado($_GET["descripcion"]);
    $plataforma = filtrado($_GET["plataforma"]);
    $genero = filtrado($_GET["genero"]);
    insertarJuego($titulo, $descripcion, $plataforma, $genero);
    header("Location: index.php");
}


//para añadir localizacion
if (isset($_GET["insertarLocalizacion"])) {
    $nombre = filtrado($_GET["nombre"]);
    $descripcion = filtrado($_GET["descripcion"]);
    $pInteres = filtrado($_GET["pInteres"]);
    $importancia = filtrado($_GET["importancia"]);
    $idJuegos = filtrado($_GET["idJuegos"]);
    insertarLocalizacion($nombre, $descripcion, $pInteres, $importancia, $idJuegos);
    header("Location: index.php");
}




//para los botones con variable accion
if (isset($_GET["accion"])) {

    //borrar un juego por titulo
    if ($_GET["accion"] == "borrar") {
        borrarJuego(filtrado($_GET["titulo"]));
        header("Location: index.php");
    }

    //borrar localizacion por el id 
    if ($_GET["accion"] == "borrarLocalizacion") {
        borrarLocalizacion(filtrado($_GET["nombre"]));
        header("Location: localizaciones.php");
    }

    if ($_GET["accion"] == "infoLocalizacion") {

        $i = $_GET["id"];
        header("Location:localizaciones.php?ids=" . $i);
    }
}


?>

