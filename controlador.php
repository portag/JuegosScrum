<?php
session_start();
include("lib.php");
include("modelo.php");
?>
<?php

if(isset($POST["accion"])){
    if($_POST["accion"] == "insertar"){

        $titulo = filtrado($_POST["titulo"]);
        $descripcion = filtrado($_POST["descripcion"]);
        $plataforma = filtrado($_POST["plataforma"]);
        $genero = filtrado($_POST["genero"]);
        insertarJuego($titulo, $descripcion, $plataforma, $genero);

        header("Location: index.php");
    }

    if($_POST["accion"] == "borrar"){
        borrarJuego(filtrado($_POST["titulo"]));
        header("Location: index.php");
    }

}

?>

