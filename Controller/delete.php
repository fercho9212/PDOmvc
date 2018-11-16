<?php
    require_once('../Model/class.conexion.php');
    require_once('../Model/class.consultas.php');
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $consultas= new Consultas();
        $mensaje=$consultas->delete($id);
        echo $mensaje;
    }
?>