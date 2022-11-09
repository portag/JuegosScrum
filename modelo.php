<?php

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

  
?>