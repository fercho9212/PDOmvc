<?php

class Conexion{

    public function get_conexion(){
        $user="root";
        $pass="root";
        $host="localhost";
        $db="pdo";
        try{
            $conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
        }catch(\PDOException $e){
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        
        return $conexion;
    }
}