<?php

    //CONECCION A BASE DE DATOS HEROKU
    function conexionBD2() {
        $dbh = null;

        try {
            //mariadb --> nombre del contenedor donde tengamos mysql
            //FALTA CONECTARTLO A HEROKU 
            $dsn = "mysql:host=mysql;dbname=servidor";
            $dbh = new PDO($dsn, "root", "toor");
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
    }


    //CONECCION A BASE DE DATOS LOCAL
    function conexionBD() {
        $dbh = null;

        try {
            //mariadb --> nombre del contenedor donde tengamos mysql

            $dsn = "mysql:host=localhost;dbname=scrum";
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

    //FUNCION BORRAR JUEGO DE LA BASE DE DATOS
    function borrarJuego($tituloJuego) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("DELETE FROM juegos WHERE titulo = ?");
            $stmt->bindValue(1, $tituloJuego);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }





  
?>