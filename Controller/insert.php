<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once ('../Model/class.conexion.php');
    require_once ('../Model/class.consultas.php');


    $name=$_POST['name'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    $sales=$_POST['sales'];

    if(isset($name,$description,$category,$sales)){
        $consultas=new Consultas();
        $msg=$consultas->insertar($name, $description,$category, $sales);
        echo "<a href='../insert.html'>Nuevo Producto</a>";
    }else{
        echo "Completar todos los campos";
    }
    echo $msg;
?>