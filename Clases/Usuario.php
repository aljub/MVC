<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 17/10/14
 * Time: 06:15 PM
 */


class Usuario {

    private $name;

    public function getUsuario(){
        echo"<br>Mostrar usuario: ".$this->name;

    }

    public function setUsuario(){
        $this->name = "Albert";
        return $this->name;

    }


    public function Read_General(){
        $sql01 = "SELECT * FROM usuario WHERE estatus = 1 ORDER BY apellido_paterno ASC; ";
        $result01= mysql_query($sql01)or die ("Error sql0");
        echo"<div style='margin-top:10%; margin-bottom:10%; '>";
        echo"<table border=1>";
        echo"<tr><td colspan='5'>Lista de usuarios</td></tr>";
        echo"<tr></tr><td>ID</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Nivel</td></tr>";

        while($field = mysql_fetch_array($result01)){
            $this->ID=$field['id'];
            $this->Nombre=$field['nombre'];
            $this->Apellidop=$field['apellido_paterno'];
            $this->Apellidom=$field['apellido_materno'];
            $this->Nivel=$field['nivel'];
            switch($this->Nivel){
                case 1:
                    $type ="Administrador";
                    break;
                case 2:
                    $type="Maestro";
                    break;
                case 3:
                    $type="Alumno";
                    break;


            }
            echo"<tr><td>$this->ID</td><td>$this->Nombre</td><td>$this->Apellidop</td><td>$this->Apellidom</td><td>$type</td></tr>";
        }
        echo"</table>";
        echo"</div>";
    }

}

