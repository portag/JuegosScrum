<?php


//Función para limpiar los input de los formularios
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
?>
<?php
function pintarJuegos (){
include('modelo.php');
$juegos = selectJuegos();

echo "<ul class='list-group'>";
//Cabecera
echo "<li class='list-group-item fw-bold'>";
echo "<div class='row'>";
echo "<div class='col'>ID</div>";
echo "<div class='col'>Titulo</div>";
echo "<div class='col'>Descripción</div>";
echo "<div class='col'>Plataforma</div>";
echo "<div class='col'>Genero</div>";
echo "<div class='col'>Acciones</div>";
echo "</div>";
echo "</li>";
//Contenido
foreach ($juegos as $juego) {
    echo "<li class='list-group-item'>";
    echo "<div class='row'>";

    foreach ($juego as $key => $value) {
            echo "<div class='col'>";
            echo $value;
            echo "</div>";
        
    }

    //Acciones
    echo "<div class='col'>";
    echo "<div class='col'>";
    echo "<a href='controlador.php?accion=infoLocalizacion&id=" . $juego['id'] . "' class='btn btn-info btn-circle' style='--bs-btn-color: #ffffff; --bs-btn-hover-color: #fff;'> <i
    class='fas fa-map'></i></a>";
    echo "<a href='controlador.php?accion=borrar&id=" . $juego['id'] . "'  class='btn btn-danger btn-circle'><i class='fas fa-trash' ></i></a>";
    echo "</div>";
    echo "</div>";

    echo "</div>";
    echo "</li>";
}
echo "</ul>";


}
?>
<?php
function pintarLocalizacion (){
include('modelo.php');
$localizaciones = selectLocalizacion($idJuegos);

echo "<ul class='list-group'>";
//Cabecera
echo "<li class='list-group-item fw-bold'>";
echo "<div class='row'>";
echo "<div class='col'>Nombre</div>";
echo "<div class='col'>Descripción</div>";
echo "<div class='col'>pInteres</div>";
echo "<div class='col'>Importancia</div>";
echo "<div class='col'>idJuego</div>";
echo "<div class='col'>Acciones</div>";

echo "</div>";
echo "</li>";
//Contenido
foreach ($localizaciones as $localizacion) {
    echo "<li class='list-group-item'>";
    echo "<div class='row'>";

    foreach ($localizacion as $key => $value) {
        if ($key != "id") {
            echo "<div class='col'>";
            echo $value;
            echo "</div>";
        }
    }

    //Acciones
    echo "<div class='col'>";
    echo "<div class='col'>";
    echo "<a href='controlador.php?accion=borrarLocalizacion&id=" . $localizacion['nombre'] . "'  class='btn btn-danger btn-circle'><i class='fas fa-trash' ></i></a>";
    echo "</div>";
    echo "</div>";

    echo "</div>";
    echo "</li>";
}
echo "</ul>";


}
?>
</tbody>
</table>