<?php
session_start();
include("lib.php");
include("modelo.php");
?>
<?php

if(isset($_GET["accion"])){
    if($_GET["accion"] == "insertar"){

        $titulo = filtrado($_GET["titulo"]);
        $descripcion = filtrado($_GET["descripcion"]);
        $plataforma = filtrado($_GET["plataforma"]);
        $genero = filtrado($_GET["genero"]);
        insertarJuego($titulo, $descripcion, $plataforma, $genero);

        header("Location: index.php");
    }

    if($_GET["accion"] == "borrar"){
        borrarJuego(filtrado($_GET["titulo"]));
        header("Location: index.php");
    }

}

?>

