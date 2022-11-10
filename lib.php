<?php


//Función para limpiar los input de los formularios
function filtrado($datos)
{
  $datos = trim($datos); // Elimina espacios antes y después de los datos
  $datos = stripslashes($datos); // Elimina backslashes \
  $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
  return $datos;
}

function pintarJuego()
{
  echo "<table class='table table-bordered text-center' style='font-size: 15px;' id='dataTable' width='100%' cellspacing='0'>";
  //CABECERA                  
  echo "<thead>";
  echo "<tr>";
   echo "<th>Titulo</th>";
   echo "<th>Descripcion</th>";
  echo "<th>Plataforma</th>";
    echo  "<th>Género</th>";
   echo  "</tr>";
    echo "</thead>";
    echo "<tfoot>";
    echo" <tr>";
   echo "<th>Titulo</th>";
   echo "<th>Descripcion</th>";
    echo "<th>Plataforma</th>";
   echo "<th>Género</th>";
    echo  "</tr>";
   echo "</tfoot>";
    echo  "<tbody>";
}
