<?php
include_once('modelo.php');

//Función para limpiar los input de los formularios
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

function pintarJuegos (){
    
    $juegos = selectJuegos();

    echo "<table class='table'>";
    //Cabecera
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Titulo </th>";
    echo "<th> Descripción </th>";
    echo "<th> Plataforma </th>";
    echo "<th> Genero </th>";
    echo "<th> Acciones </th>";
    echo "</tr>";

    //Contenido
    foreach ($juegos as $juego) {
    echo '<tr>';
    echo '<td>'.$juego['id'].'</td>';
    echo '<td>'.$juego['titulo'].'</td>';
    echo '<td>'.$juego['descripcion'].'</td>';
    echo '<td>'.$juego['plataforma'].'</td>';
    echo '<td>'.$juego['genero'].'</td>';
 
    //Acciones
    echo "<td><a href='controlador.php?accion=infoLocalizacion&id=" . $juego['id'] . "' class='btn btn-info btn-circle' style='--bs-btn-color: #ffffff; --bs-btn-hover-color: #fff;'> <i
    class='fas fa-map'></i></a>";
    echo "<a href='controlador.php?accion=borrar&id=" . $juego['id'] . "'  class='btn btn-danger btn-circle'><i class='fas fa-trash' ></i></a></td>";

    echo "</tr>";
    
    }
    echo "</table>";

}

function pintarLocalizacion ($idJuegos){

        $localizaciones = selectLocalizacion($idJuegos);

        echo "<table class='table'>";
        //Cabecera
        echo "<tr>";
        echo "<th> Nombre </th>";
        echo "<th> Descripción </th>";
        echo "<th> pInteres </th>";
        echo "<th> Importancia </th>";
        echo "<th> idJuego </th>";
        echo "<th> Acciones </th>";
        echo "</tr>";


    //Contenido
    foreach ($localizaciones as $localizacion) {
        echo "<tr>";
        echo "<td>".$localizacion['nombre']."</td>";
        echo "<td>".$localizacion['descripcion']."</td>";
        echo "<td>".$localizacion['pInteres']."</td>";
        echo "<td>".$localizacion['importancia']."</td>";
        echo "<td>".$localizacion['idjuegos']."</td>";
        echo "<td> <a href='controlador.php?accion=borrarLocalizacion&idLoca=".$localizacion['idLoca']."'class='btn btn-danger btn-circle'><i class='fas fa-trash' ></i></a></td>";
        echo "</tr>";

    }
        
    echo "</table>";
}
?>


