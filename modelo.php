<?php

    //CONECCION A BASE DE DATOS HEROKU
    // function conexionBD2() {
    //     $dbh = null;

    //     try {
    //         //mariadb --> nombre del contenedor donde tengamos mysql
    //         //FALTA CONECTARTLO A HEROKU 
    //         $dsn = "mysql:host=mysql;dbname=servidor";
    //         $dbh = new PDO($dsn, "root", "toor");
    //     } catch (PDOException $e){
    //         echo $e->getMessage();
    //     }

    //     return $dbh;
    // }


    //CONECCION A BASE DE DATOS LOCAL
    function conexionBD() {
        $dbh = null;

        try {
            //mariadb --> nombre del contenedor donde tengamos mysql

            $dsn = "mysql:host=mariadb2;dbname=scrum";
            $dbh = new PDO($dsn, "root", "toor");
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
    }


    //FUNCION INSERTAR JUEGO EN LA BASE DE DATOS
    function insertarJuego($titulo, $descripcion, $plataforma, $genero) {
        
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("INSERT INTO juegos (titulo, descripcion, plataforma, genero) VALUES (?, ?, ?, ?)" );
    
            $stmt->bindValue(1, $titulo);
            $stmt->bindValue(2, $descripcion);
            $stmt->bindValue(3, $plataforma);
            $stmt->bindValue(4, $genero);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    //FUNCION INSERTAR LOCALIZACION EN LA BASE DE DATOS
    function insertarLocalizacion($nombre, $descripcion, $pInteres, $importancia, $idJuegos ){
        
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("INSERT INTO localizaciones (nombre, descripcion, pInteres, importancia, idjuegos) VALUES (?, ?, ?, ?, ?)");
    
            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $descripcion);
            $stmt->bindValue(3, $pInteres);
            $stmt->bindValue(4, $importancia);
            $stmt->bindValue(5, $idJuegos);
            //$_GET['$idJuego']

            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }


    //FUNCION BORRAR JUEGO DE LA BASE DE DATOS
    function borrarJuego($idJuego) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("DELETE FROM juegos WHERE id = ?");
            $stmt->bindValue(1, $idJuego);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }
    //MOSTRAR TABLA juegos DE LA BASE DE DATOS
    function selectJuegos() {

        $conexion = conexionBD();
        $tareas = null;

        try {
            $stmt = $conexion->prepare("SELECT * FROM juegos");
            $stmt->execute();
            $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }   
        $conexion = null; //Cerrar la conexión

        return $tareas;
    }

    function borrarLocalizacion($idLoca) {

        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("DELETE FROM localizaciones WHERE idLoca = ?");
            $stmt->bindValue(1, $idLoca);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }

    function borrarLocalizacion2($ids) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("DELETE FROM localizaciones WHERE idLoca = ?");
            $stmt->bindValue(1, $ids);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }


//MOSTRAR TABLA juegos DE LA BASE DE DATOS
function selectLocalizacion($idJuegos) {

    $conexion = conexionBD();
    $tareas = null;

    try {
        $stmt = $conexion->prepare("SELECT * FROM localizaciones WHERE idJuegos = ?");
        $stmt->bindValue(1, $idJuegos);
        $stmt->execute();
        $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }   
    $conexion = null; //Cerrar la conexión

    return $tareas;
}










  
?>