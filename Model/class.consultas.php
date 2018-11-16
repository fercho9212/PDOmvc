<?php 
    class Consultas{

        public function insertar($name,$description,$category,$sale){
            $modelo=new Conexion();
            $conexion=$modelo->get_conexion();
            $sql = "INSERT INTO products (name,description,category,sale) VALUES(:name,:description,:category,:sale)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':name', $name);
            $statement->bindParam(':description', $description);
            $statement->bindParam(':category', $category);
            $statement->bindParam(':sale', $sale);
            if (!$statement) {
                echo "Error al crear la consulta";
            } else {
                $statement->execute();
                echo "Registro creado";
            }
           
        }

        public function load(){
            $rows=null;
            $modelo= new Conexion();
            $conexion=$modelo->get_conexion();
            $sql= "SELECT * FROM products";
            $statement=$conexion->prepare($sql);
            $statement->execute();
            while($result=$statement->fetch()){
                $rows[]=$result;
            }
            return $rows;
        }

        public function delete(){
            $modelo=new Conexion();
            $conexion=$modelo->get_conexion();
            $sql="DELETE FROM produts WHERE id=:id";
            $statement=$conexion->prepare($sql);
            $statement->bindParam(':id',$id);
            if(!$statement){
                return "Error al eliminar";
            }else{
                $statement->execute();
                return "delete succes";
            }
        }
    }
?>